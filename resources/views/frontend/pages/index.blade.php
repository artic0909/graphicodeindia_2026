@extends('frontend.layouts.app')

@section('content')
<!-- ========================================================================= -->
<!-- 1. HERO SECTION (Modern, Animated, White Theme with Brand Blue & Orange) -->
<!-- ========================================================================= -->
<section class="relative pt-12 pb-20 lg:pt-20 lg:pb-32 overflow-hidden bg-white">
    <!-- Ambient Background Lighting & Dot Grid -->
    <div class="absolute inset-0 bg-dot-pattern opacity-60 pointer-events-none"></div>
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-100/50 rounded-full blur-3xl pointer-events-none animate-pulse-glow"></div>
    <div class="absolute top-1/3 -right-32 w-96 h-96 bg-orange-100/50 rounded-full blur-3xl pointer-events-none animate-pulse-glow" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Text & CTA (7 cols) -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 border border-blue-200/60 shadow-xs">
                    <span class="flex h-2.5 w-2.5 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gc-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-gc-orange"></span>
                    </span>
                    <span class="text-xs font-bold text-gc-blue tracking-wide uppercase">
                        Full-Stack Digital Powerhouse in India
                    </span>
                </div>

                <!-- Main Heading -->
                <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12]">
                    We Engineer 
                    <span class="bg-gradient-to-r from-gc-blue via-gc-blue-light to-blue-600 bg-clip-text text-transparent">Powerful Software</span>, 
                    Apps &amp; High-Converting 
                    <span class="relative whitespace-nowrap">
                        <span class="bg-gradient-to-r from-gc-orange via-gc-orange-light to-amber-500 bg-clip-text text-transparent">Brands</span>
                        <svg class="absolute -bottom-2 left-0 w-full h-2 text-gc-orange/30 -z-10" viewBox="0 0 100 20" preserveAspectRatio="none">
                            <path d="M0,15 Q50,0 100,15" fill="none" stroke="currentColor" stroke-width="6" stroke-linecap="round"/>
                        </svg>
                    </span>
                </h1>

                <!-- Subheading Description -->
                <p class="text-lg sm:text-xl text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    <strong class="font-semibold text-slate-800">Graphicode India</strong> turns bold ideas into production-grade mobile applications, scalable SaaS platforms, standout graphic design, and ROI-driven marketing campaigns that dominate search and social.
                </p>

                <!-- Value Highlights Checkmarks -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs sm:text-sm font-semibold text-slate-700 max-w-xl mx-auto lg:mx-0">
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div>
                        <span>iOS &amp; Android Apps</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-blue-100 text-gc-blue flex items-center justify-center shrink-0"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div>
                        <span>Custom SaaS &amp; CRM</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-orange-100 text-gc-orange flex items-center justify-center shrink-0"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div>
                        <span>Graphic &amp; UI/UX Design</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center shrink-0"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div>
                        <span>Software Marketing</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center shrink-0"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div>
                        <span>Technical SEO</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center shrink-0"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div>
                        <span>100% Code Ownership</span>
                    </div>
                </div>

                <!-- Call to Action Buttons -->
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a 
                        href="#contact" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 text-base font-bold text-white bg-gradient-to-r from-gc-orange via-orange-500 to-gc-orange-dark hover:from-gc-orange-light hover:to-gc-orange rounded-full shadow-lg shadow-gc-orange/30 hover:shadow-xl hover:shadow-gc-orange/40 hover:-translate-y-0.5 transition-all duration-200"
                    >
                        <span>Start Your Project</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>

                    <a 
                        href="#calculator" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-4 text-base font-semibold text-gc-blue bg-blue-50/80 hover:bg-blue-100/80 border border-blue-200/80 rounded-full transition-all"
                    >
                        <span class="w-2.5 h-2.5 rounded-full bg-gc-blue animate-pulse"></span>
                        <span>Estimate Project Cost</span>
                    </a>
                </div>

                <!-- Trust / Social Proof Metric Bar -->
                <div class="pt-6 border-t border-slate-100 flex flex-wrap items-center justify-center lg:justify-start gap-8 text-left">
                    <div>
                        <p class="text-2xl font-black text-slate-900 tracking-tight">120+</p>
                        <p class="text-xs font-medium text-slate-500">Delivered Projects</p>
                    </div>
                    <div class="h-8 w-px bg-slate-200"></div>
                    <div>
                        <p class="text-2xl font-black text-slate-900 tracking-tight">99.4%</p>
                        <p class="text-xs font-medium text-slate-500">Client Satisfaction</p>
                    </div>
                    <div class="h-8 w-px bg-slate-200"></div>
                    <div>
                        <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                            <span class="inline-flex items-center text-amber-400 gap-0.5">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </span>
                            <span class="text-slate-900 font-black text-base ml-1">4.9/5</span>
                        </div>
                        <p class="text-xs font-medium text-slate-500">Global Ratings</p>
                    </div>
                </div>
            </div>

            <!-- Right Hero Interactive Graphic & Floating Cards (5 cols) -->
            <div class="lg:col-span-5 relative">
                <!-- Outer Glass Tech Container -->
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    <!-- Decorative Graphic Circuit Glow Box -->
                    <div class="relative bg-gradient-to-br from-slate-50 to-blue-50/40 p-6 sm:p-8 rounded-3xl border border-blue-100 shadow-xl backdrop-blur-sm">
                        
                        <!-- Header of the Realistic Mockup Card -->
                        <div class="flex items-center justify-between pb-6 border-b border-slate-200/60">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-white p-1.5 shadow-sm border border-slate-100 flex items-center justify-center">
                                    <img src="{{ asset('logo.png') }}" alt="GC" class="h-7 w-auto object-contain">
                                </div>
                                <div>
                                    <h2 class="text-sm font-bold text-slate-900">Graphicode Engine</h2>
                                    <p class="text-xs text-slate-500 flex items-center gap-1">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Live Production Ready
                                    </p>
                                </div>
                            </div>
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-md bg-gc-orange/10 text-gc-orange border border-gc-orange/20">
                                <svg class="w-3 h-3 text-gc-orange inline mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"/></svg>v2026.4
                            </span>
                        </div>

                        <!-- Central Animated Gear & Code Visual (Echoing Logo Motifs) -->
                        <div class="py-6 space-y-4">
                            <!-- Code Snippet Box -->
                            <div class="bg-slate-900 text-slate-200 p-4 rounded-xl text-xs font-mono shadow-inner border border-slate-800 space-y-1">
                                <div class="flex items-center justify-between text-slate-400 pb-2 mb-2 border-b border-slate-800 text-[10px]">
                                    <span>graphicode_core.ts</span>
                                    <span class="text-emerald-400 font-semibold inline-flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Compiled 0 err</span>
                                </div>
                                <p><span class="text-blue-400">const</span> app = <span class="text-gc-orange font-bold">Graphicode</span>.<span class="text-amber-300">architect</span>({</p>
                                <p class="pl-4">platforms: [<span class="text-emerald-300">'iOS'</span>, <span class="text-emerald-300">'Android'</span>, <span class="text-emerald-300">'Web SaaS'</span>],</p>
                                <p class="pl-4">design: <span class="text-emerald-300">'Bespoke UI/UX'</span>,</p>
                                <p class="pl-4">growthEngine: <span class="text-emerald-300">'SEO &amp; Performance Ads'</span></p>
                                <p>});</p>
                                <p class="text-slate-400 pt-1">// Result: Scalable product generating revenue</p>
                            </div>

                            <!-- Live Performance Bars -->
                            <div class="space-y-2 pt-1">
                                <div class="flex justify-between text-xs font-semibold text-slate-700">
                                    <span>App Performance &amp; Uptime</span>
                                    <span class="text-gc-blue font-bold">99.98%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden">
                                    <div class="bg-gradient-to-r from-gc-blue to-gc-blue-light h-2 rounded-full" style="width: 99.98%"></div>
                                </div>

                                <div class="flex justify-between text-xs font-semibold text-slate-700 pt-2">
                                    <span>Organic Search &amp; Marketing Growth</span>
                                    <span class="text-gc-orange font-bold">+340%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden">
                                    <div class="bg-gradient-to-r from-gc-orange to-gc-orange-light h-2 rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Tech Pills in Card -->
                        <div class="pt-2 flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">Flutter</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">Laravel 13</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">Tailwind v4</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">Figma UI</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">SEO Growth</span>
                        </div>
                    </div>

                    <!-- Floating Badge 1: App Store Downloads -->
                    <div class="absolute -top-6 -right-4 sm:-right-8 bg-white p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3 animate-float">
                        <div class="w-10 h-10 rounded-xl bg-orange-50 text-gc-orange flex items-center justify-center font-bold"><svg class="w-5 h-5 text-gc-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg></div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400">Total Downloads</p>
                            <p class="text-sm font-black text-slate-900 tracking-tight">500,000+</p>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Organic ROI Booster -->
                    <div class="absolute -bottom-6 -left-4 sm:-left-8 bg-white p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3 animate-float-reverse">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-gc-blue flex items-center justify-center font-bold"><svg class="w-5 h-5 text-gc-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400">Client Revenue Boost</p>
                            <p class="text-sm font-black text-slate-900 tracking-tight">3.8x Average ROI</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- 2. TECH STACK & ECOSYSTEM MARQUEE (Modern White Trust Bar) -->
