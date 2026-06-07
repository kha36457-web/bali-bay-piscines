@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════════════════
     HERO SERVICES
═══════════════════════════════════════════════════════════ --}}
<section class="relative bg-slate-950 overflow-hidden py-28">

    {{-- Animated background glow --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full bg-sky-500/10 blur-[120px]"></div>
        <div class="absolute -bottom-32 -right-32 w-[500px] h-[500px] rounded-full bg-amber-400/8 blur-[120px]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[1px] bg-gradient-to-r from-transparent via-sky-500/30 to-transparent"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        {{-- Back button --}}
        <div class="flex justify-start mb-12" data-aos="fade-right">
            <a href="{{ url('/') }}"
               class="group inline-flex items-center gap-2.5 rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-semibold text-slate-300 backdrop-blur-sm transition duration-300 hover:border-sky-500/50 hover:bg-sky-500/10 hover:text-white">
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Retour à l'accueil
            </a>
        </div>

        <span class="inline-block rounded-full border border-amber-400/30 bg-amber-400/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-amber-400" data-aos="fade-down">
            Nos Expertises
        </span>

        <h1 class="mt-6 text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl" data-aos="fade-up" data-aos-delay="100">
            Des services <span class="bg-gradient-to-r from-sky-400 to-amber-300 bg-clip-text text-transparent">d'exception</span>
            <br>pour votre piscine
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-400" data-aos="fade-up" data-aos-delay="200">
            De l'entretien régulier à la construction sur-mesure, Bali Bay Piscines vous offre une expertise complète et un suivi premium à Marrakech.
        </p>

        {{-- Stats rapides --}}
        <div class="mt-14 grid grid-cols-2 gap-4 sm:grid-cols-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            
            {{-- 1. Services Clés --}}
            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-5 backdrop-blur-sm"
                 x-data="{ count: 0, target: 5, init() {
                     let start = null;
                     const step = (timestamp) => {
                         if (!start) start = timestamp;
                         const progress = timestamp - start;
                         const duration = 1200;
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
                 }}">
                <p class="text-2xl font-black text-sky-400"><span x-text="count">0</span></p>
                <p class="mt-1 text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Services Clés</p>
            </div>

            {{-- 2. Piscines Traitées --}}
            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-5 backdrop-blur-sm"
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
                 }}">
                <p class="text-2xl font-black text-sky-400"><span x-text="count">0</span>+</p>
                <p class="mt-1 text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Piscines Traitées</p>
            </div>

            {{-- 3. Disponibilité --}}
            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-5 backdrop-blur-sm">
                <p class="text-2xl font-black text-sky-400">7/7</p>
                <p class="mt-1 text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Disponibilité</p>
            </div>

            {{-- 4. Satisfaction --}}
            <div class="rounded-2xl border border-white/5 bg-white/5 px-4 py-5 backdrop-blur-sm"
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
                 }}">
                <p class="text-2xl font-black text-sky-400"><span x-text="count">0</span>%</p>
                <p class="mt-1 text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Satisfaction</p>
            </div>

        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     SEPARATEUR
═══════════════════════════════════════════════════════════ --}}
<div class="bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="h-px bg-gradient-to-r from-transparent via-sky-500/40 to-transparent"></div>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════
     SERVICE 1 — Entretien Technique de Précision
     Image GAUCHE | Texte DROITE
