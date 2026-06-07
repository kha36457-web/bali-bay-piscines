<section id="galerie" class="bg-slate-950 py-24 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-14 text-center">
            <span class="text-xs font-semibold uppercase tracking-[0.35em] text-bali-500">Boutique</span>
            <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl">Notre Matériel Professionnel</h2>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-400">Des équipements haut de gamme conçus pour une piscine parfaitement entretenue et performante.</p>
        </div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @if(isset($products) && is_array($products))
                @foreach($products as $product)
                    <article class="bg-white rounded-2xl shadow-lg p-4 border border-gray-100 hover:shadow-xl transition">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="mb-4 h-48 w-full rounded-2xl object-cover">
                        <h3 class="text-xl font-semibold text-slate-900">{{ $product['name'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600">{{ $product['description'] }}</p>
                        <button data-product-name="{{ $product['name'] }}" class="btn-commander mt-6 w-full rounded-full bg-bali-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-bali-500/90">Commander</button>
                    </article>
                @endforeach
            @else
                <!-- fallback static items if $products not provided -->
                <article class="bg-white rounded-2xl shadow-lg p-4 border border-gray-100 hover:shadow-xl transition">
                    <img src="https://via.placeholder.com/300x200?text=Pompe+de+Filtration" alt="Pompe de filtration" class="mb-4 h-48 w-full rounded-2xl object-cover">
                    <h3 class="text-xl font-semibold text-slate-900">Pompe de filtration</h3>
                    <p class="mt-2 text-sm text-slate-600">Performance maximale pour une eau cristalline et un débit maîtrisé.</p>
                    <button data-product-name="Pompe de filtration" class="btn-commander mt-6 w-full rounded-full bg-bali-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-bali-500/90">Commander</button>
                </article>
            @endif
        </div>
    </div>
</section>
