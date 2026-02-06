<?php include 'includes/header.php'; ?>

<!-- Stats Row -->
<div class="flex flex-wrap mb-2">
    <!-- Card 1 -->
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <div class="bg-white border rounded shadow p-2">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-500">Total Revenue</h5>
                    <h3 class="font-bold text-3xl">$0 <span class="text-green-500"><i
                                class="fas fa-caret-up"></i></span></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <div class="bg-white border rounded shadow p-2">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-500">Total Orders</h5>
                    <h3 class="font-bold text-3xl">0 <span class="text-pink-500"><i
                                class="fas fa-exchange-alt"></i></span></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 3 -->
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <div class="bg-white border rounded shadow p-2">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded p-3 bg-yellow-600"><i class="fas fa-box-open fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-500">Products</h5>
                    <h3 class="font-bold text-3xl">
                        <?php
                        $result = $conn->query("SELECT count(*) as count FROM products");
                        $row = $result->fetch_assoc();
                        echo $row['count'];
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-row flex-wrap flex-grow mt-2">

    <div class="w-full p-3">
        <div class="bg-white border rounded shadow">
            <div class="border-b p-3">
                <h5 class="font-bold uppercase text-gray-600">Recent Orders</h5>
            </div>
            <div class="p-5">
                <table class="w-full p-5 text-gray-700">
                    <thead>
                        <tr>
                            <th class="text-left text-gray-600">Order ID</th>
                            <th class="text-left text-gray-600">Customer</th>
                            <th class="text-left text-gray-600">Amount</th>
                            <th class="text-left text-gray-600">Status</th>
                            <th class="text-left text-gray-600">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-500">No orders found.</td>
                        </tr>
                    </tbody>
                </table>
                <p class="py-2"><a href="orders.php" class="text-emerald-600 font-bold hover:underline">View All
                        Orders...</a></p>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>