═══════════════════════════════════════════════════════════ --}}
<section id="entretien" class="bg-slate-950 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Image --}}
            <div class="relative" data-aos="fade-right">
                <div class="absolute -inset-4 rounded-3xl bg-sky-500/10 blur-2xl"></div>
                <img src="{{ asset('images/gallery/maintenance.png') }}"
                     alt="Entretien technique de précision Bali Bay Piscines"
                     class="relative w-full h-96 object-cover rounded-2xl shadow-2xl border border-white/5">
                {{-- Badge flottant --}}
                <div class="absolute -bottom-4 -right-4 flex items-center gap-2 rounded-2xl border border-sky-500/20 bg-slate-900/90 backdrop-blur-sm px-4 py-3 shadow-xl">
                    <span class="flex h-3 w-3 rounded-full bg-sky-400 animate-pulse"></span>
                    <span class="text-xs font-bold text-sky-400 uppercase tracking-widest">Intervention Pro</span>
                </div>
            </div>

            {{-- Texte --}}
            <div class="space-y-7" data-aos="fade-left" data-aos-delay="150">
                <div>
                    <span class="inline-block text-xs font-semibold uppercase tracking-[0.35em] text-sky-400 bg-sky-500/10 border border-sky-500/20 rounded-full px-4 py-1.5 mb-4">Service 01</span>
                    <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                        🔧 Entretien Technique<br>
                        <span class="text-amber-400">de Précision</span>
                    </h2>
                </div>

                <p class="text-base leading-8 text-slate-400">
                    Notre équipe intervient selon un protocole rigoureux en plusieurs étapes : inspection visuelle complète, diagnostic électronique de vos équipements (pompe, filtre, électrolyseur), vérification de l'étanchéité et test de toutes les canalisations. Chaque intervention est documentée et un rapport d'état vous est remis en fin de visite. Nous utilisons uniquement du matériel professionnel certifié pour garantir la longévité de votre installation.
                </p>

                {{-- Checklist --}}
                <ul class="space-y-3">
                    @foreach([
                        ['Diagnostic électronique complet des équipements', 'sky'],
                        ['Test de pression et étanchéité des circuits', 'sky'],
                        ['Nettoyage et rétrolavage des filtres à sable', 'sky'],
                        ['Vérification du système de chauffage', 'sky'],
                        ['Contrôle des éclairages LED subaquatiques', 'sky'],
                        ['Rapport d\'intervention détaillé remis au client', 'amber'],
                    ] as [$item, $color])
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex-shrink-0 w-5 h-5 rounded-full bg-{{ $color }}-500/15 border border-{{ $color }}-500/30 flex items-center justify-center">
                            <svg class="w-3 h-3 text-{{ $color }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-slate-300">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                {{-- CTA --}}
                <div class="flex flex-col items-center lg:items-start">
                    <a href="https://wa.me/212709276985?text={{ rawurlencode('Bonjour, je souhaite demander un devis pour le service d\'Entretien Technique de Précision.') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-sky-500 to-sky-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-sky-500/25 transition duration-300 hover:from-sky-400 hover:to-sky-500 hover:shadow-sky-400/30 hover:-translate-y-0.5 active:scale-[0.98]">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                        </svg>
                        Demander un devis pour ce service
                    </a>
                    <p class="text-xs text-slate-500 mt-2.5 flex items-center gap-1.5 leading-none">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Réponse sous 24h garantie
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     SEPARATEUR ORNEMENTAL
═══════════════════════════════════════════════════════════ --}}
<div class="bg-slate-950 py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4">
            <div class="flex-1 h-px bg-gradient-to-r from-transparent to-amber-400/20"></div>
            <span class="text-amber-400/40 text-xl">✦</span>
            <div class="flex-1 h-px bg-gradient-to-l from-transparent to-amber-400/20"></div>
        </div>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════
     SERVICE 2 — Traitement de l'Eau & Équilibre Chimique
     Texte GAUCHE | Image DROITE
