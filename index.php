<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[600px] flex items-center justify-center text-center text-white">
    <div class="absolute inset-0 z-0">
        <img src="assets/images/hero_bg.png" alt="Traditional Mask Dancer" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div> <!-- Overlay -->
    </div>

    <div class="relative z-10 container mx-auto px-6 max-w-4xl">
        <h1 class="text-5xl md:text-6xl font-bold mb-6 tracking-tight drop-shadow-md">
            Green Path Gallery
        </h1>
        <p class="text-lg md:text-xl text-gray-100 mb-10 leading-relaxed max-w-2xl mx-auto drop-shadow-sm">
            Discover the world's finest collection of traditional arts, crafts, and cultural treasures. Where heritage
            meets contemporary appreciation.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#"
                class="px-8 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded shadow-lg transition duration-300 transform hover:scale-105">
                Explore Collection
            </a>
            <a href="#"
                class="px-8 py-3 border-2 border-white hover:bg-white hover:text-gray-900 text-white font-semibold rounded shadow-lg transition duration-300">
                Learn More
            </a>
        </div>
    </div>
</section>

<!-- Featured Collections -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Collections</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Explore our carefully curated collections showcasing the finest traditional and contemporary artworks
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1: Traditional Art -->
            <div
                class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 overflow-hidden group border border-gray-100">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/traditional_art.png" alt="Traditional Art"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Traditional Art</h3>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">
                        Heritage-inspired drawings, temple motifs, and classic artistic styles preserved through skilled
                        craftsmanship.
                    </p>
                    <a href="#"
                        class="block w-full py-2.5 text-center bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium rounded transition">
                        View Collection
                    </a>
                </div>
            </div>

            <!-- Card 2: Modern Art -->
            <div
                class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 overflow-hidden group border border-gray-100">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/modern_art.png" alt="Modern Art"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Modern Art</h3>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">
                        Contemporary creations featuring bold concepts, fresh perspectives, and innovative expressions
                        by local artists.
                    </p>
                    <a href="#"
                        class="block w-full py-2.5 text-center bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium rounded transition">
                        View Collection
                    </a>
                </div>
            </div>

            <!-- Card 3: Handmade Crafts -->
            <div
                class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 overflow-hidden group border border-gray-100">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/handmade_crafts.png" alt="Handmade Crafts"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Handmade Crafts</h3>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">
                        Authentic artisan-made pieces such as carvings, batik, pottery, and woven items that showcase
                        craft traditions.
                    </p>
                    <a href="#"
                        class="block w-full py-2.5 text-center bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium rounded transition">
                        View Collection
                    </a>
                </div>
            </div>

            <!-- Card 4: Gift Items -->
            <div
                class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 overflow-hidden group border border-gray-100">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/gift_items.png" alt="Gift Items"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Gift Items</h3>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">
                        Curated, culturally inspired gifts—beautiful, meaningful pieces perfect for memorable and
                        thoughtful gifting.
                    </p>
                    <a href="#"
                        class="block w-full py-2.5 text-center bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium rounded transition">
                        View Collection
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Preserving Heritage Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Preserving Cultural Heritage
                </h2>
                <div class="space-y-6 text-gray-600 leading-relaxed">
                    <p>
                        At Green Path Gallery, we believe that art is more than decoration—it's a bridge connecting
                        cultures, generations, and stories. Our gallery showcases authentic traditional artworks
                        alongside contemporary pieces that honor cultural heritage.
                    </p>
                    <p>
                        From handcrafted pottery to intricate textiles, from masterful paintings to sculptural works,
                        each piece in our collection tells a unique story of human creativity and cultural identity.
                    </p>
                </div>
                <a href="#"
                    class="inline-block mt-8 px-8 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded transition shadow-sm">
                    Our Story
                </a>
            </div>

            <div class="w-full md:w-1/2">
                <div class="rounded-xl overflow-hidden shadow-2xl relative">
                    <!-- Decorative border effect could go here -->
                    <img src="assets/images/heritage_mural.png" alt="Sri Lankan Fresco Mural"
                        class="w-full h-auto object-cover transform hover:scale-105 transition duration-700">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                From art consultations to curated subscriptions, we offer personalized services to help you discover and
                collect meaningful artworks.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Service 1 -->
            <div
                class="bg-white p-10 rounded-xl shadow-sm text-center border border-gray-100 hover:shadow-lg transition">
                <div
                    class="w-20 h-20 mx-auto bg-emerald-50 rounded-full flex items-center justify-center mb-6 text-emerald-600">
                    <!-- Icon: Home/Gallery -->
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Art Consultations</h3>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Professional guidance for homes, apartments, and corporate spaces. Let our experts help you find the
                    perfect pieces for your environment.
                </p>
                <a href="#"
                    class="inline-block px-8 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded transition w-full md:w-auto">
                    Learn More
                </a>
            </div>

            <!-- Service 2 -->
            <div
                class="bg-white p-10 rounded-xl shadow-sm text-center border border-gray-100 hover:shadow-lg transition">
                <div
                    class="w-20 h-20 mx-auto bg-emerald-50 rounded-full flex items-center justify-center mb-6 text-emerald-600">
                    <!-- Icon: Package/Subscription -->
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Art Subscriptions</h3>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Monthly curated art selections and flexible payment plans. Discover new artists and expand your
                    collection with ease.
                </p>
                <a href="#"
                    class="inline-block px-8 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded transition w-full md:w-auto">
                    Subscribe Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-emerald-600 text-white text-center">
    <div class="container mx-auto px-6 max-w-3xl">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Your Art Journey Today</h2>
        <p class="text-emerald-50 text-lg mb-10 leading-relaxed">
            Join thousands of art lovers who have discovered their perfect pieces through Heritage Heaven. Explore our
            collection and find artworks that speak to your soul.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#"
                class="px-8 py-3 bg-white text-emerald-700 font-bold rounded shadow hover:bg-gray-100 transition duration-300">
                Browse Collection
            </a>
            <a href="#"
                class="px-8 py-3 border-2 border-white text-white font-bold rounded hover:bg-emerald-700 transition duration-300">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>