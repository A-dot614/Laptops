<div class="h-full flex flex-col bg-[#020617] border-r border-white/5 w-64 lg:w-72 transition-all duration-300">
    
    <div class="p-8">
        <div class="flex items-center gap-3 px-2 group cursor-pointer">
            <div class="relative">
                <div class="absolute inset-0 bg-cyan-500/20 blur-lg rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <svg class="w-8 h-8 text-cyan-500 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2v8" />
                    <path d="m4.93 10.93 1.41 1.41" />
                    <path d="M2 18h2" />
                    <path d="M20 18h2" />
                    <path d="m19.07 10.93-1.41 1.41" />
                    <path d="M22 22H2" />
                    <path d="m8 22 4-10 4 10" />
                </svg>
            </div>
            <span class="hidden lg:block font-black text-xl tracking-tighter text-white uppercase transition-colors group-hover:text-cyan-400">
                Zenith<span class="text-slate-600">.</span>OS
            </span>
        </div>
    </div>
    
    <nav class="flex-1 px-4 py-2 space-y-1 overflow-y-auto">
        <p class="px-4 py-2 text-[10px] font-black text-slate-600 uppercase tracking-[0.3em] mb-2">Main Menu</p>

        <a href="{{ route('dashboard') }}" 
           class="group flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all duration-300 relative overflow-hidden
           {{ request()->routeIs('dashboard') ? 'bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 shadow-[0_0_20px_rgba(34,211,238,0.1)]' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
            
            <svg class="w-5 h-5 {{ request()->routeIs('dashboard') ? 'text-cyan-400' : 'text-slate-500 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <rect x="3" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="14" width="7" height="7" rx="1" />
                <rect x="3" y="14" width="7" height="7" rx="1" />
            </svg>
            <span class="text-xs font-bold uppercase tracking-widest">Analytics</span>
            
            @if(request()->routeIs('dashboard'))
                <div class="absolute left-0 top-1/4 bottom-1/4 w-1 bg-cyan-500 rounded-r-full shadow-[0_0_10px_#22d3ee]"></div>
            @endif
        </a>

        <a href="{{ route('index') }}" 
           class="group flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all duration-300 relative
           {{ request()->routeIs('index') ? 'bg-cyan-500/10 text-cyan-400 border border-cyan-500/20' : 'text-slate-500 hover:bg-white/5 hover:text-white' }}">
            
            <svg class="w-5 h-5 {{ request()->routeIs('index') ? 'text-cyan-400' : 'text-slate-500 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path d="M4 6h16M4 12h16M4 18h7" />
            </svg>
            <span class="text-xs font-bold uppercase tracking-widest">Inventory</span>
        </a>

        <a href="#" class="group flex items-center gap-3 px-4 py-3.5 text-slate-500 hover:bg-white/5 hover:text-white rounded-2xl transition-all">
            <svg class="w-5 h-5 text-slate-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.1a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2Z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
            <span class="text-xs font-bold uppercase tracking-widest">System CFG</span>
        </a>
    </nav>

    <div class="p-6">
        <div class="bg-white/[0.02] border border-white/5 rounded-2xl p-4">
            <div class="flex items-center justify-between mb-2">
                <span class="text-[9px] font-black uppercase tracking-widest text-slate-500">Node Status</span>
                <span class="flex h-2 w-2 rounded-full bg-cyan-500 animate-pulse"></span>
            </div>
            <div class="h-1 w-full bg-white/10 rounded-full overflow-hidden">
                <div class="h-full bg-cyan-500 w-[85%] rounded-full shadow-[0_0_10px_#22d3ee]"></div>
            </div>
            <p class="mt-2 text-[8px] font-mono text-slate-600">Uptime: 14:22:09</p>
        </div>
    </div>
</div>