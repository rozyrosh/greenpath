<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section class="bg-gray-50 py-16 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 font-serif">Our Collection</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Browse through our exclusive selection of traditional and contemporary masterpieces.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">

        <!-- Filters (Mock) -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button
                class="px-6 py-2 bg-emerald-600 text-white rounded-full text-sm font-medium shadow-md transition hover:bg-emerald-700">All</button>
            <button
                class="px-6 py-2 bg-white text-gray-600 border border-gray-200 rounded-full text-sm font-medium hover:border-emerald-500 hover:text-emerald-600 transition">Traditional
                Art</button>
            <button
                class="px-6 py-2 bg-white text-gray-600 border border-gray-200 rounded-full text-sm font-medium hover:border-emerald-500 hover:text-emerald-600 transition">Modern
                Art</button>
            <button
                class="px-6 py-2 bg-white text-gray-600 border border-gray-200 rounded-full text-sm font-medium hover:border-emerald-500 hover:text-emerald-600 transition">Handmade
                Crafts</button>
            <button
                class="px-6 py-2 bg-white text-gray-600 border border-gray-200 rounded-full text-sm font-medium hover:border-emerald-500 hover:text-emerald-600 transition">Gift
                Items</button>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Mock Data for Products
            $products = [
                [
                    'title' => 'Kandy Perahera Mural',
                    'category' => 'Traditional Art',
                    'price' => '$1,200',
                    'width' => 'w-full', // Using wide images
                    'image' => 'assets/images/heritage_mural.png'
                ],
                [
                    'title' => 'Sunset Over Parakrama Samudra',
                    'category' => 'Modern Art',
                    'price' => '$850',
                    'image' => 'assets/images/modern_art.png'
                ],
                [
                    'title' => 'Devil Mask (Gara Yaka)',
                    'category' => 'Traditional Art',
                    'price' => '$150',
                    'image' => 'assets/images/traditional_art.png'
                ],
                [
                    'title' => 'Handwoven Reed Basket Set',
                    'category' => 'Handmade Crafts',
                    'price' => '$45',
                    'image' => 'assets/images/handmade_crafts.png'
                ],
                [
                    'title' => 'Antique Brass Oil Lamp',
                    'category' => 'Gift Items',
                    'price' => '$120',
                    'image' => 'assets/images/gift_items.png'
                ],
                [
                    'title' => 'Village Life - Oil on Canvas',
                    'category' => 'Modern Art',
                    'price' => '$600',
                    // Reusing modern art image for demo purposes or using hero crop
                    'image' => 'assets/images/modern_art.png'
                ],
            ];

            foreach ($products as $product):
                ?>
                <div
                    class="group bg-white rounded-xl border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-64 overflow-hidden relative bg-gray-100">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                        <!-- Overlay / Add to Cart -->
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button
                                class="px-4 py-2 bg-white text-gray-900 text-sm font-semibold rounded shadow hover:bg-emerald-50 transition">
                                View Details
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-emerald-600 uppercase tracking-wider mb-2">
                            <?php echo $product['category']; ?>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 font-serif">
                            <?php echo $product['title']; ?>
                        </h3>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-medium text-gray-900">
                                <?php echo $product['price']; ?>
                            </span>
                            <button class="text-gray-400 hover:text-emerald-600 transition">
                                <!-- Heart Icon -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-16">
            <nav class="flex gap-2">
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-500 transition">1</a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-emerald-600 text-white shadow-md">2</a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-500 transition">3</a>
                <span class="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-500 transition">Next</a>
            </nav>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-emerald-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4 font-serif">Looking for something specific?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
            Our curators can help you find the perfect piece for your collection or space.
        </p>
        <a href="contact.php"
            class="inline-block px-8 py-3 bg-emerald-600 text-white font-medium rounded shadow hover:bg-emerald-700 transition">
            Contact Our Curators
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>