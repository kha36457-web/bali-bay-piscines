<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bali Bay Piscines | Construction & Entretien de Piscines de Luxe à Marrakech</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bali: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            500: '#0284c7',
                            700: '#0f172a'
                        },
                        'bali-navy': '#0f172a',
                        'bali-cyan': '#0284c7',
                        'bali-bg': '#f8fafc'
                    }
                }
            }
        }
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/js/app.js'])
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        h1, h2, h3, h4, h5, h6, .font-serif {
            font-family: 'Playfair Display', serif;
        }
        [x-cloak] {
            display: none !important;
        }
        @keyframes gradientBg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-bali-50 text-slate-950 antialiased min-h-screen">

    <header x-data="{ mobileMenuOpen: false }" class="fixed inset-x-0 top-0 z-50 bg-white/90 backdrop-blur-md shadow-sm border-b border-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center"></div>

                <nav class="hidden md:flex items-center gap-8 text-sm font-semibold uppercase tracking-[0.24em] text-bali-navy">
                    <a href="/" class="transition hover:text-bali-cyan">Accueil</a>
                    <a href="{{ route('services') }}" class="transition hover:text-bali-cyan">Nos Services</a>
                    <a href="/#realisations" class="transition hover:text-bali-cyan">Réalisations</a>
                    <a href="/#boutique" class="transition hover:text-bali-cyan">Boutique</a>
                    <a href="/#contact-section" class="transition hover:text-bali-cyan">Contact</a>
                </nav>



                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="md:hidden inline-flex items-center justify-center rounded-full border border-gray-200 bg-white p-2 text-bali-navy shadow-sm hover:bg-gray-50 focus:outline-none">
                    <span class="sr-only">Ouvrir le menu</span>
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="mobileMenuOpen" x-cloak class="md:hidden border-t border-gray-100 bg-white/95 shadow-sm" id="mobile-menu" x-transition.opacity>
            <div class="space-y-1 px-4 py-4">
                <a href="/" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-semibold text-bali-navy transition hover:bg-gray-50">Accueil</a>
                <a href="{{ route('services') }}" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-semibold text-bali-navy transition hover:bg-gray-50">Nos Services</a>
                <a href="/#realisations" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-semibold text-bali-navy transition hover:bg-gray-50">Réalisations</a>
                <a href="/#boutique" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-semibold text-bali-navy transition hover:bg-gray-50">Boutique</a>
                <a href="/#contact-section" @click="mobileMenuOpen = false" class="block rounded-xl px-4 py-3 text-sm font-semibold text-bali-navy transition hover:bg-gray-50">Contact</a>

            </div>
        </div>
    </header>

    <main class="pt-24">
        @yield('content')
    </main>

    @include('layouts.footer')

    {{-- Floating WhatsApp Button --}}
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/{{ config('services.whatsapp.phone', '212709276985') }}?text={{ rawurlencode('Bonjour, je souhaite des informations concernant vos services de piscine.') }}"
           target="_blank"
           rel="noopener noreferrer"
           class="relative flex items-center justify-center w-14 h-14 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full shadow-2xl transition-all duration-300 hover:scale-110 active:scale-95 group"
           aria-label="Contactez-nous sur WhatsApp">
            {{-- Ping Pulse Effect --}}
            <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-75 animate-ping -z-10"></span>
            
            {{-- WhatsApp Icon --}}
            <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
            </svg>
            
            {{-- Tooltip / Label --}}
            <span class="absolute right-16 bg-slate-900 text-white text-xs font-bold px-3.5 py-2 rounded-xl whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none border border-white/10">
                Discuter sur WhatsApp
            </span>
        </a>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                duration: 800,
                offset: 100,
            });
        });
    </script>
</body>
</html>
