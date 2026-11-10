@extends('frontend.layouts.app')

@section('content')
{{-- 
    Graphicode India - Homepage
    Section Structure Aligned with Top Indian Agency Architecture (Webguru Infosystems Model):
    1. Hero Section (Value Proposition, Certifications, Direct CTAs)
    2. Who We Are (Company Profile, ISO 9001 Standards, Global Reach, Metrics)
    3. What We Do / Core Services (Web, Mobile Apps, E-Commerce, UI/UX, Marketing)
    4. Technologies We Master (Backend, Frontend, Mobile, Cloud/Databases)
    5. Hire Dedicated Developers (Flexible Resource Augmentation Model)
    6. Industries We Serve (Healthcare, FinTech, E-Commerce, Logistics, EdTech, Real Estate)
    7. Why Choose Us / Differentiators (6 Core Competitive Advantages)
    8. Our 4-Step Work Process (Discover, Design, Develop, Deploy & Market)
    9. Featured Portfolio & Case Studies (Category-Filtered Real Client Impact)
    10. Interactive Cost Estimator (Instant Project Calculator)
    11. Client Reviews & Testimonials (Verified Client Social Proof)
    12. Frequently Asked Questions (SEO Rich Accordions)
    13. Request a Free Quote / Contact Hub (High-Conversion Inquiry Form)

    Strict Design System:
    - Pure Solid Colors Only (Logo Blue #15388A / #1E4DB7 & Logo Orange #F26522)
    - Zero Gradients
    - Zero Emojis (Replaced with Crisp Vector SVG Icons)
--}}

<!-- ========================================================================= -->
<!-- 1. HERO SECTION -->
<!-- ========================================================================= -->
<section class="relative pt-12 pb-20 lg:pt-20 lg:pb-32 overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Text & CTA (7 cols) -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 border border-blue-200 shadow-xs">
                    <span class="flex h-2.5 w-2.5 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gc-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-gc-orange"></span>
                    </span>
                    <span class="text-xs font-bold text-gc-blue tracking-wide uppercase">
                        ISO-Certified Web, Mobile &amp; Software Development Agency
                    </span>
                </div>

                <!-- Main Heading -->
                <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12]">
                    We Engineer 
                    <span class="text-gc-blue">Powerful Software</span>, 
                    Mobile Apps &amp; High-Converting 
                    <span class="text-gc-orange relative whitespace-nowrap">Brands</span>
                </h1>

                <!-- Subheading Description -->
                <p class="text-lg sm:text-xl text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    <strong class="font-semibold text-slate-800">Graphicode India</strong> empowers ambitious startups, growing SMBs, and global enterprises with bespoke mobile applications, custom web platforms, scalable SaaS architectures, and ROI-driven marketing funnels.
                </p>

                <!-- Value Highlights Checkmarks -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs sm:text-sm font-semibold text-slate-700 max-w-xl mx-auto lg:mx-0">
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>iOS &amp; Android Apps</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-blue-100 text-gc-blue flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Custom SaaS &amp; CRM</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-orange-100 text-gc-orange flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>UI/UX &amp; Branding</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>E-Commerce Solutions</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Digital Marketing &amp; SEO</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>100% Code Ownership</span>
                    </div>
                </div>

                <!-- Call to Action Buttons -->
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a 
                        href="#contact" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 text-base font-bold text-white bg-gc-orange hover:bg-gc-orange-dark rounded-xl shadow-lg transition-colors"
                    >
                        <span>Request Free Blueprint</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>

                    <a 
                        href="#calculator" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-4 text-base font-semibold text-gc-blue bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-xl transition-colors"
                    >
                        <span class="w-2.5 h-2.5 rounded-full bg-gc-blue"></span>
                        <span>Estimate Project Cost</span>
                    </a>
                </div>

                <!-- Trust Metric Bar -->
                <div class="pt-6 border-t border-slate-100 flex flex-wrap items-center justify-center lg:justify-start gap-8 text-left">
                    <div>
                        <p class="text-2xl font-black text-slate-900 tracking-tight">150+</p>
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
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    <div class="relative bg-slate-50 p-6 sm:p-8 rounded-3xl border border-blue-100 shadow-xl">
                        
                        <div class="flex items-center justify-between pb-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-white p-1.5 shadow-sm border border-slate-100 flex items-center justify-center">
                                    <img src="{{ asset('logo.png') }}" alt="GC" class="h-7 w-auto object-contain">
                                </div>
                                <div>
                                    <h2 class="text-sm font-bold text-slate-900">Graphicode Core</h2>
                                    <p class="text-xs text-slate-500 flex items-center gap-1">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Live Production Ready
                                    </p>
                                </div>
                            </div>
                            <span class="inline-flex items-center gap-1 text-[11px] font-bold px-2.5 py-1 rounded-md bg-orange-100 text-gc-orange border border-orange-200">
                                <svg class="w-3 h-3 text-gc-orange inline mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"/></svg>v2026.4
                            </span>
                        </div>

                        <div class="py-6 space-y-4">
                            <div class="bg-slate-900 text-slate-200 p-4 rounded-xl text-xs font-mono shadow-inner border border-slate-800 space-y-1">
                                <div class="flex items-center justify-between text-slate-400 pb-2 mb-2 border-b border-slate-800 text-[10px]">
                                    <span>graphicode_core.ts</span>
                                    <span class="text-emerald-400 font-semibold inline-flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Compiled 0 err</span>
                                </div>
                                <p><span class="text-blue-400">const</span> solution = <span class="text-gc-orange font-bold">Graphicode</span>.<span class="text-amber-300">build</span>({</p>
                                <p class="pl-4">services: [<span class="text-emerald-300">'Web SaaS'</span>, <span class="text-emerald-300">'Mobile App'</span>, <span class="text-emerald-300">'E-Commerce'</span>],</p>
                                <p class="pl-4">quality: <span class="text-emerald-300">'ISO 9001:2015 Compliant'</span>,</p>
                                <p class="pl-4">delivery: <span class="text-emerald-300">'Agile Sprints'</span></p>
                                <p>});</p>
                                <p class="text-slate-400 pt-1">// Scalable, high-ROI enterprise software</p>
                            </div>

                            <div class="space-y-2 pt-1">
                                <div class="flex justify-between text-xs font-semibold text-slate-700">
                                    <span>Application Reliability &amp; Uptime</span>
                                    <span class="text-gc-blue font-bold">99.98%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden">
                                    <div class="bg-gc-blue h-2 rounded-full" style="width: 99.98%"></div>
                                </div>

                                <div class="flex justify-between text-xs font-semibold text-slate-700 pt-2">
                                    <span>Client Growth &amp; SEO Velocity</span>
                                    <span class="text-gc-orange font-bold">+340%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden">
                                    <div class="bg-gc-orange h-2 rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-2 flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">Laravel 13</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">Flutter Mobile</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">React &amp; Next.js</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">UI/UX Brand</span>
                            <span class="px-2 py-0.5 bg-white border border-slate-200 text-slate-600 rounded-md text-[10px] font-bold">Technical SEO</span>
                        </div>
                    </div>

                    <div class="absolute -top-6 -right-4 sm:-right-8 bg-white p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-50 text-gc-orange flex items-center justify-center font-bold">
                            <svg class="w-5 h-5 text-gc-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400">Total Downloads</p>
                            <p class="text-sm font-black text-slate-900 tracking-tight">500,000+</p>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -left-4 sm:-left-8 bg-white p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-gc-blue flex items-center justify-center font-bold">
                            <svg class="w-5 h-5 text-gc-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
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

@endsection
