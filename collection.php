<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-20 bg-emerald-900 text-center overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
        </svg>
    </div>
    <div class="absolute inset-0 bg-[url('assets/images/hero_bg.png')] bg-cover bg-center opacity-20 mix-blend-overlay">
    </div>

    <div class="relative z-10 container mx-auto px-6">
        <span class="text-emerald-300 font-semibold tracking-wider uppercase text-sm mb-2 block">Curated
            Masterpieces</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 font-serif tracking-wide">Our Collection</h1>
        <p class="text-lg text-emerald-50 max-w-2xl mx-auto font-light leading-relaxed">
            Explore an exclusive selection of traditional arts, contemporary paintings, and handcrafted cultural
            treasures.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">

        <!-- Premium Filter Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
            <div class="flex flex-wrap justify-center gap-3">
                <button
                    class="px-6 py-2.5 bg-emerald-900 text-white rounded-full text-sm font-medium shadow-lg transition transform hover:-translate-y-0.5">All
                    Types</button>
                <button
                    class="px-6 py-2.5 bg-white text-gray-600 border border-gray-200 rounded-full text-sm font-medium hover:border-emerald-500 hover:text-emerald-700 hover:shadow-md transition duration-300">Traditional
                    Art</button>
                <button
                    class="px-6 py-2.5 bg-white text-gray-600 border border-gray-200 rounded-full text-sm font-medium hover:border-emerald-500 hover:text-emerald-700 hover:shadow-md transition duration-300">Modern
                    Art</button>
                <button
                    class="px-6 py-2.5 bg-white text-gray-600 border border-gray-200 rounded-full text-sm font-medium hover:border-emerald-500 hover:text-emerald-700 hover:shadow-md transition duration-300">Handmade
                    Crafts</button>
            </div>

            <!-- Sort/Search (Optional addition for premium feel) -->
            <div class="relative group">
                <button class="flex items-center gap-2 text-gray-600 font-medium hover:text-emerald-700 transition">
                    Sort by: Featured <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php
            // Mock Data for Products
            $products = [
                [
                    'title' => 'Kandy Perahera Mural',
                    'category' => 'Traditional Art',
                    'price' => '$1,200',
                    'image' => 'assets/images/heritage_mural.png',
                    'tag' => 'Best Seller'
                ],
                [
                    'title' => 'Golden Sunset',
                    'category' => 'Modern Art',
                    'price' => '$850',
                    'image' => 'assets/images/modern_art.png',
                    'tag' => 'New'
                ],
                [
                    'title' => 'Gara Yaka Mask',
                    'category' => 'Traditional Art',
                    'price' => '$150',
                    'image' => 'assets/images/traditional_art.png'
                ],
                [
                    'title' => 'Woven Reed Basket',
                    'category' => 'Handmade Crafts',
                    'price' => '$45',
                    'image' => 'assets/images/handmade_crafts.png'
                ],
                [
                    'title' => 'Antique Brass Lamp',
                    'category' => 'Gift Items',
                    'price' => '$120',
                    'image' => 'assets/images/gift_items.png'
                ],
                [
                    'title' => 'Village Serenity',
                    'category' => 'Modern Art',
                    'price' => '$600',
                    'image' => 'assets/images/modern_art.png'
                ],
                [
                    'title' => 'Ceremonial Elephants',
                    'category' => 'Traditional Art',
                    'price' => '$2,500',
                    'image' => 'assets/images/heritage_mural.png',
                    'tag' => 'Premium'
                ],
                [
                    'title' => 'Lotus Mandala',
                    'category' => 'Traditional Art',
                    'price' => '$320',
                    'image' => 'assets/images/traditional_art.png'
                ],
            ];

            foreach ($products as $product):
                ?>
                <!-- Premium Product Card -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 relative">

                    <!-- Tag (if exists) -->
                    <?php if (isset($product['tag'])): ?>
                        <div class="absolute top-4 left-4 z-20">
                            <span
                                class="px-3 py-1 bg-white/90 backdrop-blur text-emerald-800 text-xs font-bold rounded-full uppercase tracking-wider shadow-sm">
                                <?php echo $product['tag']; ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <!-- Image Area -->
                    <div class="h-72 overflow-hidden relative bg-gray-100">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out">

                        <!-- Hover Actions Overlay -->
                        <div
                            class="absolute inset-x-0 bottom-0 p-4 translate-y-full group-hover:translate-y-0 transition duration-300 z-20 bg-gradient-to-t from-black/60 to-transparent flex justify-center pb-6">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 text-sm font-semibold rounded-full shadow hover:bg-emerald-500 hover:text-white transition transform hover:-translate-y-1">
                                Quick View
                            </button>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="p-6">
                        <p
                            class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 group-hover:text-emerald-600 transition-colors">
                            <?php echo $product['category']; ?></p>
                        <h3
                            class="text-lg font-bold text-gray-900 mb-2 font-serif group-hover:text-emerald-800 transition-colors line-clamp-1">
                            <?php echo $product['title']; ?></h3>

                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-50">
                            <span class="text-xl font-bold text-gray-900 font-serif"><?php echo $product['price']; ?></span>
                            <button
                                class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-emerald-600 hover:text-white transition duration-300 shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Premium Pagination -->
        <div class="flex justify-center mt-20">
            <nav class="flex items-center gap-3 bg-white px-4 py-2 rounded-full shadow-sm border border-gray-100">
                <a href="#"
                    class="h-10 w-10 flex items-center justify-center rounded-full text-gray-400 hover:bg-gray-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </a>
                <a href="#"
                    class="h-10 w-10 flex items-center justify-center rounded-full bg-emerald-900 text-white font-medium shadow-md">1</a>
                <a href="#"
                    class="h-10 w-10 flex items-center justify-center rounded-full text-gray-600 hover:bg-gray-100 transition font-medium">2</a>
                <a href="#"
                    class="h-10 w-10 flex items-center justify-center rounded-full text-gray-600 hover:bg-gray-100 transition font-medium">3</a>
                <span class="text-gray-400 px-2">...</span>
                <a href="#"
                    class="h-10 w-10 flex items-center justify-center rounded-full text-gray-400 hover:bg-gray-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </nav>
        </div>

    </div>
</section>

<!-- Collection CTA -->
<section class="py-24 bg-emerald-50 text-center relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute top-0 right-0 -mt-10 -mr-10 opacity-5">
        <svg width="300" height="300" viewBox="0 0 100 100" fill="currentColor">
            <circle cx="50" cy="50" r="50" />
        </svg>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-serif">Cannot find what you're looking for?
        </h2>
        <p class="text-gray-600 mb-10 max-w-2xl mx-auto text-lg font-light">
            Our curators have access to an extensive private collection. Let us find the perfect masterpiece for you.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="contact.php"
                class="px-10 py-4 bg-emerald-900 text-white font-semibold rounded-full shadow-xl hover:bg-emerald-800 transition transform hover:-translate-y-1">
                Request Curation
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>