<!-- ========================================================================= -->
<section class="py-10 bg-slate-50 border-y border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs uppercase font-extrabold tracking-widest text-slate-600 mb-6">
            Powered by World-Class Frameworks, Cloud &amp; Design Technologies
        </p>
        <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 text-slate-700 font-bold text-sm sm:text-base">
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-200/80 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-red-500 inline-block mr-1"></span> Laravel
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-200/80 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-blue-500 inline-block mr-1"></span> Flutter &amp; Dart
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-200/80 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-sky-500 inline-block mr-1"></span> React Native &amp; Next.js
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-200/80 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-purple-600 inline-block mr-1"></span> Figma UI/UX
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-200/80 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-cyan-500 inline-block mr-1"></span> Tailwind CSS v4
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-200/80 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-amber-500 inline-block mr-1"></span> AWS &amp; Google Cloud
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-200/80 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-emerald-500 inline-block mr-1"></span> Google SEO &amp; Ads
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- 3. CORE SERVICES SHOWCASE (The 4 Pillars of Graphicode India) -->
<!-- ========================================================================= -->
<section id="services" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-gc-blue border border-blue-100">
                <svg class="w-3.5 h-3.5 text-gc-blue inline mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>What We Excel At
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                Complete Digital Solutions Under One Roof
            </h2>
            <p class="text-base sm:text-lg text-slate-600">
                From your initial prototype to app store launch and exponential customer acquisition, Graphicode India provides end-to-end expertise.
            </p>
        </div>

        <!-- 4 Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Service 1: Mobile App Development -->
            <div class="group relative bg-white p-8 sm:p-10 rounded-3xl border border-slate-200/80 hover:border-gc-blue shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-gc-blue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform"><svg class="w-7 h-7 text-gc-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
                <div class="space-y-3">
                    <span class="text-xs uppercase font-extrabold tracking-wider text-gc-blue">Mobile Engineering</span>
                    <h3 class="text-2xl font-bold text-slate-900 group-hover:text-gc-blue transition-colors">
                        Mobile App Development (iOS &amp; Android)
                    </h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We build pixel-perfect, lightning-fast mobile apps using Flutter, React Native, Swift, and Kotlin. Designed for high retention, smooth micro-interactions, offline functionality, and seamless in-app purchases.
                    </p>
                    
                    <ul class="space-y-2 pt-2 text-xs sm:text-sm font-semibold text-slate-700">
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-blue shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Cross-platform iOS &amp; Android with single codebase</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-blue shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> App Store &amp; Google Play Store compliance &amp; publishing</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-blue shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Real-time chat, GPS, push notifications, and payment gateways</li>
                    </ul>

                    <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                        <div class="flex gap-1.5 flex-wrap">
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Flutter</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">React Native</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">REST API</span>
                        </div>
                        <a href="#contact" class="text-sm font-bold text-gc-blue hover:text-gc-blue-dark inline-flex items-center gap-1 group-hover:translate-x-1 transition-all">
                            Build an App →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2: Software Development & SaaS -->
            <div class="group relative bg-white p-8 sm:p-10 rounded-3xl border border-slate-200/80 hover:border-gc-blue shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform"><svg class="w-7 h-7 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                <div class="space-y-3">
                    <span class="text-xs uppercase font-extrabold tracking-wider text-indigo-600">Enterprise Engineering</span>
                    <h3 class="text-2xl font-bold text-slate-900 group-hover:text-gc-blue transition-colors">
                        Custom Software, SaaS &amp; Web Systems
                    </h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Architecting mission-critical custom CRM portals, ERPs, multi-tenant SaaS products, and high-concurrency web platforms built with Laravel, Node.js, and cloud backends capable of scaling to millions of requests.
                    </p>

                    <ul class="space-y-2 pt-2 text-xs sm:text-sm font-semibold text-slate-700">
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-blue shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Enterprise CRM, ERP &amp; business workflow automation</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-blue shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Multi-tenant SaaS architectures &amp; subscription billing</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-blue shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Bulletproof security, 2FA, biometric passkeys &amp; audit logs</li>
                    </ul>

                    <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                        <div class="flex gap-1.5 flex-wrap">
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Laravel</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">PostgreSQL</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Livewire/Blaze</span>
                        </div>
                        <a href="#contact" class="text-sm font-bold text-gc-blue hover:text-gc-blue-dark inline-flex items-center gap-1 group-hover:translate-x-1 transition-all">
                            Engineer Software →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3: Graphic Design & UI/UX Branding -->
            <div class="group relative bg-white p-8 sm:p-10 rounded-3xl border border-slate-200/80 hover:border-gc-orange shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-orange-50 text-gc-orange flex items-center justify-center mb-6 group-hover:scale-110 transition-transform"><svg class="w-7 h-7 text-gc-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4 5 5 0 014.54-4.97A7 7 0 1115 19H7zm0 0a2 2 0 100-4 2 2 0 000 4z"/></svg></div>
                <div class="space-y-3">
                    <span class="text-xs uppercase font-extrabold tracking-wider text-gc-orange">Brand &amp; Creative</span>
                    <h3 class="text-2xl font-bold text-slate-900 group-hover:text-gc-orange transition-colors">
                        Graphic Design, UI/UX &amp; Brand Identity
                    </h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Creative visual storytelling that sets you apart. From distinctive logos and comprehensive brand guidelines to intuitive mobile &amp; web UI/UX interfaces that reduce friction and maximize conversion rates.
                    </p>

                    <ul class="space-y-2 pt-2 text-xs sm:text-sm font-semibold text-slate-700">
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-orange shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Full brand identity: logo, color palettes, typography &amp; pitch decks</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-orange shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> User-centric UI/UX design wireframes &amp; clickable Figma prototypes</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-orange shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Marketing creatives, banner ads, infographics &amp; social assets</li>
                    </ul>

                    <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                        <div class="flex gap-1.5 flex-wrap">
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Figma</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Illustrator</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Design System</span>
                        </div>
                        <a href="#contact" class="text-sm font-bold text-gc-orange hover:text-gc-orange-dark inline-flex items-center gap-1 group-hover:translate-x-1 transition-all">
                            Design Brand →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 4: Software Marketing & Performance SEO -->
            <div class="group relative bg-white p-8 sm:p-10 rounded-3xl border border-slate-200/80 hover:border-gc-orange shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform"><svg class="w-7 h-7 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div>
                <div class="space-y-3">
                    <span class="text-xs uppercase font-extrabold tracking-wider text-amber-600">Growth Engineering</span>
                    <h3 class="text-2xl font-bold text-slate-900 group-hover:text-gc-orange transition-colors">
                        Software Marketing, Growth Ads &amp; SEO
                    </h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Great code deserves an audience. We deploy data-driven software marketing strategies: technical SEO rankings, targeted Google &amp; Meta ad funnels, conversion rate optimization (CRO), and user acquisition that scales.
                    </p>

                    <ul class="space-y-2 pt-2 text-xs sm:text-sm font-semibold text-slate-700">
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-orange shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Technical on-page &amp; off-page SEO to rank #1 on Google</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-orange shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> High-ROI Google Search Ads, YouTube Ads &amp; Meta campaigns</li>
                        <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gc-orange shrink-0 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> App Store Optimization (ASO) for maximum organic downloads</li>
                    </ul>

                    <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                        <div class="flex gap-1.5 flex-wrap">
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Google Ads</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">SEO</span>
                            <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-600 text-xs font-semibold">Analytics</span>
                        </div>
                        <a href="#contact" class="text-sm font-bold text-gc-orange hover:text-gc-orange-dark inline-flex items-center gap-1 group-hover:translate-x-1 transition-all">
                            Accelerate Growth →
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- 4. INTERACTIVE PROJECT COST ESTIMATOR (Transparent Pricing Calculator) -->
<!-- ========================================================================= -->
<section id="calculator" class="py-20 lg:py-28 bg-slate-50 border-y border-slate-200/80 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                <svg class="w-3.5 h-3.5 text-emerald-600 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>Instant Transparent Pricing
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                Interactive Project Cost Estimator
            </h2>
            <p class="text-base sm:text-lg text-slate-600">
                Select your service requirements to get a ballpark budget and timeline estimate in seconds. No hidden fees or surprises.
            </p>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden grid grid-cols-1 lg:grid-cols-12">
            
            <!-- Left Calculator Controls (7 cols) -->
            <div class="lg:col-span-7 p-6 sm:p-10 space-y-8">
                
                <!-- Step 1: Service Type -->
                <div class="space-y-3">
                    <label class="text-xs font-extrabold uppercase tracking-wider text-slate-500">
                        1. Select Service Category
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                        <button type="button" data-val="app" class="calc-type text-left p-3.5 rounded-2xl border-2 border-gc-blue bg-blue-50/50 ring-2 ring-gc-blue/20 transition-all">
                            <svg class="w-5 h-5 mb-1.5 text-gc-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            <span class="text-xs font-bold text-slate-900 block">Mobile App</span>
                            <span class="text-[10px] text-slate-500">iOS &amp; Android</span>
                        </button>
                        <button type="button" data-val="software" class="calc-type text-left p-3.5 rounded-2xl border-2 border-slate-200 hover:border-slate-300 transition-all">
                            <svg class="w-5 h-5 mb-1.5 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="text-xs font-bold text-slate-900 block">Software / SaaS</span>
                            <span class="text-[10px] text-slate-500">Web Portal / CRM</span>
                        </button>
                        <button type="button" data-val="design" class="calc-type text-left p-3.5 rounded-2xl border-2 border-slate-200 hover:border-slate-300 transition-all">
                            <svg class="w-5 h-5 mb-1.5 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4 5 5 0 014.54-4.97A7 7 0 1115 19H7zm0 0a2 2 0 100-4 2 2 0 000 4z"/></svg>
                            <span class="text-xs font-bold text-slate-900 block">UI/UX &amp; Brand</span>
                            <span class="text-[10px] text-slate-500">Logo &amp; Product</span>
                        </button>
                        <button type="button" data-val="marketing" class="calc-type text-left p-3.5 rounded-2xl border-2 border-slate-200 hover:border-slate-300 transition-all">
                            <svg class="w-5 h-5 mb-1.5 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            <span class="text-xs font-bold text-slate-900 block">Marketing &amp; SEO</span>
                            <span class="text-[10px] text-slate-500">Growth Ads &amp; Rank</span>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Project Scope -->
                <div class="space-y-3">
                    <label class="text-xs font-extrabold uppercase tracking-wider text-slate-500">
                        2. Project Complexity / Scope
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <button type="button" data-val="mvp" class="calc-scope text-left p-4 rounded-2xl border-2 border-slate-200 hover:border-slate-300 transition-all">
                            <span class="text-xs font-extrabold text-slate-900 block">MVP / Starter</span>
                            <span class="text-xs text-slate-500 mt-1 block">Essential core features to launch fast.</span>
                        </button>
                        <button type="button" data-val="standard" class="calc-scope text-left p-4 rounded-2xl border-2 border-gc-orange bg-orange-50/50 ring-2 ring-gc-orange/20 transition-all">
                            <span class="text-xs font-extrabold text-slate-900 block">Standard Business</span>
                            <span class="text-xs text-slate-500 mt-1 block">Full functionality with payment &amp; API.</span>
                        </button>
                        <button type="button" data-val="enterprise" class="calc-scope text-left p-4 rounded-2xl border-2 border-slate-200 hover:border-slate-300 transition-all">
                            <span class="text-xs font-extrabold text-slate-900 block">Enterprise Custom</span>
                            <span class="text-xs text-slate-500 mt-1 block">High scale, custom security &amp; microservices.</span>
                        </button>
                    </div>
                </div>

                <!-- Step 3: Timeline Goal -->
                <div class="space-y-3">
                    <label class="text-xs font-extrabold uppercase tracking-wider text-slate-500">
                        3. Desired Timeline
                    </label>
                    <div class="grid grid-cols-3 gap-3">
                        <button type="button" data-val="urgent" class="calc-timeline text-center p-3 rounded-xl border border-slate-200 text-xs font-bold hover:bg-slate-50 transition-colors">
                            <svg class="w-3.5 h-3.5 text-gc-orange inline mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"/></svg>Fast Sprint
                        </button>
                        <button type="button" data-val="standard" class="calc-timeline text-center p-3 rounded-xl border border-slate-800 bg-slate-100 text-xs font-bold transition-colors">
                            <svg class="w-3.5 h-3.5 text-slate-700 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>Standard
                        </button>
                        <button type="button" data-val="flexible" class="calc-timeline text-center p-3 rounded-xl border border-slate-200 text-xs font-bold hover:bg-slate-50 transition-colors">
                            <svg class="w-3.5 h-3.5 text-emerald-600 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Flexible
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Live Estimate Summary Box (5 cols) -->
            <div class="lg:col-span-5 bg-gradient-to-br from-slate-900 via-slate-850 to-slate-900 text-white p-8 sm:p-10 flex flex-col justify-between">
                <div class="space-y-6">
                    <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Project Blueprint Summary</span>
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    </div>

                    <div>
                        <p class="text-xs font-medium text-slate-400 uppercase tracking-wider mb-1">Estimated Budget Range</p>
                        <p id="calc-price-result" class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                            ₹3,50,000 - ₹7,00,000 ($4,200 - $8,500)
                        </p>
                        <p class="text-[11px] text-slate-400 mt-1">*Based on standard Indian &amp; international dev market benchmarks.</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-2 border-t border-slate-800">
                        <div>
                            <p class="text-[11px] font-medium text-slate-400 uppercase">Estimated Turnaround</p>
                            <p id="calc-time-result" class="text-base font-bold text-gc-orange-light mt-0.5">8 - 12 Weeks</p>
                        </div>
                        <div>
                            <p class="text-[11px] font-medium text-slate-400 uppercase">Dedicated Team</p>
                            <p class="text-base font-bold text-blue-300 mt-0.5">Dev, UI/UX, PM &amp; QA</p>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-slate-800">
                        <p class="text-[11px] font-medium text-slate-400 uppercase mb-1">Recommended Tech Stack</p>
                        <p id="calc-stack-result" class="text-xs text-slate-300 font-mono bg-slate-800/80 p-2.5 rounded-lg border border-slate-700">
                            Cross-platform Mobile, Custom Laravel Backend, Stripe/Razorpay
                        </p>
                    </div>
                </div>

                <div class="pt-8">
                    <button 
                        id="btn-apply-quote" 
                        type="button" 
                        class="w-full py-4 text-center text-sm font-bold text-white bg-gradient-to-r from-gc-orange to-gc-orange-dark hover:from-gc-orange-light hover:to-gc-orange rounded-full shadow-lg shadow-gc-orange/30 transition-all flex items-center justify-center gap-2"
                    >
                        <span>Lock In This Estimate &amp; Inquire</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- 5. FEATURED PORTFOLIO & CASE STUDIES (Real-World Impact) -->
