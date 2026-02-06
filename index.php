<?php include 'includes/header.php'; ?>

<!-- Hero Section with Parallax Effect -->
<section class="relative min-h-[85vh] flex items-center justify-center text-center text-white overflow-hidden">
    <!-- Background Image with Parallax Fix -->
    <div class="absolute inset-0 z-0 bg-fixed bg-center bg-cover"
        style="background-image: url('assets/images/hero_bg.png');">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
        <!-- Elegant dark overlay with slight blur -->
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-6 max-w-5xl fade-in-up">
        <span
            class="inline-block py-1 px-3 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-emerald-50 text-sm font-medium tracking-widest uppercase mb-6 animate-fade-in">
            Welcome to Green Path Gallery
        </span>
        <h1 class="text-5xl md:text-7xl font-bold mb-8 tracking-tight font-serif leading-tight drop-shadow-2xl">
            Where Heritage Meets <br class="hidden md:block" /> <span class="text-emerald-400 italic">Contemporary
                Art</span>
        </h1>
        <p class="text-lg md:text-2xl text-gray-100 mb-12 leading-relaxed max-w-3xl mx-auto font-light drop-shadow-lg">
            Discover a curated world of traditional craftsmanship, modern masterpieces, and cultural treasures that tell
            a story.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="collection.php"
                class="px-10 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full shadow-2xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-emerald-500/30 flex items-center gap-2">
                Explore Collection <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
            <a href="about.php"
                class="px-10 py-4 bg-white/10 backdrop-blur-md border border-white/40 hover:bg-white hover:text-emerald-900 text-white font-semibold rounded-full shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                Our Story
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Featured Collections (Categories) -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-emerald-600 font-semibold tracking-wider uppercase text-sm">Discover</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 font-serif">Curated Collections</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <a href="collection.php?category=traditional"
                class="group relative rounded-2xl overflow-hidden shadow-lg aspect-[3/4] cursor-pointer">
                <img src="assets/images/traditional_art.png" alt="Traditional Art"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div
                    class="absolute bottom-0 left-0 p-8 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-white font-serif mb-2">Traditional Art</h3>
                    <p
                        class="text-white/80 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transition-opacity delay-100">
                        Timeless masterpieces preserving cultural stories.</p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="collection.php?category=modern"
                class="group relative rounded-2xl overflow-hidden shadow-lg aspect-[3/4] cursor-pointer">
                <img src="assets/images/modern_art.png" alt="Modern Art"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div
                    class="absolute bottom-0 left-0 p-8 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-white font-serif mb-2">Modern Art</h3>
                    <p
                        class="text-white/80 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transition-opacity delay-100">
                        Bold expressions and contemporary visions.</p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="collection.php?category=crafts"
                class="group relative rounded-2xl overflow-hidden shadow-lg aspect-[3/4] cursor-pointer">
                <img src="assets/images/handmade_crafts.png" alt="Handmade Crafts"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div
                    class="absolute bottom-0 left-0 p-8 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-white font-serif mb-2">Handmade Crafts</h3>
                    <p
                        class="text-white/80 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transition-opacity delay-100">
                        Authentic artisan creations from local villages.</p>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="collection.php?category=gifts"
                class="group relative rounded-2xl overflow-hidden shadow-lg aspect-[3/4] cursor-pointer">
                <img src="assets/images/gift_items.png" alt="Unique Gifts"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div
                    class="absolute bottom-0 left-0 p-8 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-white font-serif mb-2">Unique Gifts</h3>
                    <p
                        class="text-white/80 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transition-opacity delay-100">
                        Thoughtful treasures for every occasion.</p>
                </div>
            </a>
        </div>

        <div class="text-center mt-12">
            <a href="collection.php"
                class="inline-flex items-center gap-2 text-emerald-700 font-bold hover:text-emerald-900 transition border-b-2 border-emerald-200 hover:border-emerald-700 pb-1">
                View All Collections <span class="text-xl">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<!-- About / Heritage Split Section -->