═══════════════════════════════════════════════════════════ --}}
<section id="traitement-eau" class="bg-slate-900 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Texte GAUCHE --}}
            <div class="space-y-7 lg:order-1" data-aos="fade-right" data-aos-delay="150">
                <div>
                    <span class="inline-block text-xs font-semibold uppercase tracking-[0.35em] text-amber-400 bg-amber-400/10 border border-amber-400/20 rounded-full px-4 py-1.5 mb-4">Service 02</span>
                    <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                        💎 Traitement de l'Eau<br>
                        <span class="text-sky-400">&amp; Équilibre Chimique</span>
                    </h2>
                </div>

                <p class="text-base leading-8 text-slate-400">
                    Une eau cristalline n'est pas un hasard — c'est le résultat d'une chimie parfaitement maîtrisée. Nos techniciens effectuent une analyse complète des paramètres de votre eau (pH, TAC, TH, chlore libre, chlore combiné, algicides) avant de procéder à un traitement choc ciblé si nécessaire. Nous utilisons des produits professionnels certifiés, adaptés au climat marocain et à la dureté de l'eau locale, pour vous garantir une eau saine, limpide et confortable tout au long de l'année.
                </p>

                <ul class="space-y-3">
                    @foreach([
                        ['Analyse complète des paramètres (pH, TAC, TH, chlore)', 'amber'],
                        ['Traitement choc anti-algues et désinfection', 'amber'],
                        ['Régulation automatique du pH et du chlore', 'amber'],
                        ['Décloration et équilibrage naturel de l\'eau', 'amber'],
                        ['Dosage des produits anti-calcaire et floculants', 'amber'],
                        ['Suivi mensuel avec rapport de qualité d\'eau', 'sky'],
                    ] as [$item, $color])
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex-shrink-0 w-5 h-5 rounded-full bg-{{ $color }}-500/15 border border-{{ $color }}-500/30 flex items-center justify-center">
                            <svg class="w-3 h-3 text-{{ $color }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-slate-300">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="flex flex-col items-center lg:items-start">
                    <a href="https://wa.me/212709276985?text={{ rawurlencode('Bonjour, je souhaite demander un devis pour le Traitement de l\'Eau et Équilibre Chimique.') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-amber-400 to-amber-500 px-7 py-4 text-sm font-bold text-slate-900 shadow-lg shadow-amber-400/25 transition duration-300 hover:from-amber-300 hover:to-amber-400 hover:-translate-y-0.5 active:scale-[0.98]">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                        </svg>
                        Demander un devis pour ce service
                    </a>
                    <p class="text-xs text-slate-500 mt-2.5 flex items-center gap-1.5 leading-none">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Réponse sous 24h garantie
                    </p>
                </div>
            </div>

            {{-- Image DROITE --}}
            <div class="relative lg:order-2" data-aos="fade-left">
                <div class="absolute -inset-4 rounded-3xl bg-amber-400/8 blur-2xl"></div>
                <img src="{{ asset('images/gallery/Clarte.png') }}"
                     alt="Eau cristalline Bali Bay Piscines Marrakech"
                     class="relative w-full h-96 object-cover rounded-2xl shadow-2xl border border-white/5">
                <div class="absolute -bottom-4 -left-4 flex items-center gap-2 rounded-2xl border border-amber-400/20 bg-slate-900/90 backdrop-blur-sm px-4 py-3 shadow-xl">
                    <span class="text-amber-400 text-sm">💧</span>
                    <span class="text-xs font-bold text-amber-400 uppercase tracking-widest">Eau Cristalline</span>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- SEPARATEUR --}}
<div class="bg-slate-900 py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4">
            <div class="flex-1 h-px bg-gradient-to-r from-transparent to-sky-400/20"></div>
            <span class="text-sky-400/40 text-xl">✦</span>
            <div class="flex-1 h-px bg-gradient-to-l from-transparent to-sky-400/20"></div>
        </div>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════
     SERVICE 3 — Rénovation & Remise en État
     Image GAUCHE | Texte DROITE
