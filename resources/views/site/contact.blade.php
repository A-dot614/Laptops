<x-layouts.main-layout>
    <style>
        .contact-glass {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Custom Input Styling */
        .input-glow:focus + label, 
        .input-glow:not(:placeholder-shown) + label {
            transform: translateY(-24px) scale(0.8);
            color: #22d3ee;
        }
        
        .form-input {
            background: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .form-input:focus {
            border-bottom-color: #22d3ee;
            box-shadow: 0 1px 0 0 #22d3ee;
        }

        @keyframes pulse-soft {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }
        .animate-pulse-soft { animation: pulse-soft 4s infinite; }
    </style>

    <section class="min-h-screen bg-[#020617] text-slate-300 pt-32 pb-24 px-6 relative overflow-hidden">
        
        <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[120px] animate-pulse-soft"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] animate-pulse-soft"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            
            <div class="mb-20">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px w-12 bg-gradient-to-r from-cyan-500 to-transparent"></span>
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-cyan-400">Connection Center</span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black tracking-tighter text-white mb-6">
                    GET IN <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-600">TOUCH.</span>
                </h1>
                <p class="text-slate-400 max-w-xl text-lg font-light leading-relaxed">
                    Have questions about our latest workstations or need technical assistance? Our engineering team is standing by.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 xl:gap-20">
                
                <div class="lg:col-span-5 space-y-6">
                    
                    <div class="group relative p-px rounded-3xl overflow-hidden transition-all duration-500 hover:scale-[1.02]">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="relative contact-glass p-8 rounded-[1.45rem] border border-white/5 h-full">
                            <div class="flex items-start justify-between mb-4">
                                <h3 class="text-white font-black uppercase tracking-widest text-xs">Technical Support</h3>
                                <div class="p-2 rounded-lg bg-cyan-500/10 text-cyan-400 group-hover:bg-cyan-500 group-hover:text-black transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </div>
                            </div>
                            <p class="text-2xl font-mono text-cyan-400 mb-2">support@laptop.tech</p>
                            <p class="text-sm text-slate-500 font-light">Global 24/7 Priority Support for hardware diagnostics.</p>
                        </div>
                    </div>

                    <div class="group relative p-px rounded-3xl overflow-hidden transition-all duration-500 hover:scale-[1.02]">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="relative contact-glass p-8 rounded-[1.45rem] border border-white/5 h-full">
                            <div class="flex items-start justify-between mb-4">
                                <h3 class="text-white font-black uppercase tracking-widest text-xs">Sales & Leasing</h3>
                                <div class="p-2 rounded-lg bg-blue-500/10 text-blue-400 group-hover:bg-blue-500 group-hover:text-black transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                </div>
                            </div>
                            <p class="text-2xl font-mono text-blue-400 mb-2">+1 (800) LAP-TECH</p>
                            <p class="text-sm text-slate-500 font-light">Mon - Fri, 9am - 6pm EST. Enterprise volume inquiries.</p>
                        </div>
                    </div>

                    <div class="group relative p-8 rounded-3xl contact-glass border border-white/5 overflow-hidden">
                        <div class="absolute -right-4 -bottom-4 text-white/5 rotate-12">
                            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        </div>
                        <h3 class="text-white font-black uppercase tracking-widest text-xs mb-4">Global Headquarters</h3>
                        <p class="text-slate-300 font-light leading-relaxed">
                            101 Silicon Way, Suite 500<br/>
                            San Francisco, CA 94105, USA
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-[2.5rem] blur-xl opacity-50"></div>
                        
                        <div class="relative bg-slate-950 p-8 md:p-16 rounded-[2.5rem] border border-white/10 shadow-2xl">
                            <form action="#" class="space-y-10">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    <div class="relative">
                                        <input type="text" id="name" placeholder=" " class="form-input w-full py-3 text-white focus:outline-none text-lg">
                                        <label for="name" class="absolute left-0 top-3 text-slate-500 pointer-events-none transition-all duration-300 uppercase text-[10px] font-bold tracking-[0.2em]">Full Name</label>
                                    </div>
                                    <div class="relative">
                                        <input type="email" id="email" placeholder=" " class="form-input w-full py-3 text-white focus:outline-none text-lg">
                                        <label for="email" class="absolute left-0 top-3 text-slate-500 pointer-events-none transition-all duration-300 uppercase text-[10px] font-bold tracking-[0.2em]">Email Address</label>
                                    </div>
                                </div>

                                <div class="relative">
                                    <select class="form-input w-full py-3 bg-transparent text-white focus:outline-none text-lg appearance-none cursor-pointer">
                                        <option class="bg-slate-900">Pro Workstation 16</option>
                                        <option class="bg-slate-900">Gaming Elite X</option>
                                        <option class="bg-slate-900">Ultra Slim 13</option>
                                        <option class="bg-slate-900">Custom Engineering</option>
                                    </select>
                                    <label class="absolute left-0 -top-6 text-cyan-500 uppercase text-[10px] font-bold tracking-[0.2em]">Interest Profile</label>
                                    <div class="absolute right-0 top-4 pointer-events-none text-slate-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                                    </div>
                                </div>

                                <div class="relative">
                                    <textarea id="message" rows="4" placeholder=" " class="form-input w-full py-3 text-white focus:outline-none text-lg resize-none"></textarea>
                                    <label for="message" class="absolute left-0 top-3 text-slate-500 pointer-events-none transition-all duration-300 uppercase text-[10px] font-bold tracking-[0.2em]">Project Details</label>
                                </div>

                                <button class="group relative w-full py-6 bg-white text-black font-black text-xs uppercase tracking-[0.3em] rounded-2xl overflow-hidden transition-all duration-500 hover:bg-cyan-400 hover:shadow-[0_20px_40px_rgba(34,211,238,0.2)] active:scale-[0.98]">
                                    <span class="relative z-10 group-hover:tracking-[0.5em] transition-all duration-500">Initiate Transmission</span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.main-layout>