<!-- ========================================================================= -->
<section id="portfolio" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div class="space-y-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-gc-blue border border-blue-100">
                    <svg class="w-3.5 h-3.5 text-gc-blue inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>Proven Track Record
                </span>
                <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Featured Work &amp; Case Studies
                </h2>
                <p class="text-slate-600 max-w-xl text-sm sm:text-base">
                    Explore how Graphicode India delivers measurable business value through custom software architecture, seamless mobile UX, and marketing acceleration.
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap gap-2 text-xs font-semibold">
                <button type="button" data-filter="all" class="portfolio-filter-btn px-4 py-2 rounded-full bg-gc-blue text-white shadow-md transition-all">
                    All Projects
                </button>
                <button type="button" data-filter="app" class="portfolio-filter-btn px-4 py-2 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all">
                    Mobile Apps
                </button>
                <button type="button" data-filter="saas" class="portfolio-filter-btn px-4 py-2 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all">
                    Web &amp; SaaS
                </button>
                <button type="button" data-filter="branding" class="portfolio-filter-btn px-4 py-2 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all">
                    Branding &amp; UI
                </button>
            </div>
        </div>

        <!-- Portfolio Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Case Study 1: FinTech App -->
            <div class="portfolio-card group bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-category="app">
                <div class="h-52 bg-gradient-to-br from-blue-600 to-indigo-900 p-6 flex flex-col justify-between text-white relative overflow-hidden">
                    <div class="absolute -right-8 -bottom-8 w-40 h-40 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
                    <div class="flex justify-between items-center z-10">
                        <span class="px-2.5 py-1 bg-white/20 backdrop-blur rounded-full text-[11px] font-bold uppercase tracking-wider">
                            FinTech Mobile App
                        </span>
                        <div class="w-8 h-8 rounded-lg bg-white/20 backdrop-blur flex items-center justify-center text-white"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg></div>
                    </div>
                    <div class="z-10">
                        <p class="text-xs text-blue-200">Flutter • Laravel API • WebSockets</p>
                        <h3 class="text-xl font-bold tracking-tight text-white mt-1">PaySwift Mobile Banking</h3>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Cross-platform financial application with real-time wallet settlement, biometric authentication, and QR code payments processing 150,000+ daily transactions.
                    </p>
                    <div class="flex items-center justify-between pt-3 border-t border-slate-100 text-xs">
                        <span class="font-bold text-emerald-600"><span class="inline-flex items-center gap-1"><svg class="w-3.5 h-3.5 fill-current text-amber-500" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>4.9 Rating (80k Users)</span></span>
                        <span class="font-semibold text-gc-blue">View Details →</span>
                    </div>
                </div>
            </div>

            <!-- Case Study 2: SaaS Platform -->
            <div class="portfolio-card group bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-category="saas">
                <div class="h-52 bg-gradient-to-br from-slate-900 to-gc-blue-dark p-6 flex flex-col justify-between text-white relative overflow-hidden">
                    <div class="absolute -right-8 -bottom-8 w-40 h-40 bg-gc-orange/20 rounded-full blur-xl pointer-events-none"></div>
                    <div class="flex justify-between items-center z-10">
                        <span class="px-2.5 py-1 bg-white/20 backdrop-blur rounded-full text-[11px] font-bold uppercase tracking-wider">
                            Enterprise SaaS
                        </span>
                        <div class="w-8 h-8 rounded-lg bg-white/20 backdrop-blur flex items-center justify-center text-white"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div>
                    </div>
                    <div class="z-10">
                        <p class="text-xs text-blue-200">Laravel 13 • Tailwind • AWS</p>
                        <h3 class="text-xl font-bold tracking-tight text-white mt-1">OmniCRM Cloud Operations</h3>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Custom cloud CRM for an international logistics firm, reducing manual dispatch errors by 70% with automated dispatching, quotation generation, and client tracking.
                    </p>
                    <div class="flex items-center justify-between pt-3 border-t border-slate-100 text-xs">
                        <span class="font-bold text-emerald-600">-40% Operating Cost</span>
                        <span class="font-semibold text-gc-blue">View Details →</span>
                    </div>
                </div>
            </div>

            <!-- Case Study 3: Brand Identity & Growth Marketing -->
            <div class="portfolio-card group bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-category="branding">
                <div class="h-52 bg-gradient-to-br from-gc-orange to-amber-600 p-6 flex flex-col justify-between text-white relative overflow-hidden">
                    <div class="absolute -right-8 -bottom-8 w-40 h-40 bg-white/15 rounded-full blur-xl pointer-events-none"></div>
                    <div class="flex justify-between items-center z-10">
                        <span class="px-2.5 py-1 bg-white/20 backdrop-blur rounded-full text-[11px] font-bold uppercase tracking-wider">
                            Branding &amp; Growth SEO
                        </span>
                        <div class="w-8 h-8 rounded-lg bg-white/20 backdrop-blur flex items-center justify-center text-white"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div>
                    </div>
                    <div class="z-10">
                        <p class="text-xs text-orange-100">Figma UI/UX • Google Search Ads</p>
                        <h3 class="text-xl font-bold tracking-tight text-white mt-1">Zenith Health Scale</h3>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Complete visual redesign and high-intent software marketing funnel for a telemedicine startup, driving over 250% increase in patient bookings within 90 days.
                    </p>
                    <div class="flex items-center justify-between pt-3 border-t border-slate-100 text-xs">
                        <span class="font-bold text-emerald-600">+250% Organic Growth</span>
                        <span class="font-semibold text-gc-orange">View Details →</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- 6. WHY GRAPHICODE INDIA (Comparative Advantage Matrix) -->
