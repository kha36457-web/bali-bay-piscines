@php
    $waPhone = config('services.whatsapp.phone', '212600000000');
    
    // Scan directory
    $directory = public_path('images/boutique');
    $files = [];
    if (is_dir($directory)) {
        // Obtenir uniquement les fichiers .png, .jpg, .jpeg
        $files = array_diff(scandir($directory), ['..', '.']);
        $files = array_filter($files, function($file) use ($directory) {
            return is_file($directory . '/' . $file) && in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg']);
        });
        $files = array_values($files); // Réindexer pour éviter les trous
    }
    
    // Function to format filename into product name
    $formatName = function($filename) {
        $name = pathinfo($filename, PATHINFO_FILENAME);
        $name = str_replace(['-', '_'], ' ', $name);
        return ucwords($name);
    };
    
    // Convertir en JSON pour JavaScript
    $filesJson = json_encode($files);
    $totalProducts = count($files);
@endphp

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    {{-- ── Header ── --}}
    <div class="mb-16 text-center">
        <span class="text-xs font-semibold uppercase tracking-[0.35em] text-bali-500 bg-white/5 px-4 py-2 rounded-full border border-white/10">Boutique</span>
        <h2 class="mt-6 text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl">Notre Matériel Professionnel</h2>
        <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-400">Des équipements haut de gamme sélectionnés avec rigueur pour une piscine parfaitement entretenue, performante et saine.</p>
    </div>

    {{-- ── Product Grid ── --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" id="products-grid">

        @forelse($files as $index => $file)

            @php
                $name    = $formatName($file);
                $img     = asset('images/boutique/' . $file);
                
                // Messages
                $msgPrix  = 'Je souhaite connaître le Prix pour le produit ' . $name;
                $msgDispo = 'Je souhaite connaître la Disponibilité pour le produit ' . $name;
                
                // Links
                $waLinkPrix  = 'https://wa.me/' . $waPhone . '?text=' . rawurlencode($msgPrix);
                $waLinkDispo = 'https://wa.me/' . $waPhone . '?text=' . rawurlencode($msgDispo);
                
                // Classe pour masquer après les 6 premiers produits
                $hideClass = $index >= 6 ? 'hidden product-item' : 'product-item';
            @endphp

            <article class="group flex flex-col rounded-2xl border border-white/10 bg-white/5 overflow-visible shadow-xl transition duration-300 hover:-translate-y-1 hover:bg-white/10 hover:border-white/20 {{ $hideClass }}" data-product-index="{{ $index }}">

                {{-- Image --}}
                <div class="relative h-52 overflow-hidden bg-slate-900 flex items-center justify-center p-4 flex-shrink-0 rounded-t-2xl">
                    <img
                        src="{{ $img }}"
                        alt="{{ $name }}"
                        class="max-h-full max-w-full object-contain transition duration-500 group-hover:scale-105"
                        loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/30 to-transparent pointer-events-none"></div>
                </div>

                {{-- Body --}}
                <div class="flex flex-col flex-grow p-5 relative z-10">
                    <h3 class="text-sm font-bold text-white mb-5 line-clamp-2 group-hover:text-bali-500 transition duration-200 leading-snug">
                        {{ $name }}
                    </h3>

                    {{-- WhatsApp Dropdown Button --}}
                    <div class="mt-auto relative dropdown-container">
                        <button onclick="toggleDropdown('{{ $index }}')"
                           class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-bali-500 px-5 py-3 text-xs font-bold text-white transition hover:bg-bali-600 shadow-md shadow-bali-500/20 active:scale-[0.97] duration-150 focus:outline-none">
                            <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                <path d="M11.99 2C6.472 2 2 6.477 2 12.01c0 1.78.47 3.44 1.285 4.887L2 22l5.318-1.267A9.948 9.948 0 0011.99 22C17.523 22 22 17.523 22 11.99 22 6.477 17.523 2 11.99 2z"/>
                            </svg>
                            Commander
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                        {{-- Dropdown Menu --}}
                        <div id="dropdown-{{ $index }}" class="dropdown-menu hidden absolute bottom-full left-0 w-full mb-2 bg-slate-800 rounded-xl border border-white/10 shadow-2xl overflow-hidden transform origin-bottom transition-all z-50">
                            <p class="px-4 py-2 text-[10px] uppercase tracking-wider text-slate-400 font-bold border-b border-white/5 bg-slate-900/50">Que souhaitez-vous demander ?</p>
                            <a href="{{ $waLinkPrix }}" target="_blank" rel="noopener noreferrer" class="block px-4 py-3 text-sm text-white hover:bg-bali-500 hover:text-white transition-colors duration-150">
                                💰 Prix
                            </a>
                            <a href="{{ $waLinkDispo }}" target="_blank" rel="noopener noreferrer" class="block px-4 py-3 text-sm text-white hover:bg-bali-500 hover:text-white transition-colors duration-150 border-t border-white/5">
                                ✅ Disponibilité
                            </a>
                        </div>
                    </div>
                </div>

            </article>

        @empty
            <div class="col-span-full py-20 text-center text-slate-500">
                <p class="text-5xl mb-4">📦</p>
                <p class="font-semibold text-lg text-slate-400">Aucun produit disponible pour le moment.</p>
                <p class="text-sm mt-2">Veuillez ajouter des images dans le dossier public/images/boutique/</p>
            </div>
        @endforelse


    </div>{{-- /grid --}}

    {{-- ── Load More Button ── --}}
    <div class="flex justify-center mt-12">
        <button id="load-more-btn"
            class="inline-flex items-center justify-center gap-2 rounded-full bg-bali-500 px-8 py-4 text-sm font-bold text-white transition hover:bg-bali-600 shadow-md shadow-bali-500/20 active:scale-[0.97] duration-150 focus:outline-none {{ $totalProducts <= 6 ? 'hidden' : '' }}"
            data-total-products="{{ $totalProducts }}"
            data-displayed="6">
            Voir plus de produits
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </button>
    </div>

</div>

<script>
    // Gestion du bouton "Voir plus"
    (function() {
        const loadMoreBtn = document.getElementById('load-more-btn');
        const grid = document.getElementById('products-grid');
        const itemsPerLoad = 6;

        function updateButtonVisibility() {
            const totalProducts = parseInt(loadMoreBtn.dataset.totalProducts);
            const displayed = parseInt(loadMoreBtn.dataset.displayed);

            if (displayed >= totalProducts) {
                loadMoreBtn.classList.add('hidden');
            } else {
                loadMoreBtn.classList.remove('hidden');
            }
        }

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const totalProducts = parseInt(this.dataset.totalProducts);
                const currentlyDisplayed = parseInt(this.dataset.displayed);
                const newCount = Math.min(currentlyDisplayed + itemsPerLoad, totalProducts);

                // Afficher les produits cachés
                const items = grid.querySelectorAll('.product-item');
                for (let i = currentlyDisplayed; i < newCount; i++) {
                    if (items[i]) {
                        items[i].classList.add('animate-fadeIn');
                        items[i].classList.remove('hidden');
                    }
                }

                // Mettre à jour le compteur
                this.dataset.displayed = newCount;

                // Mettre à jour la visibilité du bouton
                updateButtonVisibility();

                // Scroll smooth vers le bouton
                setTimeout(() => {
                    loadMoreBtn.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            });
        }
    })();

    // Gestion des dropdowns pour les produits
    function toggleDropdown(id) {
        const dropdown = document.getElementById('dropdown-' + id);
        const isHidden = dropdown.classList.contains('hidden');
        
        // Hide all other dropdowns
        document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
            menu.classList.add('hidden');
        });

        // Toggle current
        if (isHidden) {
            dropdown.classList.remove('hidden');
        }
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown-container')) {
            document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                menu.classList.add('hidden');
            });
        }
    });
</script>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.4s ease-out forwards;
    }
</style>
