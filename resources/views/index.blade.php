@extends('layouts.app')



@section('content')



<section id="accueil" class="bg-gradient-to-r from-bali-500 via-sky-400 to-amber-300 py-24" style="background-size: 200% 200%; animation: gradientBg 15s ease infinite;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-2 items-center">

            <div class="space-y-8">

                <span class="inline-block rounded-full bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-slate-700 shadow-sm" data-aos="fade-down">Piscines de Luxe Marrakech</span>

                <h1 class="text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl" data-aos="fade-up">L'art de l'eau pure pour vos projets d'exception</h1>

                <p class="max-w-2xl text-lg leading-8 text-white/90" data-aos="fade-up" data-aos-delay="100">Conception, construction et entretien de piscines haut de gamme à Marrakech. Nous créons des bassins sur-mesure pour villas, riads et établissements de prestige.</p>

                <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="200">

                    <a href="#boutique" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-8 py-4 text-sm font-semibold text-white shadow-lg transition hover:bg-slate-800">Voir la Boutique</a>

                    <a href="#contact-section" class="inline-flex items-center justify-center rounded-full border-2 border-white bg-transparent px-8 py-4 text-sm font-semibold text-white transition hover:bg-white hover:text-slate-900">Contactez-nous</a>

                </div>

            </div>

            <div class="w-full h-[450px] rounded-2xl overflow-hidden shadow-2xl border-4 border-white bg-white flex items-center justify-center p-6" data-aos="zoom-in" data-aos-delay="300">

                <img src="{{ asset('logo.png') }}" alt="Bali Bay Logo" class="w-full h-full object-contain drop-shadow-2xl">

            </div>

        </div>

</section>

{{-- Visitor Counter Section --}}
@if(isset($visitorCount))
<div class="bg-bali-50 pb-12 flex justify-center">
    <div class="inline-flex items-center gap-2.5 bg-white border border-slate-200/60 rounded-full px-5 py-2.5 shadow-md shadow-slate-100/50">
        <span class="relative flex h-2.5 w-2.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
        </span>
        <span class="text-sm font-semibold tracking-wide text-slate-600">Rejoignez les <strong class="text-bali-500 font-extrabold">{{ number_format($visitorCount, 0, ',', ' ') }}</strong> clients qui ont exploré nos créations Bali Bay.</span>
    </div>
</div>
@endif

<section class="bg-white py-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 text-center"
                 x-data="{ count: 0, target: 45, init() {
                     let start = null;
                     const step = (timestamp) => {
                         if (!start) start = timestamp;
                         const progress = timestamp - start;
                         const duration = 1500;
                         if (progress < duration) {
                             this.count = Math.floor((progress / duration) * this.target);
                             window.requestAnimationFrame(step);
                         } else {
                             this.count = this.target;
                         }
                     };
                     const observer = new IntersectionObserver((entries) => {
                         if (entries[0].isIntersecting) {
                             window.requestAnimationFrame(step);
                             observer.disconnect();
                         }
                     });
                     observer.observe($el);
                 }}"
                 data-aos="fade-up" data-aos-delay="0">
                <p class="text-4xl font-black text-bali-500"><span x-text="count">0</span>+</p>
                <p class="mt-3 text-sm font-semibold uppercase tracking-[0.35em] text-slate-500">Piscines Complétées</p>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-4xl font-black text-bali-500">PRO</p>
                <p class="mt-3 text-sm font-semibold uppercase tracking-[0.35em] text-slate-500">Expertise Marrakech</p>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                <p class="text-4xl font-black text-bali-500">7/7</p>
                <p class="mt-3 text-sm font-semibold uppercase tracking-[0.35em] text-slate-500">Disponibilité</p>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 text-center"
                 x-data="{ count: 0, target: 100, init() {
                     let start = null;
                     const step = (timestamp) => {
                         if (!start) start = timestamp;
                         const progress = timestamp - start;
                         const duration = 1500;
                         if (progress < duration) {
                             this.count = Math.floor((progress / duration) * this.target);
                             window.requestAnimationFrame(step);
                         } else {
                             this.count = this.target;
                         }
                     };
                     const observer = new IntersectionObserver((entries) => {
                         if (entries[0].isIntersecting) {
                             window.requestAnimationFrame(step);
                             observer.disconnect();
                         }
                     });
                     observer.observe($el);
                 }}"
                 data-aos="fade-up" data-aos-delay="300">
                <p class="text-4xl font-black text-bali-500"><span x-text="count">0</span>%</p>
                <p class="mt-3 text-sm font-semibold uppercase tracking-[0.35em] text-slate-500">Satisfaction Client</p>
            </div>

        </div>

    </div>