<!-- ========================================================================= -->
<section class="py-20 lg:py-28 bg-slate-50 border-y border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-gc-blue border border-blue-100">
                <svg class="w-3.5 h-3.5 text-gc-blue inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>The Graphicode Standard
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                Why Visionary Businesses Choose Us
            </h2>
            <p class="text-base sm:text-lg text-slate-600">
                We combine the technical depth of an enterprise engineering lab with the creative speed of a boutique design agency.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl border border-slate-200/90 shadow-sm space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-gc-blue flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg></div>
                <h3 class="text-xl font-bold text-slate-900">Code + Design + Marketing</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Most companies hire three separate vendors: one for coding, one for design, and one for marketing. We align all three disciplines under one unified strategy, preventing disconnects and saving budget.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-200/90 shadow-sm space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-orange-50 text-gc-orange flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg></div>
                <h3 class="text-xl font-bold text-slate-900">Agile Transparency &amp; Direct Access</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    No middlemen or frustrating delays. You communicate directly with dedicated senior developers, designers, and project managers through live staging environments and weekly progress demos.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-200/90 shadow-sm space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="text-xl font-bold text-slate-900">100% IP &amp; Code Ownership</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    From day one, all intellectual property, Figma design files, database schemas, and clean GitHub repositories are 100% owned by your company. No vendor lock-in, ever.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- 7. OUR 4-STEP METHODOLOGY (How We Deliver Success) -->
