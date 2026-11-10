<!-- Top Announcement Bar -->
<div class="bg-gradient-to-r from-gc-blue-dark via-gc-blue to-gc-blue-dark text-white text-xs sm:text-sm py-2 px-4 relative z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="flex items-center gap-2 overflow-hidden whitespace-nowrap">
            <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-[11px] font-semibold bg-gc-orange text-white uppercase tracking-wider animate-pulse">
                <span>🔥</span> Now Booking
            </span>
            <span class="text-blue-100 font-medium truncate">
                Scale your vision with Graphicode India • App Development, Custom Software & High-Impact Branding
            </span>
        </div>
        <div class="hidden md:flex items-center gap-6 text-xs text-blue-100 shrink-0">
            <a href="mailto:contact@graphicodeindia.com" class="hover:text-white flex items-center gap-1.5 transition-colors">
                <svg class="w-3.5 h-3.5 text-gc-orange-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>contact@graphicodeindia.com</span>
            </a>
            <span class="text-blue-300/40">|</span>
            <a href="tel:+919876543210" class="hover:text-white flex items-center gap-1.5 transition-colors">
                <svg class="w-3.5 h-3.5 text-gc-orange-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span>+91 98765 43210</span>
            </a>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header id="site-header" class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3.5 group shrink-0">
                <div class="relative flex items-center justify-center p-1.5 rounded-xl bg-slate-50 border border-slate-100 shadow-sm group-hover:shadow-md transition-all">
                    <img 
                        src="{{ asset('logo.png') }}" 
                        alt="Graphicode India Logo" 
                        class="h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105"
                    />
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center font-black tracking-tight text-xl leading-none">
                        <span class="text-gc-blue font-extrabold">GRAPHICODE</span>
                        <span class="text-slate-800 ml-1 font-bold">INDIA</span>
                        <span class="w-2 h-2 rounded-full bg-gc-orange ml-1 animate-pulse"></span>
                    </div>
                    <span class="text-[10px] uppercase tracking-widest text-slate-500 font-semibold mt-1">
                        Code • Design • Growth
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-slate-700">
                <a href="#services" class="hover:text-gc-blue transition-colors flex items-center gap-1">
                    Services
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <a href="#portfolio" class="hover:text-gc-blue transition-colors">Portfolio</a>
                <a href="#methodology" class="hover:text-gc-blue transition-colors">Process</a>
                <a href="#calculator" class="hover:text-gc-blue transition-colors flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    Cost Estimator
                </a>
                <a href="#testimonials" class="hover:text-gc-blue transition-colors">Clients</a>
                <a href="#faq" class="hover:text-gc-blue transition-colors">FAQ</a>
            </nav>

            <!-- Action Area / CTA -->
            <div class="hidden sm:flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-gc-blue bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium text-slate-600 hover:text-gc-blue px-2 py-1 transition-colors flex items-center gap-1">
                            <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            <span>Client Portal</span>
                        </a>
                    @endauth
                @endif

                <a 
                    href="#contact" 
                    class="relative group inline-flex items-center gap-2 px-6 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-gc-orange to-gc-orange-dark hover:from-gc-orange-light hover:to-gc-orange rounded-full shadow-md shadow-gc-orange/25 hover:shadow-lg hover:shadow-gc-orange/35 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200"
                >
                    <span>Get a Proposal</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex lg:hidden items-center gap-2">
                <a href="#contact" class="px-3.5 py-1.5 text-xs font-bold text-white bg-gc-orange rounded-full shadow-sm">
                    Quote
                </a>
                <button 
                    id="mobile-menu-btn" 
                    type="button" 
                    aria-label="Toggle Navigation Menu" 
                    class="p-2.5 rounded-xl text-slate-600 hover:text-gc-blue hover:bg-slate-100 focus:outline-none transition-colors"
                >
                    <svg id="menu-icon-open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                    <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Overlay -->
    <div id="mobile-menu-drawer" class="hidden lg:hidden border-t border-slate-100 bg-white/98 backdrop-blur-xl px-5 pt-4 pb-8 shadow-xl transition-all">
        <div class="flex flex-col space-y-4 text-base font-semibold text-slate-700">
            <a href="#services" class="mobile-nav-link flex items-center justify-between py-2 border-b border-slate-50 hover:text-gc-blue">
                <span>Services</span>
                <span class="text-xs px-2 py-0.5 rounded bg-blue-50 text-gc-blue">Apps • Web • Design</span>
            </a>
            <a href="#portfolio" class="mobile-nav-link py-2 border-b border-slate-50 hover:text-gc-blue">Featured Work</a>
            <a href="#methodology" class="mobile-nav-link py-2 border-b border-slate-50 hover:text-gc-blue">Our Process</a>
            <a href="#calculator" class="mobile-nav-link py-2 border-b border-slate-50 hover:text-gc-blue flex items-center justify-between">
                <span>Instant Cost Estimator</span>
                <span class="text-xs px-2 py-0.5 rounded bg-emerald-50 text-emerald-600 font-bold">Interactive</span>
            </a>
            <a href="#testimonials" class="mobile-nav-link py-2 border-b border-slate-50 hover:text-gc-blue">Client Reviews</a>
            <a href="#faq" class="mobile-nav-link py-2 border-b border-slate-50 hover:text-gc-blue">FAQ</a>

            <div class="pt-4 flex flex-col gap-3">
                <a 
                    href="#contact" 
                    class="mobile-nav-link w-full text-center py-3 text-sm font-bold text-white bg-gradient-to-r from-gc-orange to-gc-orange-dark rounded-xl shadow-md"
                >
                    Get Free Project Consultation
                </a>
                @if (Route::has('login'))
                    <a 
                        href="{{ route('login') }}" 
                        class="w-full text-center py-2.5 text-sm font-semibold text-gc-blue bg-blue-50 hover:bg-blue-100 rounded-xl transition-colors"
                    >
                        Client Portal Login
                    </a>
                @endif
            </div>

            <div class="pt-4 text-xs text-slate-500 space-y-1">
                <p>📍 India (Headquarters & Global Remote Services)</p>
                <p>📧 contact@graphicodeindia.com</p>
                <p>📞 +91 98765 43210</p>
            </div>
        </div>
    </div>
</header>

