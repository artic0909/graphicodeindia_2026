@props([
    'title' => 'Graphicode India | Software Marketing, App Development & Graphic Design Company',
    'description' => 'Graphicode India is a premier technology and marketing agency specializing in high-performance mobile app development, custom software engineering, creative UI/UX graphic design, and ROI-driven software marketing.',
    'keywords' => 'Graphicode India, software company India, app development company, mobile app developers, graphic design agency, software marketing, custom web development, UI UX design, Flutter app development, Laravel development, SEO agency India',
    'image' => asset('logo.png'),
    'canonical' => url()->current(),
])

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="author" content="Graphicode India">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<link rel="canonical" href="{{ $canonical }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:site_name" content="Graphicode India">
<meta property="og:locale" content="en_US">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $canonical }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:creator" content="@GraphicodeIndia">

<!-- Theme Color matching Logo Blue -->
<meta name="theme-color" content="#1E4DB7">
<meta name="msapplication-TileColor" content="#1E4DB7">

<!-- JSON-LD Structured Data for Search Engines -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "{{ url('/') }}/#organization",
      "name": "Graphicode India",
      "url": "{{ url('/') }}",
      "logo": {
        "@type": "ImageObject",
        "@id": "{{ url('/') }}/#logo",
        "url": "{{ asset('logo.png') }}",
        "caption": "Graphicode India Logo"
      },
      "image": "{{ asset('logo.png') }}",
      "description": "Graphicode India is a full-service technology agency delivering enterprise software, mobile applications, brand UI/UX graphic design, and growth software marketing.",
      "email": "contact@graphicodeindia.com",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "IN"
      },
      "sameAs": [
        "https://www.linkedin.com/company/graphicodeindia",
        "https://twitter.com/graphicodeindia",
        "https://www.instagram.com/graphicodeindia",
        "https://github.com/graphicodeindia"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "{{ url('/') }}/#website",
      "url": "{{ url('/') }}",
      "name": "Graphicode India",
      "publisher": {
        "@id": "{{ url('/') }}/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ url('/') }}/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "ProfessionalService",
      "name": "Graphicode India - Software, App & Design Agency",
      "url": "{{ url('/') }}",
      "image": "{{ asset('logo.png') }}",
      "priceRange": "$$",
      "currenciesAccepted": "INR, USD, EUR",
      "paymentAccepted": "Cash, Credit Card, Bank Transfer, PayPal",
      "areaServed": ["India", "United States", "United Kingdom", "United Arab Emirates", "Worldwide"],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Digital Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Custom Mobile App Development",
              "description": "Native iOS, Android & cross-platform Flutter mobile applications built for high performance and scale."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Full-Stack Software Development",
              "description": "Scalable web applications, SaaS platforms, cloud backends, and custom enterprise CRM solutions."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Graphic Design & UI/UX Branding",
              "description": "Modern brand identity systems, conversion-driven UI/UX, product design, and interactive graphic collaterals."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Software Marketing & SEO Acceleration",
              "description": "Data-backed software marketing funnels, technical SEO, high-ROI paid user acquisition, and organic growth."
            }
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What services does Graphicode India provide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Graphicode India provides end-to-end digital solutions including custom mobile app development (iOS, Android, Flutter), bespoke web software and SaaS development, brand identity and graphic design, UI/UX design, and growth software marketing with SEO."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can Graphicode India start my project?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We begin with a discovery sprint within 2 to 4 business days of requirement finalization, providing a dedicated project manager, live progress tracking, and weekly agile deliverables."
          }
        },
        {
          "@type": "Question",
          "name": "Do you serve clients outside India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Graphicode India serves startups, scale-ups, and established enterprises across India, the US, UK, Middle East, and globally, with flexible time-zone overlapping communication."
          }
        }
      ]
    }
  ]
}
</script>