</section>







{{-- ═══════════════════════════════════════════════════════════════════════
     GALERIE AVANT / APRÈS
════════════════════════════════════════════════════════════════════════ --}}
<section id="realisations" class="bg-slate-900 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ── Header ── --}}
        <div class="mb-16 text-center">
            <span class="text-xs font-semibold uppercase tracking-[0.35em] text-bali-500 bg-white/5 px-4 py-2 rounded-full border border-white/10" data-aos="fade-down">Nos Réalisations</span>
            <h2 class="mt-6 text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl" data-aos="fade-in" data-aos-delay="200">Transformations Avant / Après</h2>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-400" data-aos="fade-in" data-aos-delay="300">Découvrez l'expertise Bali Bay Piscines à travers nos interventions de remise en état et d'entretien.</p>
        </div>

        {{-- ── Before / After Grid ── --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @php
                $pairs = [
                    [1, 'Clarté retrouvée : Expertise Bali Bay'],
                    [2, 'Clarté retrouvée : Expertise Bali Bay'],
                    [3, 'Clarté retrouvée : Expertise Bali Bay'],
                    [4, 'Clarté retrouvée : Expertise Bali Bay'],
                    [5, 'Clarté retrouvée : Expertise Bali Bay'],
                    [6, 'Clarté retrouvée : Expertise Bali Bay'],
                ];
            @endphp

            @foreach($pairs as [$num, $caption])
            <div class="group bg-slate-950/30 border border-white/5 rounded-3xl p-5 shadow-xl shadow-slate-950/30 flex flex-col justify-between transition hover:border-bali-500/20">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    {{-- AVANT --}}
                    <div x-data="{ zoom: false, lensX: 0, lensY: 0, bgPosX: 0, bgPosY: 0 }"
                         @mouseenter="zoom = true"
                         @mouseleave="zoom = false"
                         @mousemove="
                             lensX = $event.offsetX;
                             lensY = $event.offsetY;
                             bgPosX = ($event.offsetX / $el.offsetWidth) * 100;
                             bgPosY = ($event.offsetY / $el.offsetHeight) * 100;
                         "
                         data-aos="fade-right" data-aos-delay="{{ $loop->iteration * 100 }}"
                         class="relative w-full aspect-video overflow-hidden rounded-2xl shadow-md border border-slate-700 bg-slate-900 flex items-center justify-center cursor-crosshair">
                        <img
                            src="{{ asset('images/gallery/before_' . $num . '.png') }}"
                            alt="Avant - {{ $caption }}"
                            class="h-full w-full object-contain"
                            style="image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 left-3 bg-rose-600/90 backdrop-blur-sm text-white text-[10px] font-bold uppercase tracking-[0.2em] px-2.5 py-1 rounded-full shadow z-10 pointer-events-none">Avant</span>
                        
                        {{-- LENS --}}
                        <div x-show="zoom"
                             class="absolute pointer-events-none rounded-full border border-white/50 shadow-[0_20px_50px_rgba(0,0,0,0.5)] z-20 backdrop-blur-sm"
                             style="width: 120px; height: 120px; transform: translate(-50%, -50%);"
                             :style="`
                                left: ${lensX}px; top: ${lensY}px;
                                background-image: url('{{ asset('images/gallery/before_' . $num . '.png') }}');
                                background-size: ${$el.offsetWidth * 2}px ${$el.offsetHeight * 2}px;
                                background-position: ${bgPosX}% ${bgPosY}%;
                             `">
                        </div>
                    </div>
                    {{-- APRÈS --}}
                    <div x-data="{ zoom: false, lensX: 0, lensY: 0, bgPosX: 0, bgPosY: 0 }"
                         @mouseenter="zoom = true"
                         @mouseleave="zoom = false"
                         @mousemove="
                             lensX = $event.offsetX;
                             lensY = $event.offsetY;
                             bgPosX = ($event.offsetX / $el.offsetWidth) * 100;
                             bgPosY = ($event.offsetY / $el.offsetHeight) * 100;
                         "
                         data-aos="fade-left" data-aos-delay="{{ $loop->iteration * 100 }}"
                         class="relative w-full aspect-video overflow-hidden rounded-2xl shadow-md border border-slate-700 bg-slate-900 flex items-center justify-center cursor-crosshair">
                        <img
                            src="{{ asset('images/gallery/after_' . $num . '.png') }}"
                            alt="Après - {{ $caption }}"
                            class="h-full w-full object-contain"
                            style="image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 left-3 bg-bali-500/90 backdrop-blur-sm text-white text-[10px] font-bold uppercase tracking-[0.2em] px-2.5 py-1 rounded-full shadow z-10 pointer-events-none">Après</span>
                        
                        {{-- LENS --}}
                        <div x-show="zoom"
                             class="absolute pointer-events-none rounded-full border border-white/50 shadow-[0_20px_50px_rgba(0,0,0,0.5)] z-20 backdrop-blur-sm"
                             style="width: 120px; height: 120px; transform: translate(-50%, -50%);"
                             :style="`
                                left: ${lensX}px; top: ${lensY}px;
                                background-image: url('{{ asset('images/gallery/after_' . $num . '.png') }}');
                                background-size: ${$el.offsetWidth * 2}px ${$el.offsetHeight * 2}px;
                                background-position: ${bgPosX}% ${bgPosY}%;
                             `">
                        </div>
                    </div>
                </div>
                {{-- Caption --}}
                <p class="mt-4 text-center text-xs font-semibold text-slate-400 tracking-wide">✦ {{ $caption }}</p>
            </div>
            @endforeach
        </div>

        {{-- ── WhatsApp CTA ── --}}
        <div class="mt-14 flex flex-col sm:flex-row items-center justify-between gap-6 rounded-[2rem] border border-emerald-500/20 bg-emerald-500/5 px-8 py-7" data-aos="zoom-in">
            <div>
                <p class="font-bold text-white text-lg">Votre piscine mérite ce traitement ?</p>
                <p class="text-sm text-slate-400 mt-1">Contactez-nous dès maintenant pour planifier votre intervention.</p>
            </div>
            <a href="https://wa.me/{{ config('services.whatsapp.phone', '212600000000') }}?text={{ rawurlencode('Bonjour, je souhaite demander une intervention pour ma piscine à Marrakech.') }}"
               target="_blank"
               rel="noopener noreferrer"
               class="flex-shrink-0 inline-flex items-center gap-3 rounded-full bg-emerald-500 px-8 py-4 text-sm font-bold text-white shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-600 active:scale-[0.98]">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                </svg>
                Demandez votre intervention dès maintenant
            </a>
        </div>

    </div>
</section>



<section id="boutique" class="bg-slate-950 py-24 text-white" data-aos="fade-up">

@include('partials.boutique')

</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     SECTION TÉMOIGNAGES ("Ce que disent nos clients")
     AOS: fade-up
     Theme: bg-slate-50 (contrast clear layout)
     Premium Cards: White, high-end styling, Outfit text, Playfair Display titles
     Interactive/vibrant design with stars, custom initial icons, and Marrakech vibes
════════════════════════════════════════════════════════════════════════ --}}
<section id="temoignages" class="bg-slate-50 py-24 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="mb-16 text-center" data-aos="fade-down">
            <span class="text-xs font-semibold uppercase tracking-[0.35em] text-bali-500 bg-bali-500/10 px-4 py-2 rounded-full border border-bali-500/20">Avis Clients</span>
            <h2 class="mt-6 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">Ce que disent nos clients</h2>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-500">Découvrez les retours d'expérience de propriétaires de riads et de villas d'exception à Marrakech.</p>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            {{-- Testimonial 1 --}}
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-100/50 flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
                <div class="space-y-6">
                    {{-- Star Rating --}}
                    <div class="flex items-center gap-1 text-amber-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                        @endfor
                    </div>
                    
                    {{-- Quote Text --}}
                    <blockquote class="text-base text-slate-600 leading-relaxed italic">
                        "Service d'entretien absolument impeccable pour notre riad dans la Médina. L'eau n'a jamais été aussi cristalline. Une équipe professionnelle, discrète et très réactive à la moindre demande."
                    </blockquote>
                </div>

                {{-- Client Info --}}
                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-100">
                    <div class="w-12 h-12 rounded-full bg-bali-500/10 flex items-center justify-center text-bali-500 font-extrabold text-lg">
                        YB
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Yassine B.</p>
                        <p class="text-xs font-semibold uppercase tracking-wider text-bali-500 mt-0.5">Riad Médina</p>
                    </div>
                </div>
            </div>

            {{-- Testimonial 2 --}}
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-100/50 flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
                <div class="space-y-6">
                    {{-- Star Rating --}}
                    <div class="flex items-center gap-1 text-amber-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                        @endfor
                    </div>
                    
                    {{-- Quote Text --}}
                    <blockquote class="text-base text-slate-600 leading-relaxed italic">
                        "Nous avons confié la rénovation complète de notre bassin de la Palmeraie à Bali Bay. Le résultat dépasse toutes nos attentes. Le système de filtration moderne fonctionne à merveille et le revêtement est somptueux."
                    </blockquote>
                </div>

                {{-- Client Info --}}
                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-100">
                    <div class="w-12 h-12 rounded-full bg-bali-500/10 flex items-center justify-center text-bali-500 font-extrabold text-lg">
                        SL
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Sarah L.</p>
                        <p class="text-xs font-semibold uppercase tracking-wider text-bali-500 mt-0.5">Villa Palmeraie</p>
                    </div>
                </div>
            </div>

            {{-- Testimonial 3 --}}
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-100/50 flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
                <div class="space-y-6">
                    {{-- Star Rating --}}
                    <div class="flex items-center gap-1 text-amber-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                        @endfor
                    </div>
                    
                    {{-- Quote Text --}}
                    <blockquote class="text-base text-slate-600 leading-relaxed italic">
                        "Le suivi hebdomadaire et le professionnalisme des techniciens nous apportent une tranquillité d'esprit totale. Nos invités à la villa de l'Hivernage adorent la clarté et la douceur de l'eau."
                    </blockquote>
                </div>

                {{-- Client Info --}}
                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-100">
                    <div class="w-12 h-12 rounded-full bg-bali-500/10 flex items-center justify-center text-bali-500 font-extrabold text-lg">
                        MD
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Marc D.</p>
                        <p class="text-xs font-semibold uppercase tracking-wider text-bali-500 mt-0.5">Villa Hivernage</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     SECTION FAQ (Accordéon interactif Alpine.js)
     Theme: bg-white (clean layout breathing room)
     Alpine.js x-data="{ active: null }" for smooth collapse/expand
════════════════════════════════════════════════════════════════════════ --}}
<section id="faq" class="bg-white py-24 border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="mb-16 text-center" data-aos="fade-down">
            <span class="text-xs font-semibold uppercase tracking-[0.35em] text-bali-500 bg-bali-500/10 px-4 py-2 rounded-full border border-bali-500/20">FAQ</span>
            <h2 class="mt-6 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">Questions Fréquentes</h2>
            <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-slate-500">Trouvez rapidement des réponses aux interrogations courantes concernant nos services à Marrakech.</p>
        </div>

        {{-- Accordion Container --}}
        <div class="space-y-4" x-data="{ active: null }" data-aos="fade-up">
            
            @php
                $faqs = [
                    [
                        'q' => 'À quelle fréquence intervenez-vous pour l\'entretien ?',
                        'a' => 'Nous intervenons généralement une à deux fois par semaine selon la saison et l\'intensité d\'utilisation de votre piscine. En période estivale à Marrakech, un passage régulier est essentiel pour maintenir l\'équilibre chimique et la propreté absolue du bassin.'
                    ],
                    [
                        'q' => 'Quels produits de traitement utilisez-vous ?',
                        'a' => 'Nous utilisons exclusivement des produits professionnels certifiés et haut de gamme (chlore de qualité supérieure, traitement au sel de haute pureté, régulateurs de pH, clarifiants et algicides de précision). Nos traitements sont parfaitement adaptés à la dureté de l\'eau locale pour protéger vos équipements et votre peau.'
                    ],
                    [
                        'q' => 'Proposez-vous des contrats de maintenance annuels ?',
                        'a' => 'Oui, nous proposons des formules d\'abonnement mensuelles et annuelles transparentes et sans engagement à long terme. Nos forfaits comprennent le nettoyage complet du bassin, l\'analyse chimique rigoureuse de l\'eau, le nettoyage des filtres et la vérification préventive de vos équipements.'
                    ],
                    [
                        'q' => 'En combien de temps pouvez-vous intervenir en cas d\'urgence ?',
                        'a' => 'Pour nos clients sous contrat de maintenance, nous garantissons un déplacement technique d\'urgence en moins de 24 heures à Marrakech pour tout dysfonctionnement critique (panne de filtration, fuite apparente ou eau qui commence à tourner).'
                    ]
                ];
            @endphp

            @foreach($faqs as $i => $faq)
            <div class="border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300"
                 :class="active === {{ $i }} ? 'border-bali-500 shadow-md shadow-bali-500/5 bg-slate-50/50' : 'hover:border-slate-300 bg-white'">
                
                {{-- Header --}}
                <button type="button"
                        @click="active = active === {{ $i }} ? null : {{ $i }}"
                        class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left font-bold text-slate-800 text-base md:text-lg focus:outline-none select-none">
                    <span>{{ $faq['q'] }}</span>
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 transition duration-300"
                          :class="active === {{ $i }} ? 'rotate-180 bg-bali-500 text-white' : ''">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>
                
                {{-- Panel Content --}}
                <div x-show="active === {{ $i }}"
                     x-transition
                     x-cloak
                     class="px-6 pb-6 text-sm md:text-base text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                    {{ $faq['a'] }}
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     SECTION CONTACT FORM ("Discutons de votre projet")
     AOS: fade-up
     Theme: bg-slate-900 (luxury dark style)
════════════════════════════════════════════════════════════════════════ --}}
<section id="contact-section" class="bg-slate-900 py-24 text-white border-t border-slate-800/80 relative overflow-hidden">
    {{-- Glow decorations --}}
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-bali-500/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-sky-400/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            {{-- Column 1: Info --}}
            <div class="lg:col-span-5 space-y-8" data-aos="fade-right">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-[0.35em] text-bali-500 bg-white/5 px-4 py-2 rounded-full border border-white/10">Contact</span>
                    <h2 class="mt-6 text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl">Discutons de votre projet d'exception</h2>
                    <p class="mt-4 text-slate-400 text-sm leading-relaxed">
                        Que ce soit pour la construction d'un bassin sur-mesure à Marrakech, la rénovation complète d'une piscine de villa, ou un contrat d'entretien de prestige, nos experts sont à votre disposition.
                    </p>
                </div>

                {{-- Contact detail cards --}}
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10">
                        <div class="w-10 h-10 rounded-xl bg-bali-500/10 border border-bali-500/20 flex items-center justify-center text-bali-500 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.387a12.035 12.035 0 01-7.108-7.108c-.145-.44.02-.927.396-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Téléphone direct</p>
                            <a href="tel:+212606969351" class="text-white hover:text-bali-500 font-semibold transition text-sm mt-0.5 inline-block">06 06 96 93 51</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 2C6.48 2 2 6.48 2 12a9.9 9.9 0 0 0 1.54 5.39L2 22l4.83-1.39A9.9 9.9 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">WhatsApp Express</p>
                            <a href="https://wa.me/212709276985" target="_blank" rel="noopener noreferrer" class="text-white hover:text-emerald-400 font-semibold transition text-sm mt-0.5 inline-block">07 09 27 69 85</a>
                        </div>
                    </div>
                </div>

                {{-- Copywriting badges --}}
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/5">
                    <div>
                        <p class="text-lg font-black text-white">Marrakech</p>
                        <p class="text-xs text-slate-500 font-semibold mt-0.5">Zone d'intervention exclusive</p>
                    </div>
                    <div>
                        <p class="text-lg font-black text-white">Gratuit</p>
                        <p class="text-xs text-slate-500 font-semibold mt-0.5">Devis & déplacement d'étude</p>
                    </div>
                </div>
            </div>

            {{-- Column 2: Form --}}
            <div class="lg:col-span-7" data-aos="fade-left">
                <div class="p-8 sm:p-10 bg-white/5 border border-white/10 rounded-3xl shadow-2xl backdrop-blur-md">
                    @if(session('success'))
                    <div class="mb-6 p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm font-semibold flex items-center gap-3">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="mb-6 p-4 rounded-2xl bg-rose-500/10 border border-rose-500/30 text-rose-400 text-sm font-semibold">
                        <div class="flex items-center gap-3 mb-2">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span>Veuillez corriger les erreurs suivantes :</span>
                        </div>
                        <ul class="list-disc pl-5 space-y-1 text-xs text-rose-300">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            {{-- Nom --}}
                            <div>
                                <label for="nom" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Nom Complet</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500 pointer-events-none">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </span>
                                    <input type="text" name="nom" id="nom" required value="{{ old('nom') }}"
                                           class="w-full pl-11 pr-4 py-3.5 bg-slate-950/50 border border-slate-800 rounded-2xl text-slate-100 placeholder-slate-500 focus:outline-none focus:border-bali-500 focus:ring-1 focus:ring-bali-500 transition text-sm"
                                           placeholder="Ex: Jean Dupont">
                                </div>
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Adresse Email</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500 pointer-events-none">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                        </svg>
                                    </span>
                                    <input type="email" name="email" id="email" required value="{{ old('email') }}"
                                           class="w-full pl-11 pr-4 py-3.5 bg-slate-950/50 border border-slate-800 rounded-2xl text-slate-100 placeholder-slate-500 focus:outline-none focus:border-bali-500 focus:ring-1 focus:ring-bali-500 transition text-sm"
                                           placeholder="Ex: jean.dupont@exemple.com">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            {{-- Téléphone --}}
                            <div>
                                <label for="telephone" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Téléphone (Maroc)</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500 pointer-events-none">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.387a12.035 12.035 0 01-7.108-7.108c-.145-.44.02-.927.396-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                        </svg>
                                    </span>
                                    <input type="tel" name="telephone" id="telephone" required value="{{ old('telephone') }}"
                                           class="w-full pl-11 pr-4 py-3.5 bg-slate-950/50 border border-slate-800 rounded-2xl text-slate-100 placeholder-slate-500 focus:outline-none focus:border-bali-500 focus:ring-1 focus:ring-bali-500 transition text-sm"
                                           placeholder="Ex: 0612345678">
                                </div>
                            </div>

                            {{-- Produit --}}
                            <div>
                                <label for="produit" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Intérêt principal (optionnel)</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500 pointer-events-none">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.125a3.75 3.75 0 01-3.74 3.518H8.116a3.75 3.75 0 01-3.74-3.518L3.75 7.5m16.5 0a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25m16.5 0V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v1.5m6.5 3h3" />
                                        </svg>
                                    </span>
                                    <select name="produit" id="produit"
                                            class="w-full pl-11 pr-10 py-3.5 bg-slate-950/50 border border-slate-800 rounded-2xl text-slate-300 focus:outline-none focus:border-bali-500 focus:ring-1 focus:ring-bali-500 transition text-sm appearance-none cursor-pointer">
                                        <option value="">Choisir un produit d'intérêt</option>
                                        @if(isset($products))
                                            @foreach($products as $p)
                                                <option value="{{ $p->name }}" {{ old('produit') == $p->name ? 'selected' : '' }}>{{ $p->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-500 pointer-events-none">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Message / Détails du projet</label>
                            <textarea name="message" id="message" required rows="5"
                                      class="w-full px-4 py-3.5 bg-slate-950/50 border border-slate-800 rounded-2xl text-slate-100 placeholder-slate-500 focus:outline-none focus:border-bali-500 focus:ring-1 focus:ring-bali-500 transition text-sm resize-none"
                                      placeholder="Décrivez ici votre demande, votre type de bassin, vos besoins en entretien ou tout autre projet d'eau d'exception... (min. 10 caractères)">{{ old('message') }}</textarea>
                        </div>

                        {{-- Micro-copy réassurance + Button --}}
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                            <span class="text-xs text-slate-400 flex items-center gap-1.5 order-2 sm:order-1">
                                <svg class="w-4 h-4 text-bali-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Données privées protégées • Réponse garantie sous 24h
                            </span>
                            <button type="submit"
                                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-bali-500 to-sky-400 px-8 py-4 text-sm font-bold text-white shadow-lg shadow-bali-500/20 transition hover:from-bali-600 hover:to-sky-500 active:scale-[0.98] order-1 sm:order-2">
                                <span>Envoyer la Demande</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection

