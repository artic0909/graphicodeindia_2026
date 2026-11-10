<footer class="bg-slate-900 text-slate-300 pt-16 pb-12 relative overflow-hidden">
    <!-- Subtle Circuit / Radial Gradient Background matching Logo Orange and Blue -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-gc-blue/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gc-orange/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Top Callout in Footer -->
        <div class="bg-gradient-to-r from-slate-800 to-slate-850 p-8 sm:p-10 rounded-3xl border border-slate-700/60 shadow-2xl mb-16 flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="space-y-2 text-center lg:text-left">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gc-orange/20 text-gc-orange-light border border-gc-orange/30">
                    ⚡ Instant Response
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    Ready to build your next breakthrough software or app?
                </h3>
                <p class="text-slate-400 text-sm sm:text-base max-w-xl">
                    Get an architect-level project review, time estimation, and transparent pricing quotation within 24 hours.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-4 shrink-0 w-full sm:w-auto">
                <a 
                    href="#contact" 
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 text-sm font-bold text-white bg-gradient-to-r from-gc-orange to-gc-orange-dark hover:from-gc-orange-light hover:to-gc-orange rounded-full shadow-lg shadow-gc-orange/30 hover:shadow-gc-orange/40 transition-all duration-200"
                >
                    <span>Request Free Blueprint</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a 
                    href="https://wa.me/919876543210?text=Hi%20Graphicode%20India%2C%20I%20would%20like%20to%20discuss%20a%20project" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-full transition-colors"
                >
                    <span>💬 WhatsApp Quick Chat</span>
                </a>
            </div>
        </div>

        <!-- Main Footer Columns -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800">
            <!-- Brand Info Column -->
            <div class="lg:col-span-2 space-y-5">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <div class="p-1.5 rounded-xl bg-white/10 backdrop-blur border border-white/10">
                        <img src="{{ asset('logo.png') }}" alt="Graphicode India" class="h-9 w-auto">
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center text-xl font-black text-white">
                            <span class="text-blue-400 font-extrabold">GRAPHICODE</span>
                            <span class="text-white ml-1">INDIA</span>
                            <span class="w-2 h-2 rounded-full bg-gc-orange ml-1"></span>
                        </div>
                        <span class="text-[10px] uppercase tracking-widest text-slate-400 font-semibold">
                            Engineering • Creativity • Growth
                        </span>
                    </div>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed pr-4">
                    Graphicode India is an innovation-driven digital agency helping ambitious startups, SMBs, and global enterprises build scalable mobile applications, modern SaaS platforms, impactful brand graphic designs, and high-ROI digital marketing engines.
                </p>
                <div class="space-y-2 text-sm text-slate-400">
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-gc-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>India (Serving Clients Pan-India & Worldwide)</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-gc-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:contact@graphicodeindia.com" class="hover:text-white transition-colors">contact@graphicodeindia.com</a>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-gc-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+919876543210" class="hover:text-white transition-colors">+91 98765 43210</a>
                    </div>
                </div>
            </div>

            <!-- Services Column -->
            <div class="space-y-4">
                <h4 class="text-sm font-bold uppercase tracking-wider text-white">Core Services</h4>
                <ul class="space-y-2.5 text-sm text-slate-400">
                    <li><a href="#services" class="hover:text-white hover:translate-x-1 inline-block transition-all">Mobile App Development</a></li>
                    <li><a href="#services" class="hover:text-white hover:translate-x-1 inline-block transition-all">Flutter & React Native Apps</a></li>
                    <li><a href="#services" class="hover:text-white hover:translate-x-1 inline-block transition-all">Custom Web & SaaS Software</a></li>
                    <li><a href="#services" class="hover:text-white hover:translate-x-1 inline-block transition-all">Graphic Design & Brand Identity</a></li>
                    <li><a href="#services" class="hover:text-white hover:translate-x-1 inline-block transition-all">UI/UX Interface Design</a></li>
                    <li><a href="#services" class="hover:text-white hover:translate-x-1 inline-block transition-all">Software Marketing & Paid Ads</a></li>
                    <li><a href="#services" class="hover:text-white hover:translate-x-1 inline-block transition-all">Technical SEO & App Store ASO</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="text-sm font-bold uppercase tracking-wider text-white">Company & Work</h4>
                <ul class="space-y-2.5 text-sm text-slate-400">
                    <li><a href="#portfolio" class="hover:text-white hover:translate-x-1 inline-block transition-all">Case Studies & Portfolio</a></li>
                    <li><a href="#methodology" class="hover:text-white hover:translate-x-1 inline-block transition-all">Our 4-Step Process</a></li>
                    <li><a href="#calculator" class="hover:text-white hover:translate-x-1 inline-block transition-all">Instant Price Calculator</a></li>
                    <li><a href="#testimonials" class="hover:text-white hover:translate-x-1 inline-block transition-all">Client Testimonials</a></li>
                    <li><a href="#faq" class="hover:text-white hover:translate-x-1 inline-block transition-all">Frequently Asked Questions</a></li>
                    @if (Route::has('login'))
                        <li><a href="{{ route('login') }}" class="hover:text-white hover:translate-x-1 inline-block transition-all text-blue-400">Client Portal Sign In</a></li>
                    @endif
                </ul>
            </div>

            <!-- Assurance & Trust -->
            <div class="space-y-4">
                <h4 class="text-sm font-bold uppercase tracking-wider text-white">Trust & Compliance</h4>
                <ul class="space-y-2.5 text-sm text-slate-400">
                    <li class="flex items-center gap-2">
                        <span class="text-emerald-400">✓</span> 100% Code Ownership
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-emerald-400">✓</span> Strict Mutual NDA
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-emerald-400">✓</span> Agile Sprint Tracking
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-emerald-400">✓</span> Post-Launch Support
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-emerald-400">✓</span> Verified Security Standards
                    </li>
                </ul>

                <div class="pt-2">
                    <span class="text-xs uppercase tracking-wider text-slate-500 font-semibold block mb-2">Connect With Us</span>
                    <div class="flex items-center gap-3">
                        <a href="https://linkedin.com" target="_blank" class="w-8 h-8 rounded-lg bg-slate-800 hover:bg-gc-blue text-slate-300 hover:text-white flex items-center justify-center transition-colors">
                            <span class="text-xs font-bold">in</span>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="w-8 h-8 rounded-lg bg-slate-800 hover:bg-gc-blue text-slate-300 hover:text-white flex items-center justify-center transition-colors">
                            <span class="text-xs font-bold">𝕏</span>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="w-8 h-8 rounded-lg bg-slate-800 hover:bg-gc-orange text-slate-300 hover:text-white flex items-center justify-center transition-colors">
                            <span class="text-xs font-bold">IG</span>
                        </a>
                        <a href="https://github.com" target="_blank" class="w-8 h-8 rounded-lg bg-slate-800 hover:bg-gc-blue text-slate-300 hover:text-white flex items-center justify-center transition-colors">
                            <span class="text-xs font-bold">git</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
            <p>© {{ date('Y') }} Graphicode India. All rights reserved. Registered Technology & Marketing Agency.</p>
            <div class="flex items-center gap-6">
                <span>Made with precision in India 🇮🇳</span>
                <a href="#top" class="hover:text-white transition-colors flex items-center gap-1">
                    <span>Back to Top</span>
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

