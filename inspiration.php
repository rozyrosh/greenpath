<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-24 bg-emerald-900 text-center overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
        </svg>
    </div>
    <div class="absolute inset-0 bg-[url('assets/images/hero_bg.png')] bg-cover bg-center opacity-20 mix-blend-overlay">
    </div>

    <div class="relative z-10 container mx-auto px-6">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 font-serif tracking-wide">Inspiration</h1>
        <p class="text-lg md:text-xl text-emerald-50 max-w-3xl mx-auto leading-relaxed font-light">
            Find inspiration through artist stories, design ideas, and curated collections that showcase the
            transformative power of art in our daily lives.
        </p>
    </div>
</section>

<!-- Featured Sections Grid -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

            <!-- Card 1: Featured Artists -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/inspiration_artist.png" alt="Featured Artists"
                        class="w-full h-full object-cover transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold font-serif mb-1">Featured Artists</h3>
                        <p class="text-sm opacity-90">Meet the talented artists behind our collection</p>
                    </div>
                </div>
                <!-- Content Body (Visible or kept minimal as per screenshot which has image content) -->
                <div class="p-6 mt-auto">
                    <a href="#"
                        class="block w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-center rounded-lg shadow transition transform hover:-translate-y-1">
                        Explore Featured Artists
                    </a>
                </div>
            </div>

            <!-- Card 2: Living with Art -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/inspiration_living.png" alt="Living with Art"
                        class="w-full h-full object-cover transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold font-serif mb-1">Living with Art</h3>
                        <p class="text-sm opacity-90">Discover how art transforms living spaces</p>
                    </div>
                </div>
                <div class="p-6 mt-auto">
                    <a href="#"
                        class="block w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-center rounded-lg shadow transition transform hover:-translate-y-1">
                        Explore Living with Art
                    </a>
                </div>
            </div>

            <!-- Card 3: Blog -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/inspiration_blog.png" alt="Blog"
                        class="w-full h-full object-cover transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold font-serif mb-1">Blog</h3>
                        <p class="text-sm opacity-90">Stories, insights, and art world news</p>
                    </div>
                </div>
                <div class="p-6 mt-auto">
                    <a href="#"
                        class="block w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-center rounded-lg shadow transition transform hover:-translate-y-1">
                        Explore Blog
                    </a>
                </div>
            </div>

            <!-- Card 4: Featured Collections -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-64 overflow-hidden relative">
                    <!-- Reusing an existing high-quality image for the 4th card -->
                    <img src="assets/images/heritage_mural.png" alt="Featured Collections"
                        class="w-full h-full object-cover transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold font-serif mb-1">Featured Collections</h3>
                        <p class="text-sm opacity-90">Curated selections and trending pieces</p>
                    </div>
                </div>
                <div class="p-6 mt-auto">
                    <a href="collection.php"
                        class="block w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-center rounded-lg shadow transition transform hover:-translate-y-1">
                        Explore Featured Collections
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Latest from Our Blog -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-16 font-serif">Latest from Our Blog</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">The Art of Collecting: A Beginner's Guide
                </h3>
                <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                    Learn the fundamentals of art collecting, from understanding different mediums to building a
                    cohesive collection that reflects your personal style.
                </p>
                <a href="#"
                    class="text-emerald-600 font-semibold hover:text-emerald-700 inline-flex items-center gap-1 transition group">
                    Read More <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Blog Post 2 -->
            <div class="p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Traditional Crafts in Modern Homes</h3>
                <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                    Discover how traditional crafts and contemporary design can work together to create unique and
                    meaningful living spaces.
                </p>
                <a href="#"
                    class="text-emerald-600 font-semibold hover:text-emerald-700 inline-flex items-center gap-1 transition group">
                    Read More <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Blog Post 3 -->
            <div class="p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Supporting Local Artists: Why It Matters
                </h3>
                <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                    Explore the importance of supporting local artists and how your art purchases can make a meaningful
                    impact on creative communities.
                </p>
                <a href="#"
                    class="text-emerald-600 font-semibold hover:text-emerald-700 inline-flex items-center gap-1 transition group">
                    Read More <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-emerald-50 text-center">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 font-serif">Get Inspired Daily</h2>
        <p class="text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            Follow our journey and discover new artists, design trends, and art stories that will inspire your own
            creative path.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#"
                class="px-8 py-3 bg-emerald-600 text-white font-bold rounded shadow hover:bg-emerald-700 transition transform hover:-translate-y-1">
                Read Our Blog
            </a>
            <a href="#"
                class="px-8 py-3 border border-emerald-600 text-emerald-600 font-bold rounded hover:bg-emerald-50 transition transform hover:-translate-y-1">
                Meet Our Artists
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>