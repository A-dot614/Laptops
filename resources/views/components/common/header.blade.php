<nav class="fixed top-0 left-0 w-full z-[100] transition-all duration-500">
    <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-cyan-500/50 to-transparent opacity-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent w-20 animate-[scan_3s_linear_infinite]"></div>
    </div>
    
    <div class="backdrop-blur-2xl bg-[#020617]/80 border-b border-white/5 py-5 px-8 md:px-12 flex justify-between items-center transition-all duration-300">
        
        <div class="relative group cursor-pointer">
            <div class="text-2xl font-black tracking-tighter text-white flex items-center gap-1">
                ZENITH<span class="text-cyan-500 animate-pulse">.</span>
            </div>
            <div class="absolute -bottom-1 left-0 w-0 h-px bg-cyan-400 group-hover:w-full transition-all duration-500 shadow-[0_0_15px_#22d3ee]"></div>
        </div>

        <div class="hidden lg:flex items-center p-1 bg-white/[0.03] border border-white/5 rounded-full backdrop-blur-md">
            @php
                $links = [
                    'home' => 'Home',
                    'about' => 'About',
                    'laptop' => 'Laptops',
                    'service' => 'Ecosystem',
                    'contact' => 'Contact'
                ];
            @endphp

            @foreach($links as $route => $label)
                <a href="{{ route($route) }}" 
                   class="relative px-6 py-2 text-[9px] uppercase tracking-[0.3em] font-black transition-all duration-500 
                   {{ request()->routeIs($route) ? 'text-white' : 'text-slate-500 hover:text-cyan-400' }} group/nav">
                    
                    <span class="relative z-10">{{ $label }}</span>
                    
                    @if(request()->routeIs($route))
                        <div class="absolute inset-0 bg-white/5 border border-white/10 rounded-full -z-0 shadow-[inset_0_0_10px_rgba(255,255,255,0.05)]"></div>
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-cyan-400 rounded-full shadow-[0_0_10px_#22d3ee]"></div>
                    @else
                        <div class="absolute inset-0 bg-white/0 group-hover/nav:bg-white/5 rounded-full -z-0 transition-all duration-500"></div>
                    @endif
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-6">
            <div class="hidden md:flex items-center gap-2">
                <a href="{{ route('login') }}" class="px-4 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 hover:text-white transition-all duration-300">
                    Login
                </a>
                <div class="h-3 w-px bg-white/10"></div>
                <a href="{{ route('register') }}" class="px-4 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 hover:text-white transition-all duration-300">
                    Join
                </a>
            </div>

            <button class="relative group overflow-hidden bg-white px-8 py-3 rounded-xl transition-all duration-500 hover:shadow-[0_0_30px_rgba(34,211,238,0.3)] active:scale-95">
                <div class="absolute inset-0 bg-cyan-400 translate-y-[101%] group-hover:translate-y-0 transition-transform duration-500 ease-out"></div>
                
                <span class="relative z-10 text-[10px] font-black uppercase tracking-[0.25em] text-black group-hover:text-black transition-colors duration-500">
                    Configure
                </span>
            </button>
            
            <button class="lg:hidden p-2 text-white hover:text-cyan-400 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>

<style>
    @keyframes scan {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(1000%); }
    }
</style>

<div class="h-[80px]"></div>