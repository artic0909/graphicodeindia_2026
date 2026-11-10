<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Mobile Menu Drawer Toggle
    const menuBtn = document.getElementById('mobile-menu-btn');
    const drawer = document.getElementById('mobile-menu-drawer');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');

    if (menuBtn && drawer) {
        menuBtn.addEventListener('click', function () {
            const isHidden = drawer.classList.contains('hidden');
            if (isHidden) {
                drawer.classList.remove('hidden');
                iconOpen.classList.add('hidden');
                iconClose.classList.remove('hidden');
            } else {
                drawer.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            }
        });

        // Close mobile drawer when clicking any nav link
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                drawer.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            });
        });
    }

    // 2. Header Scroll Effect
    const header = document.getElementById('site-header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 30) {
            header.classList.add('shadow-md', 'py-1');
        } else {
            header.classList.remove('shadow-md', 'py-1');
        }
    });

    // 3. Interactive FAQ Accordion
    document.querySelectorAll('.faq-trigger').forEach(trigger => {
        trigger.addEventListener('click', function () {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            const isOpen = !content.classList.contains('hidden');

            // Close all other FAQs
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));

            if (!isOpen) {
                content.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-180');
            }
        });
    });

    // 4. Interactive Project Cost Estimator Calculator
    const typeCards = document.querySelectorAll('.calc-type');
    const scopeCards = document.querySelectorAll('.calc-scope');
    const timelineCards = document.querySelectorAll('.calc-timeline');

    let selectedType = 'app';
    let selectedScope = 'standard';
    let selectedTimeline = 'standard';

    const estimates = {
        'app': {
            'mvp': { inr: '₹1,50,000 - ₹3,00,000', usd: '$1,800 - $3,500', time: '4 - 6 Weeks', stack: 'Flutter / React Native, Firebase / REST API, Figma UI' },
            'standard': { inr: '₹3,50,000 - ₹7,00,000', usd: '$4,200 - $8,500', time: '8 - 12 Weeks', stack: 'Cross-platform Mobile, Custom Laravel Backend, Stripe/Razorpay' },
            'enterprise': { inr: '₹8,00,000+', usd: '$9,500+', time: '14 - 20 Weeks', stack: 'Native/Flutter, Microservices, CI/CD, Enterprise Cloud SLA' }
        },
        'software': {
            'mvp': { inr: '₹1,80,000 - ₹3,50,000', usd: '$2,200 - $4,200', time: '5 - 7 Weeks', stack: 'Laravel / Node.js, Tailwind CSS, PostgreSQL, Auth/Roles' },
            'standard': { inr: '₹4,00,000 - ₹8,50,000', usd: '$4,800 - $10,000', time: '8 - 14 Weeks', stack: 'Full SaaS System, Multi-tenant DB, Custom Dashboards, API Gateways' },
            'enterprise': { inr: '₹9,50,000+', usd: '$11,500+', time: '16+ Weeks', stack: 'Distributed Architecture, High-Concurrency DB, Realtime WebSockets' }
        },
        'design': {
            'mvp': { inr: '₹35,000 - ₹75,000', usd: '$450 - $900', time: '1 - 2 Weeks', stack: 'Brand Logo, Color System, Typography, Social Kit' },
            'standard': { inr: '₹80,000 - ₹1,80,000', usd: '$1,000 - $2,200', time: '3 - 4 Weeks', stack: 'Complete Brand Identity, Full App/Web UI/UX in Figma, Design System' },
            'enterprise': { inr: '₹2,00,000+', usd: '$2,500+', time: '5 - 8 Weeks', stack: 'Omni-channel Branding, Interactive 3D Assets, Product Design Guide' }
        },
        'marketing': {
            'mvp': { inr: '₹40,000 / mo', usd: '$500 / mo', time: 'Monthly Sprint', stack: 'SEO Foundations, Social Media Creatives, Content Strategy' },
            'standard': { inr: '₹85,000 / mo', usd: '$1,100 / mo', time: 'Quarterly Growth', stack: 'Technical SEO, Meta & Google Ads Funnels, Conversion Rate Optimization' },
            'enterprise': { inr: '₹1,75,000+ / mo', usd: '$2,200+ / mo', time: 'Annual Dedicated', stack: 'Full-Funnel Growth Engineering, Custom Lead Nurturing, High-budget Ads' }
        }
    };

    function updateCalculator() {
        const data = estimates[selectedType] && estimates[selectedType][selectedScope] 
            ? estimates[selectedType][selectedScope] 
            : estimates['app']['standard'];

        const priceEl = document.getElementById('calc-price-result');
        const timeEl = document.getElementById('calc-time-result');
        const stackEl = document.getElementById('calc-stack-result');
        const formServiceInput = document.getElementById('form-service-select');

        if (priceEl) priceEl.innerText = `${data.inr} (${data.usd})`;
        if (timeEl) timeEl.innerText = data.time;
        if (stackEl) stackEl.innerText = data.stack;

        // Sync with contact form dropdown if available
        if (formServiceInput) {
            formServiceInput.value = selectedType;
        }
    }

    typeCards.forEach(card => {
        card.addEventListener('click', function () {
            typeCards.forEach(c => {
                c.classList.remove('border-gc-blue', 'bg-blue-50/50', 'ring-2', 'ring-gc-blue/20');
                c.classList.add('border-slate-200');
            });
            this.classList.add('border-gc-blue', 'bg-blue-50/50', 'ring-2', 'ring-gc-blue/20');
            this.classList.remove('border-slate-200');
            selectedType = this.dataset.val;
            updateCalculator();
        });
    });

    scopeCards.forEach(card => {
        card.addEventListener('click', function () {
            scopeCards.forEach(c => {
                c.classList.remove('border-gc-orange', 'bg-orange-50/50', 'ring-2', 'ring-gc-orange/20');
                c.classList.add('border-slate-200');
            });
            this.classList.add('border-gc-orange', 'bg-orange-50/50', 'ring-2', 'ring-gc-orange/20');
            this.classList.remove('border-slate-200');
            selectedScope = this.dataset.val;
            updateCalculator();
        });
    });

    timelineCards.forEach(card => {
        card.addEventListener('click', function () {
            timelineCards.forEach(c => {
                c.classList.remove('border-slate-800', 'bg-slate-100');
                c.classList.add('border-slate-200');
            });
            this.classList.add('border-slate-800', 'bg-slate-100');
            this.classList.remove('border-slate-200');
            selectedTimeline = this.dataset.val;
            updateCalculator();
        });
    });

    // Run initial calculator update
    updateCalculator();

    // 5. Quote to Form Autofill Button
    const quoteToFormBtn = document.getElementById('btn-apply-quote');
    if (quoteToFormBtn) {
        quoteToFormBtn.addEventListener('click', function () {
            const contactSection = document.getElementById('contact');
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth' });
                const notesField = document.getElementById('form-project-notes');
                if (notesField) {
                    const priceText = document.getElementById('calc-price-result')?.innerText || '';
                    notesField.value = `[Inquiry from Calculator: ${selectedType.toUpperCase()} | Scope: ${selectedScope.toUpperCase()} | Estimated Range: ${priceText}] - Looking forward to discussing details.`;
                }
            }
        });
    }

    // 6. Portfolio Tab Filter
    const filterButtons = document.querySelectorAll('.portfolio-filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            const filter = this.dataset.filter;
            filterButtons.forEach(b => {
                b.classList.remove('bg-gc-blue', 'text-white', 'shadow-md');
                b.classList.add('bg-slate-100', 'text-slate-600', 'hover:bg-slate-200');
            });
            this.classList.add('bg-gc-blue', 'text-white', 'shadow-md');
            this.classList.remove('bg-slate-100', 'text-slate-600', 'hover:bg-slate-200');

            portfolioCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