<!-- ========================================================================= -->
<section id="methodology" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-gc-blue border border-blue-100">
                <svg class="w-3.5 h-3.5 text-gc-blue inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>The Proven Blueprint
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Our 4-Step Engineering &amp; Growth Framework
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Structured sprints designed to reduce risk, maintain velocity, and ensure product-market fit.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="relative bg-slate-50 p-6 rounded-3xl border border-slate-200/80 space-y-3">
                <span class="text-4xl font-black text-blue-200">01</span>
                <h3 class="text-lg font-bold text-slate-900">Discovery &amp; Blueprint</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    We deep-dive into your user journeys, technical constraints, competition, and monetization goals to deliver a crystal-clear architecture plan.
                </p>
            </div>

            <div class="relative bg-slate-50 p-6 rounded-3xl border border-slate-200/80 space-y-3">
                <span class="text-4xl font-black text-orange-200">02</span>
                <h3 class="text-lg font-bold text-slate-900">UI/UX &amp; Prototyping</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Interactive clickable Figma mockups and high-fidelity brand assets validated with real user testing before a single line of backend code is committed.
                </p>
            </div>

            <div class="relative bg-slate-50 p-6 rounded-3xl border border-slate-200/80 space-y-3">
                <span class="text-4xl font-black text-blue-200">03</span>
                <h3 class="text-lg font-bold text-slate-900">Agile Dev &amp; Rigorous QA</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Rapid 2-week development sprints with automated unit tests, strict code reviews, security scans, and continuous staging releases for you to test.
                </p>
            </div>

            <div class="relative bg-slate-50 p-6 rounded-3xl border border-slate-200/80 space-y-3">
                <span class="text-4xl font-black text-orange-200">04</span>
                <h3 class="text-lg font-bold text-slate-900">Launch &amp; Marketing Scale</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Zero-downtime deployment, App Store publishing, Google search SEO activation, and paid customer acquisition campaigns to drive early traction.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- 8. CLIENT TESTIMONIALS & REVIEWS -->
