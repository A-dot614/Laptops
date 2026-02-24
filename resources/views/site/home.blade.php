<x-layouts.main-layout>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes glow-pulse {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
        @keyframes gradient-x {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-gradient-x { animation: gradient-x 15s ease infinite; background-size: 200% 200%; }
        .animate-enter { animation: fade-in-up 1s cubic-bezier(0.16, 1, 0.3, 1) forwards; opacity: 0; }
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
        
        /* Subtle Grid Pattern for Background */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, #ffffff05 1px, transparent 1px),
                              linear-gradient(to bottom, #ffffff05 1px, transparent 1px);
            background-size: 40px 40px;
            mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
        }
    </style>

    <div class="bg-[#050505] min-h-screen text-white overflow-x-hidden selection:bg-cyan-500/30">
        
        <section class="relative pt-32 pb-20 flex flex-col items-center justify-center overflow-hidden">
            
            <div class="absolute inset-0 bg-grid-pattern z-0 pointer-events-none"></div>
            <div class="absolute top-[-10%] left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-indigo-600/20 rounded-full blur-[120px] -z-10 animate-pulse"></div>
            
            <div class="text-center z-10 px-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-8 animate-enter">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                    <span class="text-xs font-medium tracking-widest text-cyan-200 uppercase">New Generation</span>
                </div>

                <h1 class="text-7xl md:text-9xl font-black tracking-tighter mb-6 leading-[0.9] animate-enter delay-100">
                    LIGHTER. <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient-x">
                        FASTER.
                    </span>
                </h1>
                
                <p class="text-lg md:text-xl text-slate-400 max-w-xl mx-auto mb-12 font-light leading-relaxed animate-enter delay-200">
                    The <span class="text-white font-semibold">Zenith M3 Pro</span> redefines physics. 
                    Power that flows through a chassis thinner than a whisper.
                </p>
            </div>

            <div class="relative w-full max-w-5xl px-4 animate-enter delay-300 group perspective-1000">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] h-[60%] bg-gradient-to-r from-cyan-500/30 to-purple-600/30 blur-[100px] rounded-full opacity-50 transition duration-700 group-hover:opacity-80"></div>
                
                <div class="relative z-10 animate-float transition-transform duration-700 ease-out group-hover:scale-[1.02]">
                    <img src="https://images.unsplash.com/photo-1517336712461-481bf3817349?q=80&w=1200&auto=format&fit=crop" 
                         alt="Zenith Laptop" 
                         class="w-full h-auto rounded-2xl shadow-2xl border border-white/10 mask-image-gradient-b">
                    
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-700 pointer-events-none"></div>
                </div>
            </div>
        </section>

        <section class="py-32 px-6 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="group relative p-8 rounded-[2rem] bg-[#0a0a0a] border border-white/5 overflow-hidden hover:border-white/10 transition-colors duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div class="mb-8">
                            <div class="w-12 h-12 rounded-2xl bg-cyan-900/30 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-2">Retina XDR</h3>
                            <p class="text-slate-400 leading-relaxed">1600 nits of brightness. Shadows are deeper, highlights are fiercer.</p>
                        </div>
                        <div class="h-1 w-full bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-cyan-500 w-[80%] rounded-full"></div>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 rounded-[2rem] bg-[#0a0a0a] border border-white/5 overflow-hidden hover:border-white/10 transition-colors duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-purple-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div class="mb-8">
                            <div class="w-12 h-12 rounded-2xl bg-purple-900/30 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-2">22H Battery</h3>
                            <p class="text-slate-400 leading-relaxed">The longest lasting battery in a pro laptop. Work from sunrise to sunrise.</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-mono text-purple-400">
                            <span>0%</span>
                            <div class="h-1 flex-1 bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-purple-500 w-full animate-pulse"></div>
                            </div>
                            <span>100%</span>
                        </div>
                    </div>
                </div>

                <div class="group relative p-8 rounded-[2rem] bg-[#0a0a0a] border border-white/5 overflow-hidden hover:border-white/10 transition-colors duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div class="mb-8">
                            <div class="w-12 h-12 rounded-2xl bg-blue-900/30 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 3-2 3-2zm0 0v-6.2M9 19l12-3m-6 6c0 1.105-1.343 2-3 2s-3-.895-3-2 3-2 3-2zm0 0v-6.2" /></svg>
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-2">Pro Spatial</h3>
                            <p class="text-slate-400 leading-relaxed">Six-speaker sound system with force-cancelling woofers.</p>
                        </div>
                        
                        <div class="flex items-end justify-between h-8 gap-1">
                            <div class="w-1 bg-blue-500/50 rounded-full h-[40%] group-hover:h-[80%] transition-all duration-300"></div>
                            <div class="w-1 bg-blue-500/50 rounded-full h-[70%] group-hover:h-[100%] transition-all duration-500"></div>
                            <div class="w-1 bg-blue-500/50 rounded-full h-[50%] group-hover:h-[60%] transition-all duration-200"></div>
                            <div class="w-1 bg-blue-500/50 rounded-full h-[80%] group-hover:h-[40%] transition-all duration-400"></div>
                            <div class="w-1 bg-blue-500/50 rounded-full h-[60%] group-hover:h-[90%] transition-all duration-300"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</x-layouts.main-layout>