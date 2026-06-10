<footer id="footer" class="bg-slate-950 border-t border-white/10 py-16 text-slate-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pb-12 border-b border-white/10">
            
            {{-- Column 1: Brand & Desc --}}
            <div class="space-y-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl font-black tracking-wider text-white font-serif">Bali Bay</span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-bali-500 bg-bali-500/10 px-2.5 py-1 rounded-full border border-bali-500/20">Piscines</span>
                </div>
                <p class="text-sm leading-relaxed max-w-sm text-slate-400">
                    Conception, construction et entretien de piscines d'exception à Marrakech. Profitez d'un savoir-faire de luxe pour vos espaces de baignade.
                </p>
                {{-- Social Icons --}}
                <div class="flex items-center gap-4 pt-2">
                    <a href="https://www.instagram.com/balibaypiscine/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-slate-300 hover:text-pink-500 hover:bg-white/10 hover:border-pink-500/30 transition duration-300" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
                        </svg>
                    </a>
                    <a href="https://youtube.com/@balibypiscines" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-slate-300 hover:text-red-500 hover:bg-white/10 hover:border-red-500/30 transition duration-300" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.518 3.545 12 3.545 12 3.545s-7.518 0-9.388.507a3.003 3.003 0 0 0-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.87.507 9.388.507 9.388.507s7.518 0 9.388-.507a3.003 3.003 0 0 0 2.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Column 2: Navigation --}}
            <div class="space-y-6 md:pl-12">
                <h3 class="text-sm font-bold uppercase tracking-wider text-white">Navigation</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="/" class="hover:text-bali-500 transition duration-200">Accueil</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-bali-500 transition duration-200">Nos Services</a></li>
                    <li><a href="/#realisations" class="hover:text-bali-500 transition duration-200">Nos Réalisations</a></li>
                    <li><a href="/#boutique" class="hover:text-bali-500 transition duration-200">Boutique</a></li>
                </ul>
            </div>

            {{-- Column 3: Contact & Infos --}}
            <div class="space-y-6">
                <h3 class="text-sm font-bold uppercase tracking-wider text-white">Contact & Infos</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-center gap-3.5">
                        <svg class="w-5 h-5 text-sky-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.387a12.035 12.035 0 01-7.108-7.108c-.145-.44.02-.927.396-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <a href="tel:+212606969351" class="hover:text-sky-400 transition leading-none">06 06 96 93 51</a>
                    </li>
                    <li class="flex items-center gap-3.5">
                        <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 2C6.48 2 2 6.48 2 12a9.9 9.9 0 0 0 1.54 5.39L2 22l4.83-1.39A9.9 9.9 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2z" />
                        </svg>
                        <a href="https://wa.me/212709276985" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-400 transition leading-none">07 09 27 69 85</a>
                    </li>
                    <li class="flex items-center gap-3.5">
                        <svg class="w-5 h-5 text-bali-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:balibypiscines@gmail.com" class="hover:text-bali-400 transition break-all leading-none">balibypiscines@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-3.5">
                        <svg class="w-5 h-5 text-amber-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25s-7.5-4.108-7.5-11.25a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="leading-none">Marrakech</span>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Copyright --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-8 text-xs font-semibold uppercase tracking-wider text-slate-500">
            <div>
                &copy; {{ date('Y') }} <span class="text-slate-300">Bali Bay Piscines</span>. Tous droits réservés.
            </div>
            <div class="flex gap-4">
                <span>Marrakech</span>
                <span>•</span>
                <span>Luxe & Pureté</span>
            </div>
        </div>

    </div>
</footer>