<!-- ========================================================================= -->
<section id="testimonials" class="py-20 lg:py-28 bg-slate-50 border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-700 border border-amber-200">
                <svg class="w-3.5 h-3.5 text-amber-600 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>Client Endorsements
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Trusted by Founders &amp; Engineering Leaders
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Hear what our partner companies have to say about working with Graphicode India.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center text-amber-400 gap-0.5">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-slate-700 text-sm leading-relaxed italic">
                        "Graphicode India built our cross-platform delivery app from scratch in under 10 weeks. The Flutter performance is buttery smooth, and their marketing team helped us acquire our first 25,000 users with phenomenal ad ROI."
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                    <div class="w-10 h-10 rounded-full bg-blue-100 text-gc-blue font-bold flex items-center justify-center">
                        RK
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-900">Rajesh K.</h3>
                        <p class="text-xs text-slate-500">Founder &amp; CEO, QuickShip Logistics</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center text-amber-400 gap-0.5">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-slate-700 text-sm leading-relaxed italic">
                        "The graphic design and brand overhaul completely transformed how enterprise clients perceive us. We were able to close a \$120,000 contract simply because our new web portal and pitch assets looked world-class."
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                    <div class="w-10 h-10 rounded-full bg-orange-100 text-gc-orange font-bold flex items-center justify-center">
                        SM
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-900">Sneha Mukherjee</h3>
                        <p class="text-xs text-slate-500">Managing Director, Horizon FinTech</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center text-amber-400 gap-0.5">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-slate-700 text-sm leading-relaxed italic">
                        "Their Laravel expertise is second to none. We migrated our legacy PHP application to a modern SaaS architecture without a single minute of downtime. Transparent billing and rock-solid code quality."
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 font-bold flex items-center justify-center">
                        AV
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-900">Amitabh Verma</h3>
                        <p class="text-xs text-slate-500">Head of Technology, EduSpark Global</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- 9. FREQUENTLY ASKED QUESTIONS (SEO Rich Accordions) -->
