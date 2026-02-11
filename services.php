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
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 font-serif tracking-wide">Our Services</h1>
        <p class="text-lg md:text-xl text-emerald-50 max-w-3xl mx-auto leading-relaxed font-light">
            From personalized art consultations to flexible subscription plans, we offer comprehensive services to
            enhance your art collecting journey.
        </p>
    </div>
</section>

<!-- Main Services Section -->
<section class="py-24 bg-gray-50 relative">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Consultations Card -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/gift_items.png" alt="Art Consultation"
                        class="w-full h-full object-cover transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-8 md:p-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4 font-serif">Consultations</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Our expert consultants work with you to find the perfect artworks for your space. Whether it's
                        for your home, apartment, or corporate environment, we provide personalized recommendations that
                        match your style and budget.
                    </p>
                    <ul class="space-y-3 mb-8 text-gray-600">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Homes & Apartments
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Corporate Spaces
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Style Matching
                        </li>
                    </ul>
                    <a href="#"
                        class="block w-full py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-center rounded-lg shadow transition transform hover:-translate-y-1">
                        Book Consultation
                    </a>
                </div>
            </div>

            <!-- Subscriptions Card -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/heritage_mural.png" alt="Art Subscriptions"
                        class="w-full h-full object-cover transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-8 md:p-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4 font-serif">Subscriptions</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Discover new artists and expand your collection with our curated subscription service. Choose
                        from monthly selections or flexible payment plans that fit your lifestyle and collecting goals.
                    </p>
                    <ul class="space-y-3 mb-8 text-gray-600">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Monthly Subscriptions
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Flexible Payment Plans
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Curated Selections
                        </li>
                    </ul>
                    <a href="#"
                        class="block w-full py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-center rounded-lg shadow transition transform hover:-translate-y-1">
                        View Plans
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-16 font-serif">Why Choose Our Services</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Feature 1 -->
            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Personalized</h3>
                <p class="text-sm text-gray-500 leading-relaxed max-w-xs">Tailored recommendations based on your
                    preferences and space</p>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 bg-amber-50 rounded-full flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-10 h-10 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Expert Guidance</h3>
                <p class="text-sm text-gray-500 leading-relaxed max-w-xs">Professional art consultants with years of
                    experience</p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Quality Assured</h3>
                <p class="text-sm text-gray-500 leading-relaxed max-w-xs">Every artwork is authenticated and quality
                    guaranteed</p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 bg-purple-50 rounded-full flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Full Service</h3>
                <p class="text-sm text-gray-500 leading-relaxed max-w-xs">From selection to delivery and installation
                    support</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>