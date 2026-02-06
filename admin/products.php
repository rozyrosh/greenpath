<?php
ob_start();
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../includes/db.php';

// Handle Actions (Process these BEFORE outputting any HTML)

// 1. Handle Status/Featured Toggle via GET
if (isset($_GET['set_featured']) && isset($_GET['p_id'])) {
    $img_id = intval($_GET['set_featured']);
    $p_id = intval($_GET['p_id']);

    // Validate Product ID exists
    $check_prod = $conn->query("SELECT id FROM products WHERE id=$p_id");
    if ($check_prod->num_rows > 0) {
        // Get image path
        $res = $conn->query("SELECT image_path FROM product_images WHERE id=$img_id");
        if ($res && $row = $res->fetch_assoc()) {
            $path = $row['image_path'];
            $stmt = $conn->prepare("UPDATE products SET image_main=? WHERE id=?");
            $stmt->bind_param("si", $path, $p_id);
            if ($stmt->execute()) {
                $_SESSION['flash_msg'] = "Featured image updated.";
            } else {
                $_SESSION['flash_error'] = "Db error: " . $conn->error;
            }
        }
    }
    header("Location: products.php?edit=" . $p_id);
    exit();
}

if (isset($_GET['delete_image']) && isset($_GET['p_id'])) {
    $img_id = intval($_GET['delete_image']);
    $p_id = intval($_GET['p_id']);

    $res = $conn->query("SELECT image_path FROM product_images WHERE id=$img_id");
    if ($row = $res->fetch_assoc()) {
        if (file_exists("../" . $row['image_path'])) {
            unlink("../" . $row['image_path']);
        }
    }
    $conn->query("DELETE FROM product_images WHERE id=$img_id");
    header("Location: products.php?edit=" . $p_id);
    exit();
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: products.php");
    exit();
}

// 2. Handle POST Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_product'])) {
    $name = $_POST['name'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];

    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : null;
    $msg = "";
    $error = "";

    // Create or Update Product
    if ($product_id) {
        $stmt = $conn->prepare("UPDATE products SET name=?, slug=?, category_id=?, price=?, stock_quantity=?, description=? WHERE id=?");
        $stmt->bind_param("ssidssi", $name, $slug, $category_id, $price, $stock, $description, $product_id);
        if (!$stmt->execute())
            $error = "Error updating product: " . $conn->error;
    } else {
        $stmt = $conn->prepare("INSERT INTO products (name, slug, category_id, price, stock_quantity, description) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssidss", $name, $slug, $category_id, $price, $stock, $description);
        if ($stmt->execute()) {
            $product_id = $stmt->insert_id;
        } else {
            $error = "Error adding product: " . $conn->error;
        }
    }

    // Handle Image Uploads
    if ($product_id && !$error) {
        if (isset($_FILES['images']) && !empty(array_filter($_FILES['images']['name']))) {
            $target_dir = "../assets/uploads/products/";
            if (!file_exists($target_dir))
                mkdir($target_dir, 0777, true);

            $first_uploaded_path = null;

            foreach ($_FILES['images']['name'] as $key => $filename) {
                if ($_FILES['images']['error'][$key] !== 0)
                    continue;

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
                $allowed_types = array('jpg', 'jpeg', 'png', 'webp');

                if (in_array(strtolower($file_extension), $allowed_types)) {
                    $new_filename = $product_id . "_" . uniqid() . "." . $file_extension;
                    $target_file = $target_dir . $new_filename;

                    if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
                        $db_path = "assets/uploads/products/" . $new_filename;

                        $stmt = $conn->prepare("INSERT INTO product_images (product_id, image_path) VALUES (?, ?)");
                        $stmt->bind_param("is", $product_id, $db_path);
                        $stmt->execute();

                        if (!$first_uploaded_path)
                            $first_uploaded_path = $db_path;
                    }
                }
            }

            // Set default main image if none exists
            $check_main = $conn->query("SELECT image_main FROM products WHERE id=$product_id")->fetch_assoc();
            if (empty($check_main['image_main']) && $first_uploaded_path) {
                $stmt = $conn->prepare("UPDATE products SET image_main=? WHERE id=?");
                $stmt->bind_param("si", $first_uploaded_path, $product_id);
                $stmt->execute();
            }
        }
    }

    if (!$error) {
        $_SESSION['flash_msg'] = "Product saved successfully.";
        header("Location: products.php?edit=" . $product_id);
        exit();
    }
}