<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-20">
            <div class="w-full md:w-1/2 relative">
                <!-- Art Composition -->
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
                    <img src="assets/images/traditional_art.png" alt="Traditional Art Heritage"
                        class="w-full h-auto object-cover">
                </div>
                <!-- Decorative Back Layer -->
                <div
                    class="absolute top-10 -left-10 w-full h-full border-2 border-emerald-100 rounded-2xl -z-0 hidden md:block">
                </div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-emerald-50 rounded-full -z-0 hidden md:block">
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <span class="text-emerald-600 font-semibold tracking-wider uppercase text-sm">Our Philosophy</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 mb-8 font-serif">Preserving Cultural <br />
                    Heritage</h2>
                <div class="space-y-6 text-gray-600 leading-relaxed text-lg font-light">
                    <p>
                        At Green Path Gallery, art is a bridge between past and future. We curate pieces that not only
                        decorate spaces but also tell the silent stories of generations.
                    </p>
                    <p>
                        From the delicate brushstrokes of traditional paintings to the bold textures of modern
                        sculpture, every piece in our collection is authenticated and chosen for its ability to inspire.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-8 mt-10">
                    <div>
                        <div class="text-4xl font-bold text-emerald-800 font-serif mb-2">500+</div>
                        <p class="text-sm text-gray-500">Curated Artworks</p>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-emerald-800 font-serif mb-2">50+</div>
                        <p class="text-sm text-gray-500">Partner Artists</p>
                    </div>
                </div>

                <a href="about.php"
                    class="inline-block mt-10 px-8 py-3 bg-gray-900 hover:bg-gray-800 text-white font-medium rounded-lg transition shadow-lg hover:shadow-xl">
                    Read Our Story
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview (Premium Cards) -->
<section class="py-24 bg-emerald-900 text-white relative overflow-hidden">
    <!-- Texture Overlay -->
    <div class="absolute inset-0 opacity-10 bg-[url('assets/images/hero_bg.png')] bg-cover mix-blend-overlay"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <span class="text-emerald-300 font-semibold tracking-wider uppercase text-sm">Expertise</span>
                <h2 class="text-4xl font-bold mt-2 font-serif">Services Tailored to You</h2>
                <p class="text-emerald-100 mt-4 text-lg font-light">Beyond curation, we offer specialized services to
                    enhance your collecting experience.</p>
            </div>
            <a href="services.php"
                class="text-white border-b border-emerald-400 pb-1 hover:text-emerald-200 transition">View All
                Services</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div
                class="bg-white/5 backdrop-blur-lg border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition duration-300 group">
                <div
                    class="w-14 h-14 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6 text-emerald-300 group-hover:text-white group-hover:bg-emerald-500 transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Art Consultation</h3>
                <p class="text-emerald-100/70 leading-relaxed mb-6">Expert advice for private collectors and corporate
                    spaces to build meaningful collections.</p>
                <a href="services.php"
                    class="text-emerald-300 text-sm font-bold flex items-center gap-2 group-hover:gap-3 transition-all">Learn
                    More &rarr;</a>
            </div>

            <!-- Service 2 -->
            <div
                class="bg-white/5 backdrop-blur-lg border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition duration-300 group">
                <div
                    class="w-14 h-14 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6 text-emerald-300 group-hover:text-white group-hover:bg-emerald-500 transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Curated Subscriptions</h3>
                <p class="text-emerald-100/70 leading-relaxed mb-6">Receive hand-picked artworks monthly with our
                    flexible subscription plans.</p>
                <a href="services.php"
                    class="text-emerald-300 text-sm font-bold flex items-center gap-2 group-hover:gap-3 transition-all">Explore
                    Plans &rarr;</a>
            </div>

            <!-- Service 3 -->
            <div
                class="bg-white/5 backdrop-blur-lg border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition duration-300 group">
                <div
                    class="w-14 h-14 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6 text-emerald-300 group-hover:text-white group-hover:bg-emerald-500 transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Authenticity Valuation</h3>
                <p class="text-emerald-100/70 leading-relaxed mb-6">Professional appraisal and authentication services
                    for your existing pieces.</p>
                <a href="services.php"
                    class="text-emerald-300 text-sm font-bold flex items-center gap-2 group-hover:gap-3 transition-all">Get
                    Valued &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter / CTA -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div
            class="bg-white rounded-3xl p-12 md:p-20 text-center shadow-xl relative overflow-hidden border border-gray-100">
            <!-- Decor -->
            <div
                class="absolute top-0 right-0 w-64 h-64 bg-emerald-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
            </div>
            <div
                class="absolute bottom-0 left-0 w-64 h-64 bg-purple-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
            </div>

            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-serif">Join Our Art Community</h2>
                <p class="text-gray-600 mb-10 text-lg">Subscribe to get exclusive updates on new collections, artist
                    interviews, and VIP event invitations.</p>

                <form class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Enter your email address"
                        class="flex-grow px-6 py-4 rounded-full bg-gray-50 border border-gray-200 focus:border-emerald-500 focus:bg-white focus:ring-0 transition outline-none">
                    <button type="button"
                        class="px-8 py-4 bg-emerald-900 text-white font-bold rounded-full hover:bg-emerald-800 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">Subscribe</button>
                </form>
                <p class="text-xs text-gray-400 mt-4">We respect your inbox. No spam, ever.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>