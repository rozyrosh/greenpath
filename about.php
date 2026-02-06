<?php include 'includes/header.php'; ?>

<!-- Hero Section with Background Pattern -->
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
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 font-serif tracking-wide">About Green Path Gallery
        </h1>
        <p class="text-lg md:text-xl text-emerald-50 max-w-3xl mx-auto leading-relaxed font-light">
            Dedicated to preserving and promoting the rich heritage of traditional arts and crafts, connecting
            contemporary collectors with timeless masterpieces.
        </p>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative">
                <!-- Decorative Frame Effect -->
                <div class="absolute -top-4 -left-4 w-full h-full border-2 border-emerald-100 rounded-2xl z-0"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl z-10 group">
                    <img src="assets/images/gallery_interior.png" alt="Green Path Gallery Interior"
                        class="w-full h-auto object-cover transform transition duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <span class="text-emerald-600 font-semibold tracking-wider uppercase text-sm">Who We Are</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-6 font-serif">Our Story</h2>
                <div class="space-y-6 text-gray-600 leading-relaxed text-lg font-light">
                    <p>
                        Founded with a passion for preserving cultural heritage, <strong
                            class="text-emerald-800 font-medium">Green Path Gallery</strong> has been a beacon for art
                        lovers and collectors seeking authentic, traditional artworks. Our gallery showcases the finest
                        collection of paintings, sculptures, pottery, textiles, and traditional crafts from around the
                        world.
                    </p>
                    <p>
                        We believe that art is not just decoration, but a bridge connecting past and present, telling
                        stories of cultures, traditions, and the human experience across generations.
                    </p>
                </div>
                <!-- Signature or decorative element could go here -->
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Cards -->
<section class="py-20 bg-gray-50 relative">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 -mt-10 md:-mt-0">
            <!-- Mission Card -->
            <div
                class="group bg-white p-10 rounded-2xl shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-emerald-200">
                <div class="flex items-start gap-6">
                    <div
                        class="w-16 h-16 shrink-0 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 font-serif">Our Mission</h3>
                        <p class="text-gray-600 leading-relaxed">
                            To preserve, promote, and share the world's artistic heritage by providing a platform where
                            traditional arts meet contemporary appreciation, fostering cultural understanding and
                            artistic excellence.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div
                class="group bg-white p-10 rounded-2xl shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-emerald-200">
                <div class="flex items-start gap-6">
                    <div
                        class="w-16 h-16 shrink-0 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 font-serif">Our Vision</h3>
                        <p class="text-gray-600 leading-relaxed">
                            To become the world's leading destination for heritage art, where every piece tells a story,
                            every artist finds recognition, and every collector discovers treasures that enrich their
                            lives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-emerald-600 font-semibold tracking-wider uppercase text-sm">Core Principles</span>
            <h2 class="text-4xl font-bold text-gray-900 mt-2 font-serif">Our Values</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <!-- Value 1: Authenticity -->
            <div class="group p-6 rounded-2xl transition hover:bg-emerald-50">
                <div
                    class="w-20 h-20 mx-auto bg-gradient-to-br from-emerald-100 to-emerald-200 text-emerald-700 rounded-full flex items-center justify-center mb-6 shadow-md transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Authenticity</h3>
                <p class="text-gray-600 leading-relaxed">
                    We guarantee that every piece in our collection is genuine, ethically sourced, and carefully vetted
                    by experts.
                </p>
            </div>

            <!-- Value 2: Sustainability -->
            <div class="group p-6 rounded-2xl transition hover:bg-green-50">
                <div
                    class="w-20 h-20 mx-auto bg-gradient-to-br from-green-100 to-green-200 text-green-700 rounded-full flex items-center justify-center mb-6 shadow-md transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainability</h3>
                <p class="text-gray-600 leading-relaxed">
                    Committed to eco-friendly practices that preserve our environment while honoring cultural
                    traditions.
                </p>
            </div>

            <!-- Value 3: Community -->
            <div class="group p-6 rounded-2xl transition hover:bg-amber-50">
                <div
                    class="w-20 h-20 mx-auto bg-gradient-to-br from-amber-100 to-amber-200 text-amber-700 rounded-full flex items-center justify-center mb-6 shadow-md transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Community</h3>
                <p class="text-gray-600 leading-relaxed">
                    Building a global village of artists and collectors to keep stories alive through shared
                    appreciation of art.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>