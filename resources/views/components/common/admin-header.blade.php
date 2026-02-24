<div class="w-full bg-[#020617]/50 backdrop-blur-xl border-b border-white/5 py-4 px-8 flex justify-between items-center relative overflow-hidden">
    
    <div class="flex flex-col gap-1">
        <div class="flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">
            <span class="hover:text-cyan-400 cursor-pointer transition-colors">Core</span>
            <span class="mx-3 text-slate-700">/</span>
            <span class="text-white">Dashboard</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_8px_#22d3ee] animate-pulse"></span>
            <span class="text-[9px] font-mono text-cyan-400 uppercase tracking-widest">Node: 0x7F - Online</span>
        </div>
    </div>

    <div class="flex items-center gap-8">
        
        <div class="flex items-center gap-4 group cursor-pointer">
            <div class="text-right hidden sm:block">
                <p class="text-[10px] font-black text-white uppercase tracking-widest leading-none">Admin Operator</p>
                <p class="text-[9px] font-mono text-slate-500 mt-1">level_4_clearance</p>
            </div>
            
            <div class="relative">
                <div class="w-10 h-10 rounded-xl bg-slate-800 border border-white/10 flex items-center justify-center overflow-hidden transition-all group-hover:border-cyan-500/50">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Admin" alt="User" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-slate-950 rounded-full flex items-center justify-center">
                    <div class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></div>
                </div>
            </div>
        </div>

        <div class="h-8 w-px bg-white/10"></div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                    class="group relative flex items-center gap-2 px-5 py-2.5 bg-red-500/5 text-red-500 border border-red-500/20 rounded-xl hover:bg-red-500 hover:text-white transition-all duration-300 text-[10px] font-black uppercase tracking-[0.2em] overflow-hidden">
                <span class="absolute inset-0 w-0 bg-red-500 transition-all duration-300 group-hover:w-full -z-0"></span>
                
                <span class="relative z-10 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </span>
            </button>
        </form>
    </div>
</div>