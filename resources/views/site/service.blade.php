<x-layouts.main-layout>
    <style>
        /* Modern Noise Texture Overlay */
        .noise-bg {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3Base%3Bfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            opacity: 0.02;
        }

        /* Subtle Scanline Animation */
        @keyframes scanline {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }
        .scanline {
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, transparent, rgba(34, 211, 238, 0.2), transparent);
            animation: scanline 4s linear infinite;
        }
    </style>

    <section class="min-h-screen bg-[#020617] text-slate-300 pt-32 pb-24 px-6 relative overflow-hidden">
        <div class="absolute inset-0 noise-bg pointer-events-none"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[500px] bg-gradient-to-b from-cyan-900/10 to-transparent blur-3xl opacity-50"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-24">
                <div class="inline-block py-1 px-3 rounded-full bg-cyan-500/10 border border-cyan-500/20 mb-6">
                    <span class="text-[10px] uppercase tracking-[0.5em] text-cyan-400 font-black">Core Ecosystem</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black tracking-tighter text-white mb-8">
                    BEYOND THE <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-500 bg-clip-text text-transparent">HARDWARE.</span>
                </h1>
                <p class="text-slate-400 max-w-2xl mx-auto text-lg font-light leading-relaxed">
                    We don’t just build machines; we engineer long-term peak performance through a lifecycle of elite support and optimization.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
                
                <div class="group relative overflow-hidden p-1 rounded-[2.5rem] transition-all duration-500 hover:scale-[1.02]">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative h-full p-10 rounded-[2.4rem] bg-slate-950 border border-white/5 flex flex-col items-start shadow-2xl">
                        <div class="absolute top-0 right-0 p-8 opacity-5">
                            <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                        </div>
                        
                        <div class="w-14 h-14 mb-8 flex items-center justify-center rounded-2xl bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 group-hover:bg-cyan-500 group-hover:text-black transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Precision Tuning</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-8 flex-grow">Advanced BIOS optimization and thermal profile mapping to ensure maximum clock speeds without compromise.</p>
                        <a href="#" class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-white group/link">
                            Explore Lab
                            <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <div class="group relative overflow-hidden p-1 rounded-[2.5rem] transition-all duration-500 hover:scale-[1.02]">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative h-full p-10 rounded-[2.4rem] bg-slate-950 border border-white/5 flex flex-col items-start shadow-2xl">
                        <div class="w-14 h-14 mb-8 flex items-center justify-center rounded-2xl bg-blue-500/10 text-blue-400 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-black transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Modular Scaling</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-8 flex-grow">Professional integration of high-density RAM and enterprise NVMe storage while maintaining your lifetime warranty.</p>
                        <a href="#" class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-white group/link">
                            Upgrade Path
                            <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <div class="group relative overflow-hidden p-1 rounded-[2.5rem] transition-all duration-500 hover:scale-[1.02]">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative h-full p-10 rounded-[2.4rem] bg-slate-950 border border-white/5 flex flex-col items-start shadow-2xl">
                        <div class="w-14 h-14 mb-8 flex items-center justify-center rounded-2xl bg-purple-500/10 text-purple-400 border border-purple-500/20 group-hover:bg-purple-500 group-hover:text-black transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Zenith Care+</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-8 flex-grow">Our premier security net. Advanced accidental damage protection covering liquid, kinetic impact, and electrical surge.</p>
                        <a href="#" class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-white group/link">
                            View Protection
                            <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-[3rem] blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                <div class="relative bg-black/40 backdrop-blur-xl border border-white/10 rounded-[3rem] p-12 md:p-16 flex flex-col md:flex-row items-center justify-between gap-12 overflow-hidden">
                    <div class="absolute inset-0 scanline opacity-30"></div>
                    
                    <div class="text-center md:text-left relative z-10">
                        <h2 class="text-3xl md:text-4xl font-black text-white mb-4 tracking-tight">Need a Bespoke Solution?</h2>
                        <p class="text-slate-400 max-w-lg text-lg">Our master technicians handle liquid nitrogen cooling setups and industrial-grade hardware modifications.</p>
                    </div>

                    <button class="relative z-10 group/btn bg-white text-black px-10 py-5 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-cyan-400 transition-all duration-300 shadow-[0_0_30px_rgba(255,255,255,0.1)] active:scale-95">
                        <span class="relative z-10">Contact Specialist</span>
                        <div class="absolute inset-0 rounded-2xl bg-cyan-400 scale-0 group-hover/btn:scale-100 transition-transform duration-500 -z-0"></div>
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main-layout>