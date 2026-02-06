<?php include 'includes/header.php';

$edit_mode = false;
$edit_data = null;

// Handle Status Toggle
if (isset($_GET['toggle_status'])) {
    $id = intval($_GET['toggle_status']);
    $conn->query("UPDATE categories SET is_active = NOT is_active WHERE id=$id");
    header("Location: categories.php");
    exit();
}

// Handle Edit Request
if (isset($_GET['edit'])) {
    $edit_mode = true;
    $id = intval($_GET['edit']);
    $result = $conn->query("SELECT * FROM categories WHERE id=$id");
    $edit_data = $result->fetch_assoc();
}

// Handle Form Submission (Add or Update)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_category'])) {
    $name = $_POST['name'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    $description = $_POST['description'];
    $image_path = null;

    // Check if updating
    if (isset($_POST['category_id']) && !empty($_POST['category_id'])) {
        $id = intval($_POST['category_id']);
        $image_path = $_POST['current_image']; // Keep existing image by default
    }

    // File Upload Handler
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../assets/uploads/categories/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $new_filename = $slug . "_" . time() . "." . $file_extension;
        $target_file = $target_dir . $new_filename;

        $allowed_types = array('jpg', 'jpeg', 'png', 'webp');
        if (in_array(strtolower($file_extension), $allowed_types)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // If updating and there was an old image, maybe delete it? 
                // For now, we just overwrite the path variable
                $image_path = "assets/uploads/categories/" . $new_filename;
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        } else {
            $error = "Sorry, only JPG, JPEG, PNG, & WEBP files are allowed.";
        }
    }

    if (!isset($error)) {
        if (isset($_POST['category_id']) && !empty($_POST['category_id'])) {
            // Update
            $stmt = $conn->prepare("UPDATE categories SET name=?, slug=?, description=?, image_path=? WHERE id=?");
            $stmt->bind_param("ssssi", $name, $slug, $description, $image_path, $id);
            if ($stmt->execute()) {
                $msg = "Collection updated successfully.";
                $edit_mode = false;
                $edit_data = null; // Clear edit data
            } else {
                $error = "Error updating collection: " . $conn->error;
            }
        } else {
            // Insert
            $stmt = $conn->prepare("INSERT INTO categories (name, slug, description, image_path) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $slug, $description, $image_path);
            if ($stmt->execute()) {
                $msg = "Collection added successfully.";
            } else {
                $error = "Error adding collection: " . $conn->error;
            }
        }
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    // Get image path to delete file
    $res = $conn->query("SELECT image_path FROM categories WHERE id=$id");
    if ($row = $res->fetch_assoc()) {
        if ($row['image_path'] && file_exists("../" . $row['image_path'])) {
            unlink("../" . $row['image_path']);
        }
    }
    $conn->query("DELETE FROM categories WHERE id=$id");
    header("Location: categories.php");
    exit();
}
?>

<div class="w-full bg-white border rounded shadow p-6 mb-8">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-gray-800"><?php echo $edit_mode ? 'Edit Collection' : 'Add New Collection'; ?>
        </h2>
        <?php if ($edit_mode): ?>
            <a href="categories.php" class="text-sm text-gray-500 hover:text-gray-700 underline">Cancel Edit</a>
        <?php endif; ?>
    </div>

    <form method="POST" action="categories.php" enctype="multipart/form-data" class="flex flex-col gap-4">
        <input type="hidden" name="category_id" value="<?php echo $edit_data['id'] ?? ''; ?>">
        <input type="hidden" name="current_image" value="<?php echo $edit_data['image_path'] ?? ''; ?>">

        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2">Collection Name</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($edit_data['name'] ?? ''); ?>" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2">Featured Image</label>
            <?php if (!empty($edit_data['image_path'])): ?>
                <div class="mb-2">
                    <img src="../<?php echo $edit_data['image_path']; ?>" alt="Current Image"
                        class="h-20 w-auto rounded border">
                    <p class="text-xs text-gray-500">Current Image</p>
                </div>
            <?php endif; ?>
            <input type="file" name="image" accept="image/*"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500">
            <p class="text-xs text-gray-500 mt-1">Recommended size: 800x600px (JPG, PNG, WEBP)</p>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea name="description"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-emerald-500"><?php echo htmlspecialchars($edit_data['description'] ?? ''); ?></textarea>
        </div>
        <button type="submit" name="save_category"
            class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-max">
            <?php echo $edit_mode ? 'Update Collection' : 'Add Collection'; ?>
        </button>
    </form>
    <?php if (isset($msg))
        echo "<p class='text-green-600 mt-2'>$msg</p>"; ?>
    <?php if (isset($error))
        echo "<p class='text-red-600 mt-2'>$error</p>"; ?>
</div>

<div class="w-full bg-white border rounded shadow p-6">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Manage Collections</h2>
    <table class="w-full text-left table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Active</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM categories ORDER BY id DESC");
            while ($row = $result->fetch_assoc()):
                $is_active = $row['is_active'];
                ?>
                <tr class="border-b">
                    <td class="px-4 py-2"><?php echo $row['id']; ?></td>
                    <td class="px-4 py-2">
                        <?php if ($row['image_path']): ?>
                            <img src="../<?php echo $row['image_path']; ?>" alt="Collection Image"
                                class="w-16 h-16 object-cover rounded">
                        <?php else: ?>
                            <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center text-gray-400 text-xs">No
                                Image</div>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-2 font-bold"><?php echo htmlspecialchars($row['name']); ?></td>
                    <td class="px-4 py-2">
                        <a href="categories.php?toggle_status=<?php echo $row['id']; ?>"
                            class="px-2 py-1 rounded text-xs font-bold <?php echo $is_active ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800'; ?>">
                            <?php echo $is_active ? 'Active' : 'Inactive'; ?>
                        </a>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-600">
                        <?php echo substr(htmlspecialchars($row['description']), 0, 40) . '...'; ?></td>
                    <td class="px-4 py-2">
                        <a href="categories.php?edit=<?php echo $row['id']; ?>"
                            class="text-blue-600 hover:text-blue-800 text-sm mr-2 font-bold"><i class="fas fa-edit"></i>
                            Edit</a>
                        <a href="categories.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')"
                            class="text-red-500 hover:text-red-700 text-sm"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>