// End of Logic Handling. Now output HTML.
include 'includes/header.php';

$edit_mode = false;
$edit_data = null;
$product_images = [];

// Prepare Data for View
if (isset($_GET['edit'])) {
    $edit_mode = true;
    $id = intval($_GET['edit']);
    $result = $conn->query("SELECT * FROM products WHERE id=$id");
    $edit_data = $result->fetch_assoc();

    $img_result = $conn->query("SELECT * FROM product_images WHERE product_id=$id");
    while ($img = $img_result->fetch_assoc()) {
        $product_images[] = $img;
    }
}
?>

<!-- Flash Messages -->
<?php if (isset($_SESSION['flash_msg'])): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 mx-6 mt-4" role="alert">
        <span class="block sm:inline"><?php echo $_SESSION['flash_msg'];
        unset($_SESSION['flash_msg']); ?></span>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['flash_error'])): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 mx-6 mt-4" role="alert">
        <span class="block sm:inline"><?php echo $_SESSION['flash_error'];
        unset($_SESSION['flash_error']); ?></span>
    </div>
<?php endif; ?>

<!-- Add Product Button -->
<div class="mb-6 flex justify-between items-center">
    <h2 class="text-2xl font-bold text-gray-800">Products</h2>
    <button onclick="openModal()"
        class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded shadow">
        <i class="fas fa-plus mr-2"></i> Add New Product
    </button>
</div>

