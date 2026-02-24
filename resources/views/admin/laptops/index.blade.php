<x-layouts.admin-layout>
    <div class="max-w-[1600px] mx-auto animate-in fade-in slide-in-from-bottom-4 duration-700">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <h2 class="text-xs font-black uppercase tracking-[0.4em] text-cyan-500/80 mb-2">Network Inventory</h2>
                <h1 class="text-4xl font-black text-white tracking-tighter uppercase">Fleet Management</h1>
                <p class="text-slate-500 text-sm mt-2 font-light">Monitor and configure <span class="text-white font-bold">{{ $laptops->count() }}</span> active nodes across the grid.</p>
            </div>
            
            <a href="{{ route('create') }}" class="relative group">
                <div class="absolute inset-0 bg-cyan-500/20 blur-xl group-hover:bg-cyan-500/40 transition-all"></div>
                <button class="relative flex items-center gap-3 bg-white text-black font-black text-[10px] uppercase tracking-[0.2em] px-8 py-4 rounded-2xl transition-all active:scale-95 group overflow-hidden">
                    <span class="text-lg group-hover:rotate-90 transition-transform duration-500">+</span>
                    <span>Register New Node</span>
                    <div class="absolute inset-0 bg-cyan-400 translate-y-full group-hover:translate-y-0 transition-transform duration-300 -z-10"></div>
                </button>
            </a>
        </div>

        @if(session('success'))
        <div class="mb-10 relative p-px rounded-[2rem] overflow-hidden bg-white/5 border border-emerald-500/30">
            <div class="bg-emerald-500/5 px-8 py-6 rounded-[2rem] flex items-center justify-between backdrop-blur-xl">
                <div class="flex items-center gap-6">
                    <div class="w-12 h-12 bg-emerald-500/20 rounded-2xl flex items-center justify-center border border-emerald-500/40 shadow-[0_0_20px_rgba(16,185,129,0.2)]">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Deployment Successful</h3>
                        <p class="text-white font-bold mt-1">{{ Session::get('success') }}</p>
                    </div>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="p-2 hover:bg-white/5 rounded-full transition-colors text-slate-500 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-width="2" stroke-linecap="round"/></svg>
                </button>
            </div>
        </div>
        @endif

        <div class="bg-white/[0.02] border border-white/5 rounded-[3rem] overflow-hidden backdrop-blur-sm shadow-2xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-white/[0.02] border-b border-white/5">
                            <th class="px-8 py-6 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Device Identity</th>
                            <th class="px-8 py-6 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Status</th>
                            <th class="px-8 py-6 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Processor Matrix</th>
                            <th class="px-8 py-6 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Memory</th>
                            <th class="px-8 py-6 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Market Value</th>
                            <th class="px-8 py-6 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 text-right">Node Actions</th>
                        </tr>
                    </thead>

                    @if($laptops->isNotEmpty())
                    <tbody class="divide-y divide-white/5">
                        @foreach($laptops as $laptop)
                        <tr class="hover:bg-white/[0.03] transition-all group">
                            <td class="px-8 py-6">
                                        @if($laptop->cover_image)
                                        <div class="m-1">
                                            <img src="{{ asset("storage/" . $laptop->cover_image) }}" alt="no image found" style="width: 80px;height:80px;border-radius:10px">
                                        </div>

                                        @else
                                            <div class="m-1" style="width: 80px;height:80px;background-color: #e2e8f0;border-radius:10px;display:flex;align-items:center;justify-content:center;">
                                                <span class="text-slate-500 text-xs">No Image</span >
                                        @endif
                            </td>

                            <td class="px-8 py-6">
                                @if($laptop->is_active)
                                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-emerald-500/5 text-emerald-500 text-[9px] font-black uppercase tracking-widest rounded-full border border-emerald-500/20">
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full shadow-[0_0_8px_#10b981] animate-pulse"></span>
                                        Uplink Active
                                    </div>
                                @else
                                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-slate-800/50 text-slate-500 text-[9px] font-black uppercase tracking-widest rounded-full border border-white/5">
                                        Offline
                                    </div>
                                @endif
                            </td>

                            <td class="px-8 py-6">
                                <span class="text-slate-300 text-xs font-bold font-mono tracking-tight">{{ $laptop->cpu_type }}</span>
                            </td>

                            <td class="px-8 py-6">
                                <span class="text-slate-400 text-xs font-bold">{{ $laptop->memory }}</span>
                            </td>

                            <td class="px-8 py-6">
                                <span class="text-cyan-400 text-sm font-black font-mono">
                                    ${{ number_format($laptop->price, 2) }}
                                </span>
                            </td>

                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <a href="#" class="p-3 bg-white/5 hover:bg-cyan-500 hover:text-black text-white rounded-xl transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button class="p-3 bg-white/5 hover:bg-red-500 text-white rounded-xl transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                    <tbody>
                        <tr>
                            <td colspan="6" class="px-8 py-20 text-center">
                                <p class="text-[10px] font-black uppercase tracking-[0.4em] text-slate-600">No nodes detected in current sector.</p>
                            </td>
                        </tr>
                    </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin-layout>