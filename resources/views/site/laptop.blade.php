<x-layouts.main-layout>
    <style>
        @keyframes shimmer {
            0% { transform: translateX(-150%) skewX(-15deg); }
            100% { transform: translateX(150%) skewX(-15deg); }
        }
        @keyframes float-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        .animate-shine {
            animation: shimmer 2s infinite;
        }
        /* Hide scrollbar for clean horizontal scrolling if needed */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>

    <section class="min-h-screen bg-[#030712] relative overflow-hidden pt-32 pb-24 px-6 md:px-8">
        
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-cyan-900/20 rounded-full blur-[128px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-900/20 rounded-full blur-[128px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            
            <div class="flex flex-col lg:flex-row justify-between items-end mb-20 gap-8 border-b border-white/5 pb-8">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-8 bg-cyan-500"></span>
                        <h2 class="text-xs font-mono uppercase tracking-[0.3em] text-cyan-400">The Collection</h2>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-black tracking-tighter text-white leading-[0.9]">
                        CHOOSE YOUR <br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-500">
                            WEAPON.
                        </span>
                    </h1>
                </div>

                <div class="flex space-x-1 bg-white/5 p-1 rounded-xl backdrop-blur-sm border border-white/5">
                    <button class="px-6 py-2 rounded-lg bg-white/10 text-white text-xs font-bold uppercase tracking-wider shadow-lg ring-1 ring-white/5 transition-all">
                        All
                    </button>
                    <button class="px-6 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-white/5 text-xs font-bold uppercase tracking-wider transition-all">
                        Gaming
                    </button>
                    <button class="px-6 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-white/5 text-xs font-bold uppercase tracking-wider transition-all">
                        Pro
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($laptops as $item)
                
                <div class="group relative w-full perspective-1000">
                    
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 rounded-[2rem] opacity-0 group-hover:opacity-75 blur-sm transition duration-500"></div>
                    
                    <div class="relative h-full bg-[#0a0a0a] rounded-[1.9rem] overflow-hidden border border-white/10 group-hover:border-transparent transition-colors duration-300 flex flex-col">
                        
                        <div class="relative h-64 bg-[#0F1115] overflow-hidden">
                            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
                            
                            <<img src="{{ $item->images->first()->image_url ?? '' }}" 
     alt="{{ $item->model_name }}"
     class="w-full h-48 object-cover rounded-2xl border border-white/10 group-hover:border-cyan-500/50 transition-all duration-500">
                            <div class="absolute inset-0 bg-gradient-to-tr from-white/0 via-white/20 to-white/0 skew-x-12 -translate-x-[200%] group-hover:animate-[shimmer_1.5s_infinite] pointer-events-none"></div>

                            <div class="absolute top-4 right-4 bg-black/60 backdrop-blur-md border border-white/10 px-4 py-1.5 rounded-full z-20">
                                <span class="text-cyan-400 font-bold font-mono text-sm tracking-tight">${{ $item->price }}</span>
                            </div>
                        </div>

                        <div class="p-8 flex flex-col flex-grow relative">
                            <div class="absolute top-0 left-0 right-0 h-16 bg-gradient-to-b from-[#0F1115] to-transparent pointer-events-none"></div>

                            <div class="relative z-10 flex-grow">
                                <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">{{ $item->model_name }}</h3>
                                <p class="text-sm text-slate-400 leading-relaxed line-clamp-2 mb-6 border-l-2 border-slate-700 pl-3">
                                    {{ $item->admin_notes }}
                                </p>

                                <div class="grid grid-cols-2 gap-3 mb-8">
                                    <div class="bg-white/5 rounded-lg p-2.5 border border-white/5 flex items-center gap-3 group-hover:border-cyan-500/30 transition-colors">
                                        <div class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_10px_rgba(6,182,212,0.8)]"></div>
                                        <div class="flex flex-col">
                                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Memory</span>
                                            <span class="text-xs text-slate-200 font-mono">{{ $item->memory }}GB</span>
                                        </div>
                                    </div>
                                    <div class="bg-white/5 rounded-lg p-2.5 border border-white/5 flex items-center gap-3 group-hover:border-blue-500/30 transition-colors">
                                        <div class="w-1.5 h-1.5 rounded-full bg-blue-500 shadow-[0_0_10px_rgba(59,130,246,0.8)]"></div>
                                        <div class="flex flex-col">
                                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Storage</span>
                                            <span class="text-xs text-slate-200 font-mono">{{ $item->primary_storage }}GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-white/5 flex items-center justify-between mt-auto gap-4">
                                <a href="{{ route('detail', $item->slug) }}" class="text-xs font-bold text-slate-400 uppercase tracking-widest hover:text-white transition-colors">
                                    View Specs
                                </a>
                                <button class="flex-1 bg-white text-black py-3 rounded-xl text-xs font-black uppercase tracking-widest hover:bg-cyan-400 hover:shadow-[0_0_20px_rgba(34,211,238,0.5)] transition-all duration-300 transform active:scale-95">
                                    Purchase
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
</x-layouts.main-layout>