<!-- Modal Backdrop -->
<div id="productModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
    <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-md bg-white">

        <div class="flex justify-between items-center mb-4 border-b pb-2">
            <h3 class="text-xl font-bold text-gray-800" id="modalTitle">
                <?php echo $edit_mode ? 'Edit Product' : 'Add New Product'; ?></h3>
            <button onclick="closeModal()" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
        </div>

        <form method="POST" action="" enctype="multipart/form-data">
            <?php if ($edit_mode): ?>
                <input type="hidden" name="product_id" value="<?php echo $edit_data['id']; ?>">
            <?php endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="md:col-span-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($edit_data['name'] ?? ''); ?>"
                        required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500">
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                    <select name="category_id"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500">
                        <?php
                        $cats = $conn->query("SELECT * FROM categories");
                        while ($c = $cats->fetch_assoc()) {
                            $selected = ($edit_mode && $edit_data['category_id'] == $c['id']) ? 'selected' : '';
                            echo "<option value='" . $c['id'] . "' $selected>" . $c['name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Price ($)</label>
                    <input type="number" step="0.01" name="price" value="<?php echo $edit_data['price'] ?? ''; ?>"
                        required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500">
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Stock Quantity</label>
                    <input type="number" name="stock" value="<?php echo $edit_data['stock_quantity'] ?? '1'; ?>"
                        required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Product Images (Max 10)</label>
                    <input type="file" name="images[]" multiple accept="image/*"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500">
                    <p class="text-xs text-gray-500 mt-1">You can select multiple files.
                        <?php echo $edit_mode ? 'New uploads will be added to the existing gallery.' : 'First image will be default featured.'; ?>
                    </p>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea name="description" rows="3"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500"><?php echo htmlspecialchars($edit_data['description'] ?? ''); ?></textarea>
                </div>
            </div>

            <!-- Existing Gallery (Only in Edit Mode) -->
            <?php if ($edit_mode && !empty($product_images)): ?>
                <div class="mb-6 border-t pt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Gallery Management</label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <?php foreach ($product_images as $img):
                            $is_featured = ($edit_data['image_main'] == $img['image_path']);
                            ?>
                            <div
                                class="relative group border rounded p-1 <?php echo $is_featured ? 'border-emerald-500 ring-2 ring-emerald-200' : 'border-gray-200 hover:border-emerald-300'; ?>">

                                <!-- Click Image to Feature -->
                                <?php if (!$is_featured): ?>
                                    <a href="products.php?set_featured=<?php echo $img['id']; ?>&p_id=<?php echo $edit_data['id']; ?>"
                                        class="block cursor-pointer" title="Make Featured">
                                        <img src="../<?php echo $img['image_path']; ?>"
                                            class="w-full h-20 object-cover rounded hover:opacity-90 transition">
                                    </a>
                                <?php else: ?>
                                    <img src="../<?php echo $img['image_path']; ?>" class="w-full h-20 object-cover rounded">
                                <?php endif; ?>

                                <!-- Delete Button -->
                                <div class="absolute top-0 right-0 p-1">
                                    <a href="products.php?delete_image=<?php echo $img['id']; ?>&p_id=<?php echo $edit_data['id']; ?>"
                                        class="bg-white text-red-500 rounded-full w-5 h-5 flex items-center justify-center text-xs shadow hover:bg-red-500 hover:text-white transition"
                                        onclick="return confirm('Delete this image?')"><i class="fas fa-times"></i></a>
                                </div>

                                <!-- Status -->
                                <div class="mt-1 text-center">
                                    <?php if ($is_featured): ?>
                                        <span class="text-xs font-bold text-emerald-600 flex items-center justify-center gap-1"><i
                                                class="fas fa-star"></i> Featured</span>
                                    <?php else: ?>
                                        <a href="products.php?set_featured=<?php echo $img['id']; ?>&p_id=<?php echo $edit_data['id']; ?>"
                                            class="text-[10px] text-blue-500 hover:text-blue-700">Set Featured</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="flex justify-end pt-4 border-t">
                <button type="button" onclick="closeModal()"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mr-2">Cancel</button>
                <button type="submit" name="save_product"
                    class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded">
                    <?php echo $edit_mode ? 'Update Product' : 'Save Product'; ?>
                </button>
            </div>
        </form>
        <?php if (isset($msg) && $msg)
            echo "<p class='text-green-600 mt-2'>$msg</p>"; ?>
        <?php if (isset($error) && $error)
            echo "<p class='text-red-600 mt-2'>$error</p>"; ?>
    </div>
</div>

<script>
    // Modal Logic
    const modal = document.getElementById('productModal');

    function openModal() {
        modal.classList.remove('hidden');
    }

    function closeModal() {
        // If query param exists (edit mode), clear it to return to clean state? 
        // Or just hide. If in edit mode, hiding it might be confusing if they click 'Add New' next.
        // For simplicity, we just hide, but if we are in Edit Mode (URL has ?edit=...), redirecting to products.php might be cleaner on close.
        <?php if ($edit_mode): ?>
            window.location.href = 'products.php';
        <?php else: ?>
            modal.classList.add('hidden');
        <?php endif; ?>
    }

    // Close on click outside
    window.onclick = function (event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    // Auto-open if in edit mode
    <?php if ($edit_mode): ?>
        openModal();
    <?php endif; ?>
</script>

<!-- List Section -->
<div class="w-full bg-white border rounded shadow p-6">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Product List</h2>
    <div class="overflow-x-auto">
        <table class="w-full text-left table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Cat</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT p.*, c.name as cat_name FROM products p LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.id DESC");
                while ($row = $result->fetch_assoc()):
                    ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2"><?php echo $row['id']; ?></td>
                        <td class="px-4 py-2">
                            <?php if ($row['image_main']): ?>
                                <img src="../<?php echo $row['image_main']; ?>" class="w-12 h-12 object-cover rounded">
                            <?php else: ?>
                                <div class="w-12 h-12 bg-gray-200 rounded text-xs flex items-center justify-center">No Img</div>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2 font-bold"><?php echo htmlspecialchars($row['name']); ?></td>
                        <td class="px-4 py-2 text-sm text-gray-600"><?php echo htmlspecialchars($row['cat_name']); ?></td>
                        <td class="px-4 py-2 font-mono text-emerald-700">$<?php echo number_format($row['price'], 2); ?>
                        </td>
                        <td class="px-4 py-2"><?php echo $row['stock_quantity']; ?></td>
                        <td class="px-4 py-2">
                            <a href="products.php?edit=<?php echo $row['id']; ?>"
                                class="text-blue-600 hover:text-blue-800 text-sm mr-2 font-bold"><i class="fas fa-edit"></i>
                                Edit</a>
                            <a href="products.php?delete=<?php echo $row['id']; ?>"
                                onclick="return confirm('Delete this product?')"
                                class="text-red-500 hover:text-red-700 text-sm"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>