<!-- ========================================================================= -->
<section id="faq" class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 space-y-4">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-gc-blue border border-blue-100">
                <svg class="w-3.5 h-3.5 text-gc-blue inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Clarifications
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Frequently Asked Questions
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Answers to common queries regarding working with Graphicode India.
            </p>
        </div>

        <div class="space-y-4">
            
            <div class="border border-slate-200 rounded-2xl p-5 hover:border-slate-300 transition-colors">
                <button type="button" class="faq-trigger w-full flex items-center justify-between text-left font-bold text-slate-900 text-base sm:text-lg focus:outline-none">
                    <span>What is Graphicode India's typical project timeline?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
                    Project turnaround depends on complexity. A rapid MVP app or brand identity typically ships within 4 to 6 weeks. Comprehensive custom software or multi-sided mobile marketplaces usually require 8 to 14 weeks. We provide clear milestone timelines before kicking off.
                </div>
            </div>

            <div class="border border-slate-200 rounded-2xl p-5 hover:border-slate-300 transition-colors">
                <button type="button" class="faq-trigger w-full flex items-center justify-between text-left font-bold text-slate-900 text-base sm:text-lg focus:outline-none">
                    <span>Who owns the intellectual property and source code?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
                    You do, 100%. Upon project milestone clearance, all copyright, source code, Figma design files, and deployment keys belong solely to you. We execute strict non-disclosure agreements (NDAs) prior to starting.
                </div>
            </div>

            <div class="border border-slate-200 rounded-2xl p-5 hover:border-slate-300 transition-colors">
                <button type="button" class="faq-trigger w-full flex items-center justify-between text-left font-bold text-slate-900 text-base sm:text-lg focus:outline-none">
                    <span>Can you take over an existing codebase or incomplete project?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
                    Yes. We conduct a thorough Code Quality &amp; Security Audit of your existing repository, identify bottlenecks and vulnerabilities, and formulate a step-by-step modernization plan to get your product back on track.
                </div>
            </div>

            <div class="border border-slate-200 rounded-2xl p-5 hover:border-slate-300 transition-colors">
                <button type="button" class="faq-trigger w-full flex items-center justify-between text-left font-bold text-slate-900 text-base sm:text-lg focus:outline-none">
                    <span>Do you offer post-launch maintenance and digital marketing?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
                    Absolutely. We offer ongoing maintenance SLAs covering server monitoring, OS updates, security patches, as well as monthly SEO and growth marketing retainer plans to continuously drive user acquisition.
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- 10. PROJECT INQUIRY & CONTACT FORM SECTION (Lead Generation Hub) -->
<!-- ========================================================================= -->
<section id="contact" class="py-20 lg:py-28 bg-slate-50 border-t border-slate-200/80 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-3xl border border-slate-200 shadow-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-12">
            
            <!-- Left Contact Info & Direct Contacts (5 cols) -->
            <div class="lg:col-span-5 bg-gradient-to-br from-gc-blue-dark via-gc-blue to-blue-900 text-white p-8 sm:p-12 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -right-16 -top-16 w-64 h-64 bg-gc-orange/20 rounded-full blur-2xl pointer-events-none"></div>

                <div class="space-y-6 relative z-10">
                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-bold bg-white/10 text-blue-200 border border-white/20">
                        <svg class="w-3.5 h-3.5 text-blue-200 inline mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"/></svg>Quick Response Guaranteed
                    </span>
                    <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Let's Turn Your Concept into Reality
                    </h2>
                    <p class="text-blue-100 text-sm leading-relaxed">
                        Have an ambitious app, software platform, design revamp, or digital marketing goal? Share your vision and our senior architects will respond within 2 to 4 business hours.
                    </p>

                    <div class="space-y-4 pt-4 text-sm text-blue-100">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                            <div>
                                <p class="text-xs text-blue-200">Headquarters</p>
                                <p class="font-bold text-white">India • Serving Worldwide</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                            <div>
                                <p class="text-xs text-blue-200">Official Inquiries</p>
                                <a href="mailto:contact@graphicodeindia.com" class="font-bold text-white hover:underline">contact@graphicodeindia.com</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></div>
                            <div>
                                <p class="text-xs text-blue-200">Direct Call / WhatsApp</p>
                                <a href="tel:+919876543210" class="font-bold text-white hover:underline">+91 98765 43210</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-white/10 text-xs text-blue-200 relative z-10">
                    <svg class="w-4 h-4 text-emerald-400 inline mr-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>Protected under mutual Non-Disclosure Agreement (NDA). Your idea and information remain 100% confidential.
                </div>
            </div>

            <!-- Right Interactive Form (7 cols) -->
            <div class="lg:col-span-7 p-8 sm:p-12">
                <form action="#contact" method="GET" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        
                        <!-- Full Name -->
                        <div class="space-y-2">
                            <label for="contact-name" class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">
                                Your Full Name *
                            </label>
                            <input 
                                type="text" 
                                id="contact-name" 
                                name="name" 
                                required 
                                placeholder="e.g. Rahul Sharma"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-gc-blue focus:ring-2 focus:ring-gc-blue/20 text-sm text-slate-800 placeholder-slate-400 outline-none transition-all"
                            />
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label for="contact-email" class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">
                                Work Email *
                            </label>
                            <input 
                                type="email" 
                                id="contact-email" 
                                name="email" 
                                required 
                                placeholder="name@company.com"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-gc-blue focus:ring-2 focus:ring-gc-blue/20 text-sm text-slate-800 placeholder-slate-400 outline-none transition-all"
                            />
                        </div>

                        <!-- Phone / WhatsApp -->
                        <div class="space-y-2">
                            <label for="contact-phone" class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">
                                Phone Number / WhatsApp
                            </label>
                            <input 
                                type="tel" 
                                id="contact-phone" 
                                name="phone" 
                                placeholder="+91 98765 43210"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-gc-blue focus:ring-2 focus:ring-gc-blue/20 text-sm text-slate-800 placeholder-slate-400 outline-none transition-all"
                            />
                        </div>

                        <!-- Service Category -->
                        <div class="space-y-2">
                            <label for="form-service-select" class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">
                                Primary Service of Interest
                            </label>
                            <select 
                                id="form-service-select" 
                                name="service"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-gc-blue focus:ring-2 focus:ring-gc-blue/20 text-sm text-slate-800 outline-none transition-all"
                            >
                                <option value="app">Mobile App Development (iOS/Android)</option>
                                <option value="software">Custom Software &amp; SaaS Development</option>
                                <option value="design">Graphic Design &amp; Brand Identity</option>
                                <option value="marketing">Software Marketing &amp; SEO Growth</option>
                                <option value="full">Full Digital Transformation (All-in-One)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Budget Tier -->
                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">
                            Approximate Budget (INR / USD)
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs">
                            <label class="flex items-center gap-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:bg-slate-50">
                                <input type="radio" name="budget" value="starter" class="text-gc-blue">
                                <span class="font-semibold text-slate-700">&lt; ₹2 Lakhs ($2.5k)</span>
                            </label>
                            <label class="flex items-center gap-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:bg-slate-50">
                                <input type="radio" name="budget" value="standard" checked class="text-gc-blue">
                                <span class="font-semibold text-slate-700">₹2L - ₹6L ($3k-$7k)</span>
                            </label>
                            <label class="flex items-center gap-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:bg-slate-50">
                                <input type="radio" name="budget" value="growth" class="text-gc-blue">
                                <span class="font-semibold text-slate-700">₹6L - ₹15L ($8k-$18k)</span>
                            </label>
                            <label class="flex items-center gap-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:bg-slate-50">
                                <input type="radio" name="budget" value="enterprise" class="text-gc-blue">
                                <span class="font-semibold text-slate-700">₹15L+ ($20k+)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Project Details -->
                    <div class="space-y-2">
                        <label for="form-project-notes" class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">
                            Tell Us About Your Project &amp; Requirements *
                        </label>
                        <textarea 
                            id="form-project-notes" 
                            name="message" 
                            rows="4" 
                            required 
                            placeholder="Please share a brief summary of your project idea, key features, target timeline, or reference apps you like..."
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-gc-blue focus:ring-2 focus:ring-gc-blue/20 text-sm text-slate-800 placeholder-slate-400 outline-none transition-all"
                        ></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="w-full py-4 text-center text-base font-bold text-white bg-gradient-to-r from-gc-orange to-gc-orange-dark hover:from-gc-orange-light hover:to-gc-orange rounded-full shadow-lg shadow-gc-orange/30 hover:shadow-xl hover:shadow-gc-orange/40 transition-all flex items-center justify-center gap-2"
                        >
                            <span>Send Project Inquiry &amp; Request Blueprint</span>
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                        <p class="text-center text-xs text-slate-500 mt-3">
                            <svg class="w-3.5 h-3.5 text-gc-orange inline mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"/></svg>We typically respond within 2 to 4 hours with a preliminary project roadmap.
                        </p>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>
@endsection

