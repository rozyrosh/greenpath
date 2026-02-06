<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
include '../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Green Path Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="bg-emerald-900 shadow-md fixed w-full z-10 top-0 transition-all duration-300">
        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold"
                    href="index.php">
                    <i class="fas fa-palette text-emerald-400 pr-3"></i> Green Path Admin
                </a>
            </div>

            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">
                    <div class="relative text-sm text-gray-100">
                        <span class="mr-2">Welcome,
                            <?php echo htmlspecialchars($_SESSION['admin_username']); ?>
                        </span>
                        <a href="logout.php"
                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs">Logout</a>
                    </div>
                </div>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-emerald-900 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="index.php"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-white border-b-2 border-transparent hover:border-emerald-400">
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="products.php"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-white border-b-2 border-transparent hover:border-emerald-400">
                            <i class="fas fa-box-open fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Products</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="categories.php"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-white border-b-2 border-transparent hover:border-emerald-400">
                            <i class="fas fa-tags fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Collections</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="orders.php"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-white border-b-2 border-transparent hover:border-emerald-400">
                            <i class="fas fa-shopping-cart fa-fw mr-3"></i><span
                                class="pb-1 md:pb-0 text-sm">Orders</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container mx-auto mt-24 md:mt-18 pb-8 px-4">