═══════════════════════════════════════════════════════════ --}}
<section id="renovation" class="bg-slate-950 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Image GAUCHE --}}
            <div class="relative" data-aos="fade-right">
                <div class="absolute -inset-4 rounded-3xl bg-emerald-500/10 blur-2xl"></div>
                <div class="relative grid grid-cols-2 gap-3 rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/gallery/before_1.png') }}"
                         alt="Avant rénovation piscine Marrakech"
                         class="w-full h-48 object-cover">
                    <img src="{{ asset('images/gallery/after_1.png') }}"
                         alt="Après rénovation piscine Marrakech"
                         class="w-full h-48 object-cover">
                    <img src="{{ asset('images/gallery/before_2.png') }}"
                         alt="Avant remise en état"
                         class="w-full h-48 object-cover">
                    <img src="{{ asset('images/gallery/after_2.png') }}"
                         alt="Après remise en état"
                         class="w-full h-48 object-cover">
                </div>
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 flex items-center gap-3 rounded-2xl border border-emerald-500/20 bg-slate-900/90 backdrop-blur-sm px-5 py-2.5 shadow-xl">
                    <span class="text-xs font-bold text-rose-400 uppercase tracking-widest">AVANT</span>
                    <div class="w-px h-4 bg-white/20"></div>
                    <span class="text-xs font-bold text-emerald-400 uppercase tracking-widest">APRÈS ✨</span>
                </div>
            </div>

            {{-- Texte DROITE --}}
            <div class="space-y-7" data-aos="fade-left" data-aos-delay="150">
                <div>
                    <span class="inline-block text-xs font-semibold uppercase tracking-[0.35em] text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 rounded-full px-4 py-1.5 mb-4">Service 03</span>
                    <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                        🛠️ Rénovation &amp;<br>
                        <span class="text-amber-400">Remise en État</span>
                    </h2>
                </div>

                <p class="text-base leading-8 text-slate-400">
                    Votre piscine a perdu de son éclat ? Bali Bay Piscines prend en charge la réhabilitation complète de votre bassin : du traitement de la structure au remplacement des équipements défaillants. Nos artisans qualifiés interviennent sur les revêtements (liner, carrelage, enduit), réparent les fissures, remettent en état les canalisations et modernisent votre système de filtration. Chaque rénovation est réalisée avec des matériaux premium pour un résultat digne d'une piscine neuve.
                </p>

                <ul class="space-y-3">
                    @foreach([
                        ['Diagnostic structurel et détection des fissures', 'emerald'],
                        ['Remplacement du liner ou retrait carrelage', 'emerald'],
                        ['Réfection de l\'étanchéité et traitement anti-humidité', 'emerald'],
                        ['Modernisation du système de filtration', 'emerald'],
                        ['Réparation ou remplacement de la pompe', 'emerald'],
                        ['Peinture ou époxy spécial piscine', 'amber'],
                    ] as [$item, $color])
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex-shrink-0 w-5 h-5 rounded-full bg-{{ $color }}-500/15 border border-{{ $color }}-500/30 flex items-center justify-center">
                            <svg class="w-3 h-3 text-{{ $color }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-slate-300">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="flex flex-col items-center lg:items-start">
                    <a href="https://wa.me/212709276985?text={{ rawurlencode('Bonjour, je souhaite demander un devis pour la Rénovation et Remise en État de ma piscine.') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-emerald-500 to-emerald-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-emerald-500/25 transition duration-300 hover:from-emerald-400 hover:to-emerald-500 hover:-translate-y-0.5 active:scale-[0.98]">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                        </svg>
                        Demander un devis pour ce service
                    </a>
                    <p class="text-xs text-slate-500 mt-2.5 flex items-center gap-1.5 leading-none">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Réponse sous 24h garantie
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- SEPARATEUR --}}
<div class="bg-slate-950 py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4">
            <div class="flex-1 h-px bg-gradient-to-r from-transparent to-amber-400/20"></div>
            <span class="text-amber-400/40 text-xl">✦</span>
            <div class="flex-1 h-px bg-gradient-to-l from-transparent to-amber-400/20"></div>
        </div>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════
     SERVICE 4 — Construction sur-mesure
     Texte GAUCHE | Image DROITE
