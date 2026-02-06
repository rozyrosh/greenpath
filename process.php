<?php include 'includes/header.php'; ?>

<!-- Header Section with Background Pattern -->
<section class="relative py-24 bg-emerald-900 text-center overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
        </svg>
    </div>
    <div class="absolute inset-0 bg-[url('assets/images/hero_bg.png')] bg-cover bg-center opacity-20 mix-blend-overlay">
    </div>

    <div class="relative z-10 container mx-auto px-6">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 font-serif tracking-wide">Our Process</h1>
        <p class="text-lg md:text-xl text-emerald-50 max-w-2xl mx-auto leading-relaxed font-light">
            A journey of authenticity, curation, and connection. Discover how we bring the world's finest heritage art
            to your collection.
        </p>
    </div>
</section>

<!-- Core Pillars Section with Floating Cards -->
<section class="py-24 bg-gray-50 relative">
    <div class="container mx-auto px-6 relative z-10 -mt-20"> <!-- Negative margin to pull cards up -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Promoting Local Art -->
            <div
                class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-100 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-emerald-200">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                        </path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 font-serif">Promoting Local Art</h3>
                <p class="text-gray-600 leading-relaxed mb-8 flex-grow">
                    We champion local artisans by providing a global stage for their craftsmanship, ensuring traditional
                    skills thrive in the modern world.
                </p>
                <a href="#"
                    class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700 transition group-hover:gap-3">
                    Learn More <span class="text-xl">&rarr;</span>
                </a>
            </div>

            <!-- Card 2: Customer Testimonials -->
            <div
                class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-100 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-emerald-200">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-full flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 font-serif">Client Stories</h3>
                <p class="text-gray-600 leading-relaxed mb-8 flex-grow">
                    Discover how our curated pieces have transformed homes and offices. Read authentic experiences from
                    our valued collectors.
                </p>
                <a href="#"
                    class="inline-flex items-center gap-2 text-purple-600 font-semibold hover:text-purple-700 transition group-hover:gap-3">
                    Read Reviews <span class="text-xl">&rarr;</span>
                </a>
            </div>

            <!-- Card 3: FAQ's -->
            <div
                class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-100 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-emerald-200">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-orange-50 to-orange-100 text-orange-600 rounded-full flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 font-serif">Help & Support</h3>
                <p class="text-gray-600 leading-relaxed mb-8 flex-grow">
                    Have questions about shipping, authenticity, or care? Find detailed answers to ensure a seamless
                    collecting experience.
                </p>
                <a href="#"
                    class="inline-flex items-center gap-2 text-orange-600 font-semibold hover:text-orange-700 transition group-hover:gap-3">
                    View FAQ's <span class="text-xl">&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Timeline / How We Work Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <span class="text-emerald-600 font-semibold tracking-wider uppercase text-sm">Workflow</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 font-serif">How We Work</h2>
        </div>

        <div class="relative max-w-5xl mx-auto">
            <!-- Connector Line (Desktop) -->
            <div
                class="hidden md:block absolute top-[2.5rem] left-0 w-full h-1 bg-gradient-to-r from-emerald-100 via-emerald-200 to-emerald-100 rounded-full -z-10">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-center">
                <!-- Step 1 -->
                <div class="relative flex flex-col items-center group">
                    <div
                        class="w-20 h-20 bg-white border-4 border-emerald-500 text-emerald-600 rounded-full flex items-center justify-center text-2xl font-bold mb-6 shadow-lg z-10 transition-transform duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white">
                        1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Curation</h3>
                    <p class="text-gray-500 leading-relaxed">Selecting only the most authentic and culturally
                        significant pieces.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col items-center group">
                    <div
                        class="w-20 h-20 bg-white border-4 border-emerald-500 text-emerald-600 rounded-full flex items-center justify-center text-2xl font-bold mb-6 shadow-lg z-10 transition-transform duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white">
                        2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Verification</h3>
                    <p class="text-gray-500 leading-relaxed">Rigorous checks to ensure provenance and quality standards.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col items-center group">
                    <div
                        class="w-20 h-20 bg-white border-4 border-emerald-500 text-emerald-600 rounded-full flex items-center justify-center text-2xl font-bold mb-6 shadow-lg z-10 transition-transform duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white">
                        3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Presentation</h3>
                    <p class="text-gray-500 leading-relaxed">Showcasing art with the dignity and context it deserves.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="relative flex flex-col items-center group">
                    <div
                        class="w-20 h-20 bg-white border-4 border-emerald-500 text-emerald-600 rounded-full flex items-center justify-center text-2xl font-bold mb-6 shadow-lg z-10 transition-transform duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white">
                        4</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Delivery</h3>
                    <p class="text-gray-500 leading-relaxed">Secure, insured shipping to bring heritage to your
                        doorstep.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Simple CTA -->
<section class="py-20 bg-emerald-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 font-serif">Ready to start your collection?</h2>
        <a href="collection.php"
            class="inline-block px-10 py-4 bg-emerald-600 text-white font-semibold rounded-full shadow-lg hover:bg-emerald-700 hover:shadow-xl transition transform hover:-translate-y-1">
            Browse Artworks
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>