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
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 font-serif tracking-wide">Sustainability</h1>
        <p class="text-lg md:text-xl text-emerald-50 max-w-3xl mx-auto leading-relaxed font-light">
            At Green Path Gallery, we are committed to sustainable practices that preserve both cultural heritage and
            our planet for future generations.
        </p>
    </div>
</section>

<!-- Visual Banner -->
<section class="py-12 bg-gray-50 pb-0">
    <div class="container mx-auto px-6">
        <div class="rounded-3xl overflow-hidden shadow-2xl h-64 md:h-96 relative">
            <img src="assets/images/handmade_crafts.png" alt="Sustainable Craftsmanship"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/40 to-transparent"></div>
        </div>
    </div>
</section>

<!-- Core Pillars -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Card 1 -->
            <div
                class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition duration-300">
                <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg> <!-- Leaf/Nature icon replacement -->
                    <svg class="w-8 h-8 absolute" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        style="opacity: 0;">
                        <path d="M0 0h24v24H0z" stroke="none" />
                        <path d="M12 10a6 6 0 0 0 -6 -6h-3v2a6 6 0 0 0 6 6h3" />
                        <path d="M12 14a6 6 0 0 1 6 -6h3v1a6 6 0 0 1 -6 6h-3" />
                        <path d="M12 20l0 -10" />
                    </svg>
                    <!-- Simpler Sprout Icon -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Eco-Friendly Materials</h3>
                <p class="text-gray-600 leading-relaxed">
                    We prioritize artworks created using sustainable materials and traditional techniques that have
                    minimal environmental impact. Our artists use natural pigments, recycled materials, and eco-friendly
                    processes whenever possible.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition duration-300">
                <div
                    class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-6">
                    <!-- Recycle Icon -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sustainable Packaging</h3>
                <p class="text-gray-600 leading-relaxed">
                    All our artworks are packaged using recyclable and biodegradable materials. We've eliminated
                    single-use plastics from our shipping process and use protective materials that can be reused or
                    composted.
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition duration-300">
                <div class="w-16 h-16 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mb-6">
                    <!-- Handshake/Community Icon -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Supporting Local Communities</h3>
                <p class="text-gray-600 leading-relaxed">
                    By working directly with local artists and craftspeople, we reduce transportation emissions and
                    support sustainable livelihoods in artistic communities around the world. Fair trade practices
                    ensure artists receive fair compensation.
                </p>
            </div>

            <!-- Card 4 -->
            <div
                class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition duration-300">
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-6">
                    <!-- Pillar/Museum Icon -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cultural Preservation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Sustainability isn't just about the environment—it's about preserving cultural heritage. We document
                    traditional techniques and support master craftspeople in passing their knowledge to the next
                    generation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-white border-t border-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-16 font-serif">Our Sustainability Commitments</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
                <div class="text-5xl font-bold text-emerald-600 mb-4 font-serif">100%</div>
                <div class="text-gray-600">Recyclable Packaging</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-emerald-600 mb-4 font-serif">50+</div>
                <div class="text-gray-600">Local Artist Partners</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-emerald-600 mb-4 font-serif">0</div>
                <div class="text-gray-600">Single-Use Plastics</div>
            </div>
        </div>
    </div>
</section>

<!-- Goals Section -->
<section class="py-24 bg-emerald-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-16 font-serif">Our 2025 Goals</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <div class="bg-white p-8 rounded-2xl shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Carbon Neutral Shipping</h3>
                <p class="text-gray-600 leading-relaxed">
                    We're working towards carbon-neutral shipping by partnering with eco-friendly logistics providers
                    and offsetting our carbon footprint through verified programs.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Digital Gallery Expansion</h3>
                <p class="text-gray-600 leading-relaxed">
                    Expanding our virtual gallery experiences to reduce the need for physical travel while still
                    providing immersive art viewing experiences.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>