═══════════════════════════════════════════════════════════ --}}
<section id="construction" class="bg-slate-900 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Texte GAUCHE --}}
            <div class="space-y-7 lg:order-1" data-aos="fade-right" data-aos-delay="150">
                <div>
                    <span class="inline-block text-xs font-semibold uppercase tracking-[0.35em] text-violet-400 bg-violet-500/10 border border-violet-500/20 rounded-full px-4 py-1.5 mb-4">Service 04</span>
                    <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                        🏗️ Construction<br>
                        <span class="text-sky-400">de Piscines sur-Mesure</span>
                    </h2>
                </div>

                <p class="text-base leading-8 text-slate-400">
                    Donnez vie à votre vision avec une piscine entièrement conçue selon vos désirs et votre espace. Du premier croquis à la mise en eau, Bali Bay Piscines pilote chaque étape du projet : études techniques, terrassement, ferraillage, béton projeté, finitions et installations électriques et hydrauliques. Nous concevons des bassins de toutes formes et de toutes tailles, qu'il s'agisse d'une piscine à débordement, d'un couloir de nage ou d'un spa intégré pour villa ou riad à Marrakech.
                </p>

                <ul class="space-y-3">
                    @foreach([
                        ['Étude de faisabilité et plans 3D personnalisés', 'violet'],
                        ['Terrassement et fondations béton armé', 'violet'],
                        ['Pose du revêtement (liner, carrelage, pebble)', 'violet'],
                        ['Installation hydraulique et filtration haut de gamme', 'violet'],
                        ['Éclairage LED RGB submersible', 'violet'],
                        ['Mise en eau et réglage des paramètres initiaux', 'amber'],
                    ] as [$item, $color])
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex-shrink-0 w-5 h-5 rounded-full bg-{{ $color }}-500/15 border border-{{ $color }}-500/30 flex items-center justify-center">
                            <svg class="w-3 h-3 text-{{ $color }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-slate-300">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="flex flex-col items-center lg:items-start">
                    <a href="https://wa.me/212709276985?text={{ rawurlencode('Bonjour, je souhaite demander un devis pour la Construction d\'une piscine sur-mesure.') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-violet-500 to-violet-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-violet-500/25 transition duration-300 hover:from-violet-400 hover:to-violet-500 hover:-translate-y-0.5 active:scale-[0.98]">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                        </svg>
                        Demander un devis pour ce service
                    </a>
                    <p class="text-xs text-slate-500 mt-2.5 flex items-center gap-1.5 leading-none">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Réponse sous 24h garantie
                    </p>
                </div>
            </div>

            {{-- Image DROITE --}}
            <div class="relative lg:order-2" data-aos="fade-left">
                <div class="absolute -inset-4 rounded-3xl bg-violet-500/10 blur-2xl"></div>
                <img src="{{ asset('images/gallery/after_3.png') }}"
                     alt="Construction piscine sur-mesure Marrakech"
                     class="relative w-full h-96 object-cover rounded-2xl shadow-2xl border border-white/5">
                <div class="absolute -bottom-4 -right-4 flex items-center gap-2 rounded-2xl border border-violet-500/20 bg-slate-900/90 backdrop-blur-sm px-4 py-3 shadow-xl">
                    <span class="text-violet-400 text-sm">🏗️</span>
                    <span class="text-xs font-bold text-violet-400 uppercase tracking-widest">Sur-Mesure</span>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- SEPARATEUR --}}
<div class="bg-slate-900 py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4">
            <div class="flex-1 h-px bg-gradient-to-r from-transparent to-sky-400/20"></div>
            <span class="text-sky-400/40 text-xl">✦</span>
            <div class="flex-1 h-px bg-gradient-to-l from-transparent to-sky-400/20"></div>
        </div>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════
     SERVICE 5 — Hivernage & Remise en Route
     Image GAUCHE | Texte DROITE
