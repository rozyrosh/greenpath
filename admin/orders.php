<?php include 'includes/header.php'; ?>

<div class="w-full bg-white border rounded shadow p-6">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Order Management</h2>

    <div class="overflow-x-auto">
        <table class="w-full text-left table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Order ID</th>
                    <th class="px-4 py-2">Customer</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Payment</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Date</th>
                    <!-- Future: <th class="px-4 py-2">Actions</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()):
                        ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">#
                                <?php echo $row['id']; ?>
                            </td>
                            <td class="px-4 py-2">
                                <div class="font-bold">
                                    <?php echo htmlspecialchars($row['customer_name']); ?>
                                </div>
                                <div class="text-xs text-gray-500">
                                    <?php echo htmlspecialchars($row['customer_email']); ?>
                                </div>
                            </td>
                            <td class="px-4 py-2 font-mono">$
                                <?php echo number_format($row['total_amount'], 2); ?>
                            </td>
                            <td class="px-4 py-2 text-sm">
                                <?php echo htmlspecialchars($row['payment_method']); ?>
                            </td>
                            <td class="px-4 py-2">
                                <span class="bg-yellow-200 text-yellow-800 py-1 px-2 rounded-full text-xs uppercase font-bold">
                                    <?php echo $row['payment_status']; ?>
                                </span>
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-500">
                                <?php echo date('M d, Y', strtotime($row['created_at'])); ?>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                } else {
                    echo "<tr><td colspan='6' class='px-4 py-8 text-center text-gray-500'>No orders found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>