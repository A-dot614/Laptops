<x-layouts.main-layout>
    <style>
        /* Modern Text Masking for the "Heritage" Look */
        .text-mask {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.1);
            color: transparent;
        }
        
        /* Floating Animation for the Decorative Elements */
        @keyframes subtle-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .float-element { animation: subtle-float 8s ease-in-out infinite; }

        /* Counter "Tick" effect simulation */
        .counter-glow {
            text-shadow: 0 0 20px rgba(34, 211, 238, 0.3);
        }

        /* Glass Cards for the Bottom Grid */
        .value-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0) 100%);
            backdrop-filter: blur(10px);
        }
    </style>

    <section class="min-h-screen bg-[#020617] text-slate-300 pt-40 pb-24 px-6 md:px-8 relative overflow-hidden">
        
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" 
             style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center mb-40">
                <div class="relative order-2 lg:order-1">
                    <div class="inline-flex items-center gap-4 mb-8">
                        <span class="h-px w-10 bg-cyan-500"></span>
                        <h2 class="text-xs font-black uppercase tracking-[0.5em] text-cyan-400">Our Heritage</h2>
                    </div>
                    
                    <h1 class="text-6xl md:text-8xl font-black tracking-tighter text-white leading-[0.85] mb-8">
                        THE ART OF <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-500">
                            PERFECTION.
                        </span>
                    </h1>
                    
                    <p class="text-xl text-slate-400 leading-relaxed font-light max-w-lg mb-10">
                        Founded in 2024, <span class="text-white font-medium">ZENITH</span> emerged from a simple obsession: erasing the boundary between <span class="italic">limitless power</span> and <span class="italic">absolute portability</span>.
                    </p>

                    <div class="flex items-center gap-8">
                        <a href="#" class="group flex items-center gap-4 py-3 px-6 rounded-full bg-white/5 border border-white/10 hover:border-cyan-500/50 transition-all duration-500">
                            <span class="text-xs font-black uppercase tracking-widest text-white">The Roadmap</span>
                            <svg class="w-4 h-4 text-cyan-400 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
                
                <div class="relative lg:col-span-1 order-1 lg:order-2">
                    <div class="relative z-10 aspect-[4/5] rounded-[3rem] overflow-hidden border border-white/10 shadow-2xl group">
                        <div class="absolute inset-0 bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?auto=format&fit=crop&q=80&w=1200" 
                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-1000 opacity-60">
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-[10rem] font-black text-mask select-none tracking-tighter opacity-20">2024</span>
                        </div>
                        
                        <div class="absolute top-8 right-8 w-24 h-24 border-t-2 border-r-2 border-cyan-500/30 rounded-tr-3xl"></div>
                        <div class="absolute bottom-8 left-8 w-24 h-24 border-b-2 border-l-2 border-cyan-500/30 rounded-bl-3xl"></div>
                    </div>
                    
                    <div class="absolute -bottom-10 -right-6 md:-right-10 bg-white/5 backdrop-blur-2xl border border-white/10 p-8 rounded-3xl hidden md:block float-element shadow-2xl">
                        <p class="text-cyan-400 font-mono text-3xl font-bold mb-1">0%</p>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest font-black">Performance Compromise</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-40">
                <div class="p-10 rounded-[2.5rem] bg-white/[0.02] border border-white/5 text-center group hover:bg-white/[0.04] transition-all">
                    <h3 class="text-5xl font-black text-white mb-2 counter-glow transition-transform group-hover:-translate-y-1">0.8<span class="text-cyan-500 text-xl">s</span></h3>
                    <p class="text-[10px] uppercase tracking-[0.3em] text-slate-500 font-bold">Cold Boot</p>
                </div>
                <div class="p-10 rounded-[2.5rem] bg-white/[0.02] border border-white/5 text-center group hover:bg-white/[0.04] transition-all">
                    <h3 class="text-5xl font-black text-white mb-2 counter-glow transition-transform group-hover:-translate-y-1">240<span class="text-blue-500 text-xl">Hz</span></h3>
                    <p class="text-[10px] uppercase tracking-[0.3em] text-slate-500 font-bold">Pro Refresh</p>
                </div>
                <div class="p-10 rounded-[2.5rem] bg-white/[0.02] border border-white/5 text-center group hover:bg-white/[0.04] transition-all">
                    <h3 class="text-5xl font-black text-white mb-2 counter-glow transition-transform group-hover:-translate-y-1">22<span class="text-indigo-500 text-xl">hr</span></h3>
                    <p class="text-[10px] uppercase tracking-[0.3em] text-slate-500 font-bold">Max Endurance</p>
                </div>
                <div class="p-10 rounded-[2.5rem] bg-white/[0.02] border border-white/5 text-center group hover:bg-white/[0.04] transition-all">
                    <h3 class="text-5xl font-black text-white mb-2 counter-glow transition-transform group-hover:-translate-y-1">0<span class="text-purple-500 text-xl">dB</span></h3>
                    <p class="text-[10px] uppercase tracking-[0.3em] text-slate-500 font-bold">Silent Flow</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="value-card p-10 rounded-[2.5rem] border border-white/10 relative group overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-500/5 blur-3xl -z-10 transition-all group-hover:bg-cyan-500/10"></div>
                    <div class="w-12 h-1 mb-8 bg-cyan-500"></div>
                    <h4 class="text-2xl font-bold text-white mb-4">Precision Engineering</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-light">
                        Every chassis is CNC-milled from a single block of aerospace-grade magnesium, optimizing every micron for heat dissipation and rigidity.
                    </p>
                </div>

                <div class="value-card p-10 rounded-[2.5rem] border border-white/10 relative group overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/5 blur-3xl -z-10 transition-all group-hover:bg-blue-500/10"></div>
                    <div class="w-12 h-1 mb-8 bg-blue-500"></div>
                    <h4 class="text-2xl font-bold text-white mb-4">Thermal Innovation</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-light">
                        Our patented liquid-metal vapor chambers redefine thermodynamics, maintaining peak 175W TDP without acoustic compromise.
                    </p>
                </div>

                <div class="value-card p-10 rounded-[2.5rem] border border-white/10 relative group overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-500/5 blur-3xl -z-10 transition-all group-hover:bg-indigo-500/10"></div>
                    <div class="w-12 h-1 mb-8 bg-indigo-500"></div>
                    <h4 class="text-2xl font-bold text-white mb-4">The Clean Circuit</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-light">
                        By 2030, our goal is a closed-loop ecosystem. Machines built from 90% recycled rare-earth minerals powered by 100% renewable energy.
                    </p>
                </div>
            </div>

        </div>
    </section>
</x-layouts.main-layout>