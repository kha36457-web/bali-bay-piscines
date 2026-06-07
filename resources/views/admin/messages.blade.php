@extends('admin.layout')

@section('title', 'Messages')

@section('content')

{{-- Page Header --}}
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
    <div>
        <h1 class="text-2xl font-black text-slate-900 tracking-tight">Messages de contact</h1>
        <p class="text-sm text-slate-500 mt-1">{{ $messages->count() }} message{{ $messages->count() > 1 ? 's' : '' }} reçu{{ $messages->count() > 1 ? 's' : '' }}</p>
    </div>
    {{-- Filter Pills --}}
    <div class="flex items-center gap-2" x-data="{ filter: 'all' }">
        <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-sky-500 text-white' : 'bg-white text-slate-600 hover:bg-slate-50'"
                class="px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-slate-200 transition">
            Tous
        </button>
        <button @click="filter = 'nouveau'" :class="filter === 'nouveau' ? 'bg-amber-500 text-white' : 'bg-white text-slate-600 hover:bg-slate-50'"
                class="px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-slate-200 transition">
            Nouveaux
        </button>
        <button @click="filter = 'traité'" :class="filter === 'traité' ? 'bg-emerald-500 text-white' : 'bg-white text-slate-600 hover:bg-slate-50'"
                class="px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-slate-200 transition">
            Traités
        </button>
    </div>
</div>

{{-- Messages Table --}}
<div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden" x-data="{ filter: 'all' }">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50/50 text-slate-500 font-semibold uppercase tracking-wider text-xs border-b border-slate-100">
                <tr>
                    <th class="px-6 py-4">Nom</th>
                    <th class="px-6 py-4">Contact</th>
                    <th class="px-6 py-4">Produit</th>
                    <th class="px-6 py-4">Message</th>
                    <th class="px-6 py-4">Statut</th>
                    <th class="px-6 py-4">Date</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($messages as $message)
                    <tr class="hover:bg-slate-50/50 transition group">
                        {{-- Nom --}}
                        <td class="px-6 py-5 font-semibold text-slate-800 whitespace-nowrap">
                            {{ $message->nom }}
                        </td>

                        {{-- Contact --}}
                        <td class="px-6 py-5">
                            <div class="flex flex-col space-y-1">
                                <a href="mailto:{{ $message->email }}" class="text-sky-500 hover:underline text-xs">{{ $message->email }}</a>
                                <a href="tel:{{ $message->telephone }}" class="text-slate-500 hover:text-slate-700 text-xs">{{ $message->telephone }}</a>
                            </div>
                        </td>

                        {{-- Produit --}}
                        <td class="px-6 py-5 text-slate-500 text-xs">
                            {{ $message->produit ?? '—' }}
                        </td>

                        {{-- Message --}}
                        <td class="px-6 py-5 min-w-[280px]">
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl text-xs leading-relaxed border border-slate-100">
                                {{ Str::limit($message->message, 120) }}
                            </p>
                        </td>

                        {{-- Statut --}}
                        <td class="px-6 py-5">
                            @if($message->statut === 'nouveau')
                                <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-600 text-[11px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-full border border-amber-200">
                                    <span class="w-1.5 h-1.5 bg-amber-500 rounded-full animate-pulse"></span>
                                    Nouveau
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-600 text-[11px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-full border border-emerald-200">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                    Traité
                                </span>
                            @endif
                        </td>

                        {{-- Date --}}
                        <td class="px-6 py-5 whitespace-nowrap text-xs font-medium text-slate-400">
                            {{ $message->created_at->format('d/m/Y') }}
                            <br>
                            <span class="text-slate-300">{{ $message->created_at->format('H:i') }}</span>
                        </td>

                        {{-- Actions --}}
                        <td class="px-6 py-5 text-right whitespace-nowrap">
                            <div class="flex items-center justify-end gap-2">
                                @if($message->statut === 'nouveau')
                                    <form action="{{ route('admin.messages.update', $message->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="statut" value="traité">
                                        <button type="submit" title="Marquer comme traité"
                                                class="inline-flex items-center gap-1.5 bg-emerald-50 hover:bg-emerald-100 text-emerald-600 px-3 py-1.5 rounded-lg font-semibold transition text-xs border border-emerald-200">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                            Traité
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.messages.update', $message->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="statut" value="nouveau">
                                        <button type="submit" title="Remettre comme nouveau"
                                                class="inline-flex items-center gap-1.5 bg-amber-50 hover:bg-amber-100 text-amber-600 px-3 py-1.5 rounded-lg font-semibold transition text-xs border border-amber-200">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" />
                                            </svg>
                                            Rouvrir
                                        </button>
                                    </form>
                                @endif

                                <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Supprimer"
                                            class="inline-flex items-center gap-1.5 bg-red-50 hover:bg-red-100 text-red-500 px-3 py-1.5 rounded-lg font-semibold transition text-xs border border-red-200">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <p class="font-semibold text-slate-400">Aucun message reçu pour le moment.</p>
                                <p class="text-xs text-slate-400">Les messages envoyés depuis le formulaire de contact apparaîtront ici.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
