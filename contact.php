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
        <span class="text-emerald-300 font-semibold tracking-wider uppercase text-sm mb-2 block">Get in Touch</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 font-serif tracking-wide">Contact Us</h1>
        <p class="text-lg text-emerald-50 max-w-2xl mx-auto font-light leading-relaxed">
            We'd love to hear from you. Whether you have a question about our collection, need a consultation, or just
            want to say hello.
        </p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-24 bg-gray-50 relative">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            <!-- Contact Info & Map -->
            <div class="space-y-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 font-serif">Visit Our Gallery</h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Experience the beauty of traditional art in person. Our gallery is open for public viewing and
                        private appointments.
                    </p>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-1">Address</h4>
                                <p class="text-gray-600">123 Green Path Avenue,<br>Colombo 07, Sri Lanka</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-1">Phone</h4>
                                <p class="text-gray-600">+94 11 234 5678<br>+94 77 123 4567</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-1">Email</h4>
                                <p class="text-gray-600">info@greenpathgallery.com<br>support@greenpathgallery.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Placeholder -->
                <div class="w-full h-64 bg-gray-200 rounded-2xl overflow-hidden shadow-inner relative group">
                    <!-- Placeholder Image or real map iframe -->
                    <img src="assets/images/hero_bg.png" alt="Map Location"
                        class="w-full h-full object-cover opacity-50 grayscale group-hover:grayscale-0 transition duration-700">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="bg-white/90 px-4 py-2 rounded-lg text-sm font-bold text-gray-600 shadow-sm backdrop-blur">
                            Google Map Placeholder</span>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-10 rounded-3xl shadow-xl border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 font-serif">Send a Message</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border-gray-200 border focus:border-emerald-500 focus:bg-white focus:ring-0 transition duration-200"
                                placeholder="John">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text"
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border-gray-200 border focus:border-emerald-500 focus:bg-white focus:ring-0 transition duration-200"
                                placeholder="Doe">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email"
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 border-gray-200 border focus:border-emerald-500 focus:bg-white focus:ring-0 transition duration-200"
                            placeholder="john@example.com">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <select
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 border-gray-200 border focus:border-emerald-500 focus:bg-white focus:ring-0 transition duration-200 text-gray-600">
                            <option>General Inquiry</option>
                            <option>Art Consultation</option>
                            <option>Order Status</option>
                            <option>Artist Collaboration</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea rows="4"
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 border-gray-200 border focus:border-emerald-500 focus:bg-white focus:ring-0 transition duration-200"
                            placeholder="How can we help you?"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-emerald-900 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                        Send Message
                    </button>
                    <p class="text-xs text-center text-gray-400 mt-4">We respect your privacy. Your information is safe
                        with us.</p>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>