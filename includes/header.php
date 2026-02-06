<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Path Gallery | Traditional Arts & Cultural Heritage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emerald: {
                            500: '#10b981', // Adjust to match screenshot green
                            600: '#059669',
                            700: '#047857',
                            900: '#064e3b', // Deep green for footer/dark sections
                        },
                        dark: {
                            900: '#0f172a', // Footer background
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Inter', 'sans-serif'], // Changed to Inter to match user request
                    }
        }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Inter', sans-serif;
        }

        .hero-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6));
        }
    </style>
</head>

<body class="text-gray-800 antialiased">

    <!-- Navigation -->
    <nav class="bg-white py-4 shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-transparent rounded-sm overflow-hidden">
                    <!-- Logo -->
                    <img src="assets/logo/logo.webp" alt="Green Path Gallery Logo" class="w-full h-full object-contain">
                </div>
                <span class="text-xl font-bold text-gray-900 tracking-tight">Green Path Gallery</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-600">
                <a href="index.php" class="hover:text-emerald-600 transition">Home</a>
                <a href="about.php" class="hover:text-emerald-600 transition">About Us</a>
                <!-- Dropdown for Collection -->
                <div class="relative group">
                    <a href="collection.php" class="hover:text-emerald-600 transition flex items-center gap-1 pb-1">
                        Our Collection
                        <!-- Dropdown Icon -->
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </a>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute left-0 mt-0 w-48 bg-white rounded-md shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top pt-2">
                        <div class="py-1">
                            <a href="collection.php?category=traditional"
                                class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600 transition">Traditional
                                Art</a>
                            <a href="collection.php?category=modern"
                                class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600 transition">Modern
                                Art</a>
                            <a href="collection.php?category=crafts"
                                class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600 transition">Handmade
                                Crafts</a>
                            <a href="collection.php?category=gifts"
                                class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600 transition">Gift
                                Items</a>
                        </div>
                    </div>
                </div>
                <a href="process.php" class="hover:text-emerald-600 transition">Our Process</a>
                <a href="#" class="hover:text-emerald-600 transition">Our Services</a>
                <a href="#" class="hover:text-emerald-600 transition">Inspiration</a>
                <a href="#" class="hover:text-emerald-600 transition">Sustainability</a>
                <a href="#" class="hover:text-emerald-600 transition">Contact Us</a>
            </div>

            <!-- Logout/Action -->
            <div class="hidden md:block">
                <a href="#" class="text-sm font-medium text-gray-600 hover:text-red-500">Logout</a>
            </div>
        </div>
    </nav>