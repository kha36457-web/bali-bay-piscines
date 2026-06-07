@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

{{-- Page Header --}}
<div class="mb-8">
    <h1 class="text-2xl font-black text-slate-900 tracking-tight">Dashboard</h1>
    <p class="text-sm text-slate-500 mt-1">Vue d'ensemble de votre activité Bali Bay Piscines</p>
</div>

{{-- Stats Cards --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

    {{-- Total Messages --}}
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md transition">
        <div class="flex items-center justify-between mb-4">
            <div class="w-11 h-11 rounded-xl bg-sky-500/10 flex items-center justify-center">
                <svg class="w-6 h-6 text-sky-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
            </div>
        </div>
        <p class="text-3xl font-black text-slate-900">{{ $totalMessages }}</p>
        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mt-1">Total Messages</p>
    </div>

    {{-- New Messages --}}
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md transition">
        <div class="flex items-center justify-between mb-4">
            <div class="w-11 h-11 rounded-xl bg-amber-500/10 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
            </div>
            @if($newMessages > 0)
                <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full animate-pulse">{{ $newMessages }} nouveau{{ $newMessages > 1 ? 'x' : '' }}</span>
            @endif
        </div>
        <p class="text-3xl font-black text-slate-900">{{ $newMessages }}</p>
        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mt-1">Non Traités</p>
    </div>

    {{-- Treated Messages --}}
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md transition">
        <div class="flex items-center justify-between mb-4">
            <div class="w-11 h-11 rounded-xl bg-emerald-500/10 flex items-center justify-center">
                <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <p class="text-3xl font-black text-slate-900">{{ $treatedMessages }}</p>
        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mt-1">Traités</p>
    </div>

    {{-- Visitor Counter --}}
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md transition">
        <div class="flex items-center justify-between mb-4">
            <div class="w-11 h-11 rounded-xl bg-violet-500/10 flex items-center justify-center">
                <svg class="w-6 h-6 text-violet-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
            </div>
        </div>
        <p class="text-3xl font-black text-slate-900">{{ number_format($visitorCount, 0, ',', ' ') }}</p>
        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mt-1">Visiteurs</p>
    </div>

</div>

{{-- Recent Messages --}}
<div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="flex items-center justify-between px-6 py-5 border-b border-slate-100">
        <div>
            <h2 class="text-lg font-bold text-slate-900">Messages récents</h2>
            <p class="text-xs text-slate-500 mt-0.5">Les 5 derniers messages reçus</p>
        </div>
        <a href="{{ route('admin.messages.index') }}" class="text-xs font-semibold text-sky-500 hover:text-sky-600 transition">
            Voir tout →
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50/50 text-slate-500 font-semibold uppercase tracking-wider text-xs border-b border-slate-100">
                <tr>
                    <th class="px-6 py-3">Nom</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Statut</th>
                    <th class="px-6 py-3">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($recentMessages as $msg)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-6 py-4 font-semibold text-slate-800 whitespace-nowrap">{{ $msg->nom }}</td>
                        <td class="px-6 py-4 text-slate-500">{{ $msg->email }}</td>
                        <td class="px-6 py-4">
                            @if($msg->statut === 'nouveau')
                                <span class="inline-flex items-center gap-1 bg-amber-50 text-amber-600 text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full border border-amber-200">
                                    <span class="w-1.5 h-1.5 bg-amber-500 rounded-full"></span>
                                    Nouveau
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-600 text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full border border-emerald-200">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                    Traité
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-xs text-slate-400 whitespace-nowrap">{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-slate-400">Aucun message reçu pour le moment.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
