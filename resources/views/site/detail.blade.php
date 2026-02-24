<x-layouts.main-layout>
    <style>
        .product-gradient {
            background: radial-gradient(circle at 20% 30%, rgba(34, 211, 238, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 80% 70%, rgba(59, 130, 246, 0.05) 0%, transparent 50%);
        }
        .spec-line {
            background-image: radial-gradient(circle, #334155 1px, transparent 1px);
            background-size: 4px 1px;
            background-repeat: repeat-x;
            background-position: bottom;
        }
    </style>

    <section class="min-h-screen bg-[#020617] text-slate-300 pt-32 pb-24 px-6 md:px-8 product-gradient relative">
        <div class="absolute top-0 right-0 w-1/3 h-screen bg-blue-500/5 blur-[120px] -z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto">
            <div class="mb-12 animate-fade-in">
                <a href="{{ route('laptop') }}" class="inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 hover:text-cyan-400 transition-all group">
                    <span class="p-2 rounded-full border border-slate-800 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                        </svg>
                    </span>
                    Back to Collection
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 xl:gap-20">
                
                <div class="lg:col-span-7 space-y-8">
                    <div class="relative group aspect-[16/10] bg-slate-900 rounded-[2.5rem] overflow-hidden border border-white/5 shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <img src="{{$shop->image}}" alt="Main View" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                        
                        <div class="absolute bottom-8 left-8 flex items-center gap-4">
                            <div class="px-4 py-2 bg-black/60 backdrop-blur-md border border-white/10 rounded-full">
                                <span class="text-[10px] font-mono text-cyan-400 tracking-tighter uppercase">Studio View // 01</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-4">
                        @if($shop->images->isNotEmpty())
                            @foreach($shop->images as $image)
                            <button class="aspect-square bg-slate-900 rounded-2xl border border-white/5 overflow-hidden group relative">
                                <div class="absolute inset-0 bg-cyan-500/20 opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                                <img src="{{$image->image_url}}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-all duration-500 group-hover:scale-110">
                            </button>
                            @endforeach
                        @endif    
                    </div>
                </div>

                <div class="lg:col-span-5 flex flex-col pt-4">
                    <div class="mb-10">
                        <div class="inline-flex items-center gap-2 mb-4">
                            <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
                            <span class="text-xs font-mono uppercase tracking-widest text-cyan-400">Zenith Flagship Edition</span>
                        </div>
                        <h1 class="text-5xl xl:text-6xl font-black text-white tracking-tighter leading-none mb-6">
                            {{$shop -> model_name}} <br/>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">ULTRA.</span>
                        </h1>
                        <p class="text-3xl font-mono text-slate-100">${{ number_format($shop->price, 2) }}</p>
                    </div>

                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-10 pl-4 border-l-2 border-slate-800">
                        {{$shop -> admin_notes}}
                    </p>

                    <div class="space-y-8 mb-12">
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] font-black text-slate-500 mb-4">Engineered Memory</h4>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative p-4 rounded-2xl border-2 border-cyan-500 bg-cyan-500/5 cursor-default">
                                    <span class="block text-white font-bold text-sm">{{$shop->memory}}GB DDR5</span>
                                    <span class="text-[10px] text-cyan-400 font-mono">6400MHz Dual Channel</span>
                                    <div class="absolute top-2 right-2">
                                        <svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    </div>
                                </div>
                                <div class="relative p-4 rounded-2xl border border-white/10 bg-white/5">
                                    <span class="block text-slate-300 font-bold text-sm">{{ $shop->primary_storage }}GB NVMe</span>
                                    <span class="text-[10px] text-slate-500 font-mono">Gen 5 Speed</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/5 rounded-3xl p-8 border border-white/5">
                            <div class="flex gap-8 mb-8 border-b border-white/10 pb-4">
                                <button class="text-[10px] font-black uppercase tracking-widest text-white relative">
                                    Specs
                                    <span class="absolute -bottom-[17px] left-0 w-full h-0.5 bg-cyan-400"></span>
                                </button>
                                <button class="text-[10px] font-black uppercase tracking-widest text-slate-500 hover:text-white transition">Benchmarking</button>
                                <button class="text-[10px] font-black uppercase tracking-widest text-slate-500 hover:text-white transition">Reviews</button>
                            </div>
                            
                            <div class="space-y-5">
                                <div class="flex justify-between items-end group">
                                    <span class="text-xs text-slate-500 uppercase font-bold tracking-tighter">Processor</span>
                                    <div class="flex-grow mx-2 mb-1 spec-line h-px"></div>
                                    <span class="text-xs text-white font-mono">i9-14900HX (5.8GHz)</span>
                                </div>
                                <div class="flex justify-between items-end group">
                                    <span class="text-xs text-slate-500 uppercase font-bold tracking-tighter">Graphics</span>
                                    <div class="flex-grow mx-2 mb-1 spec-line h-px"></div>
                                    <span class="text-xs text-white font-mono">RTX 4090 16GB</span>
                                </div>
                                <div class="flex justify-between items-end group">
                                    <span class="text-xs text-slate-500 uppercase font-bold tracking-tighter">Display</span>
                                    <div class="flex-grow mx-2 mb-1 spec-line h-px"></div>
                                    <span class="text-xs text-white font-mono">16" 4K Mini-LED</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="flex-[3] bg-white text-black font-black text-xs uppercase tracking-[0.2em] py-5 rounded-2xl hover:bg-cyan-400 hover:shadow-[0_0_30px_rgba(34,211,238,0.4)] transition-all duration-500 active:scale-[0.98]">
                            Add to System
                        </button>
                        <button class="flex-1 bg-slate-900 border border-white/10 text-white py-5 rounded-2xl flex justify-center items-center hover:bg-white hover:text-black transition-all duration-300 active:scale-[0.98]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main-layout>