═══════════════════════════════════════════════════════════ --}}
<section id="hivernage" class="bg-slate-950 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Image GAUCHE --}}
            <div class="relative" data-aos="fade-right">
                <div class="absolute -inset-4 rounded-3xl bg-cyan-500/10 blur-2xl"></div>
                <img src="{{ asset('images/gallery/after_4.png') }}"
                     alt="Hivernage et remise en route piscine"
                     class="relative w-full h-96 object-cover rounded-2xl shadow-2xl border border-white/5">
                <div class="absolute -bottom-4 -right-4 flex items-center gap-2 rounded-2xl border border-cyan-500/20 bg-slate-900/90 backdrop-blur-sm px-4 py-3 shadow-xl">
                    <span class="text-cyan-400 text-sm">❄️</span>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest">Hivernage Pro</span>
                </div>
            </div>

            {{-- Texte DROITE --}}
            <div class="space-y-7" data-aos="fade-left" data-aos-delay="150">
                <div>
                    <span class="inline-block text-xs font-semibold uppercase tracking-[0.35em] text-cyan-400 bg-cyan-500/10 border border-cyan-500/20 rounded-full px-4 py-1.5 mb-4">Service 05</span>
                    <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                        ❄️ Hivernage &amp;<br>
                        <span class="text-amber-400">Remise en Route</span>
                    </h2>
                </div>

                <p class="text-base leading-8 text-slate-400">
                    La protection hivernale de votre piscine est une étape cruciale pour éviter les dégâts liés aux basses températures nocturnes de Marrakech et aux variations climatiques. Bali Bay Piscines assure la vidange partielle, le traitement anti-algues de fond, la protection des canalisations contre le gel, et la pose de bâche ou coupole de protection. En période de remise en route, nous procédons à un redémarrage complet, contrôlons tous les équipements et rétablissons l'équilibre chimique pour une saison de baignade optimale.
                </p>

                <ul class="space-y-3">
                    @foreach([
                        ['Vidange partielle et nettoyage du fond', 'cyan'],
                        ['Traitement anti-algues et anti-bactérien hivernal', 'cyan'],
                        ['Protection des canalisations et purge hydraulique', 'cyan'],
                        ['Pose de bâche ou couverture de protection', 'cyan'],
                        ['Remise en route et vérification équipements au printemps', 'cyan'],
                        ['Rétablissement de l\'équilibre chimique complet', 'amber'],
                    ] as [$item, $color])
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex-shrink-0 w-5 h-5 rounded-full bg-{{ $color }}-500/15 border border-{{ $color }}-500/30 flex items-center justify-center">
                            <svg class="w-3 h-3 text-{{ $color }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-sm font-medium text-slate-300">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="flex flex-col items-center lg:items-start">
                    <a href="https://wa.me/212709276985?text={{ rawurlencode('Bonjour, je souhaite demander un devis pour le service d\'Hivernage et Remise en Route.') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-cyan-500 to-cyan-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-cyan-500/25 transition duration-300 hover:from-cyan-400 hover:to-cyan-500 hover:-translate-y-0.5 active:scale-[0.98]">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                        </svg>
                        Demander un devis pour ce service
                    </a>
                    <p class="text-xs text-slate-500 mt-2.5 flex items-center gap-1.5 leading-none">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Réponse sous 24h garantie
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     CTA FINAL — Bande de Contact
═══════════════════════════════════════════════════════════ --}}
<section class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 py-24">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <div class="relative rounded-[2.5rem] border border-white/10 bg-white/5 p-12 backdrop-blur-sm overflow-hidden" data-aos="zoom-in">

            {{-- Glow background --}}
            <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-sky-500/15 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 -left-20 w-64 h-64 rounded-full bg-amber-400/10 blur-3xl pointer-events-none"></div>

            <span class="relative inline-block text-xs font-semibold uppercase tracking-[0.35em] text-amber-400 bg-amber-400/10 border border-amber-400/20 rounded-full px-4 py-2 mb-6">
                Votre projet nous intéresse
            </span>

            <h2 class="relative text-3xl font-black tracking-tight text-white sm:text-4xl mb-4">
                Prêt à transformer votre piscine ?
            </h2>
            <p class="relative mx-auto max-w-xl text-slate-400 mb-10 leading-7">
                Contactez-nous dès maintenant pour un devis gratuit et personnalisé. Notre équipe est disponible 7j/7 pour vous accompagner à Marrakech.
            </p>

            <div class="relative flex flex-col sm:flex-row items-center justify-center gap-4">
                <div class="flex flex-col items-center">
                    <a href="https://wa.me/212709276985?text={{ rawurlencode('Bonjour, je souhaite un devis pour ma piscine à Marrakech.') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-3 rounded-full bg-emerald-500 px-8 py-4 text-sm font-bold text-white shadow-lg shadow-emerald-500/30 transition hover:bg-emerald-400 hover:-translate-y-0.5">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                        </svg>
                        WhatsApp — Devis Gratuit
                    </a>
                    <p class="text-xs text-slate-500 mt-2.5 flex items-center gap-1.5 leading-none">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Réponse sous 24h garantie
                    </p>
                </div>
                <a href="tel:+212606969351"
                   class="inline-flex items-center gap-3 rounded-full border border-white/15 bg-white/5 px-8 py-4 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/10 hover:-translate-y-0.5">
                    <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    06 06 96 93 51
                </a>
                <a href="{{ url('/') }}"
                   class="inline-flex items-center gap-2 rounded-full border border-amber-400/20 bg-amber-400/10 px-8 py-4 text-sm font-bold text-amber-400 transition hover:bg-amber-400/20 hover:-translate-y-0.5">
                    ← Retour à l'accueil
                </a>
            </div>

        </div>
    </div>
</section>

@endsection
