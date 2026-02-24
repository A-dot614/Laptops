<x-layouts.admin-layout>
    <div class="max-w-[1400px] mx-auto animate-in fade-in slide-in-from-bottom-8 duration-1000">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
            <div class="flex items-center gap-3">
                <div class="flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">
                    <a href="{{ route('index') }}" class="hover:text-cyan-400 transition-colors">Fleet</a>
                    <span class="mx-3 text-slate-800">/</span>
                    <span class="text-white">Node_Details</span>
                </div>
            </div>
            
            <div class="flex gap-4">
                <button class="px-6 py-3 border border-white/10 text-white rounded-xl hover:bg-white/5 hover:border-cyan-500/50 transition-all text-[10px] font-black uppercase tracking-widest">
                    Modify Protocols
                </button>
                <button class="px-6 py-3 bg-red-500/10 text-red-500 border border-red-500/20 rounded-xl hover:bg-red-500 hover:text-white transition-all text-[10px] font-black uppercase tracking-widest">
                    Decommission Node
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-10">
            
            <div class="lg:col-span-1 bg-white/[0.02] rounded-[3rem] border border-white/5 p-10 flex flex-col items-center text-center relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative mb-8">
                    <div class="absolute inset-0 bg-cyan-500/20 blur-2xl rounded-full"></div>
                    <div class="w-32 h-32 bg-white/5 rounded-[2.5rem] border border-white/10 flex items-center justify-center relative z-10">
                        <svg class="w-16 h-16 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>

                <h1 class="text-3xl font-black text-white tracking-tighter uppercase">MacBook Pro M3</h1>
                <p class="text-cyan-500 font-mono text-[10px] mt-2 uppercase tracking-[0.3em]">Signature: 0x882-APPL</p>
                
                <div class="mt-8 flex flex-wrap justify-center gap-3">
                    <div class="flex items-center gap-2 px-4 py-1.5 bg-emerald-500/5 text-emerald-500 text-[9px] font-black uppercase tracking-widest rounded-full border border-emerald-500/20">
                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full shadow-[0_0_8px_#10b981] animate-pulse"></span>
                        Uplink_Active
                    </div>
                    <div class="px-4 py-1.5 bg-blue-500/5 text-blue-400 text-[9px] font-black uppercase tracking-widest rounded-full border border-blue-500/20">
                        Secure_Node
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 bg-white/[0.02] rounded-[3rem] border border-white/5 p-10 shadow-2xl backdrop-blur-sm">
                <div class="flex items-center justify-between mb-10">
                    <h3 class="text-white text-[10px] font-black uppercase tracking-[0.4em] flex items-center gap-3">
                        <span class="w-2 h-2 bg-cyan-500 rounded-full shadow-[0_0_8px_#22d3ee]"></span>
                        Real-Time Telemetry
                    </h3>
                    <span class="text-[9px] font-mono text-slate-600">POLLING: 250ms</span>
                </div>

                <div class="space-y-10">
                    <div>
                        <div class="flex justify-between mb-3">
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-500">Processing Cluster Load</span>
                            <span class="text-xs text-cyan-400 font-mono font-bold">14.02%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden p-0.5 border border-white/5">
                            <div class="bg-cyan-500 h-full w-[14%] rounded-full shadow-[0_0_15px_rgba(34,211,238,0.4)] transition-all duration-1000"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-3">
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-500">Thermal Index</span>
                            <span class="text-xs text-orange-400 font-mono font-bold">42.8°C</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden p-0.5 border border-white/5">
                            <div class="bg-orange-500 h-full w-[42%] rounded-full shadow-[0_0_15px_rgba(249,115,22,0.4)] transition-all duration-1000"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-3">
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-500">RAM Partition</span>
                            <span class="text-xs text-purple-400 font-mono font-bold">24.1 / 64 GB</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden p-0.5 border border-white/5">
                            <div class="bg-purple-500 h-full w-[38%] rounded-full shadow-[0_0_15px_rgba(168,85,247,0.4)] transition-all duration-1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <div class="bg-white/[0.02] rounded-[3rem] border border-white/5 p-10">
                <h3 class="text-white text-[10px] font-black uppercase tracking-[0.3em] mb-10">Hardware Manifest</h3>
                <div class="space-y-6">
                    <div class="flex justify-between py-4 border-b border-white/5">
                        <span class="text-slate-500 text-[10px] font-black uppercase tracking-widest">Logic Board</span>
                        <span class="text-white text-sm font-bold tracking-tight">Apple M3 Max (16-Core)</span>
                    </div>
                    <div class="flex justify-between py-4 border-b border-white/5">
                        <span class="text-slate-500 text-[10px] font-black uppercase tracking-widest">Render Engine</span>
                        <span class="text-white text-sm font-bold tracking-tight">40-Core Neural GPU</span>
                    </div>
                    <div class="flex justify-between py-4 border-b border-white/5">
                        <span class="text-slate-500 text-[10px] font-black uppercase tracking-widest">Display Array</span>
                        <span class="text-white text-sm font-bold tracking-tight">16.2" XDR Liquid Retina</span>
                    </div>
                    <div class="flex justify-between py-4">
                        <span class="text-slate-500 text-[10px] font-black uppercase tracking-widest">Deployment Date</span>
                        <span class="text-white text-sm font-bold tracking-tight">JAN_12_2026</span>
                    </div>
                </div>
            </div>

            <div class="bg-white/[0.02] rounded-[3rem] border border-white/5 p-10">
                <h3 class="text-white text-[10px] font-black uppercase tracking-[0.3em] mb-10">Node History & Logs</h3>
                <div class="space-y-8">
                    <div class="flex items-start gap-6 group">
                        <div class="w-2 h-2 mt-2 bg-cyan-500 rounded-full shadow-[0_0_8px_#22d3ee]"></div>
                        <div>
                            <p class="text-[11px] text-white font-bold uppercase tracking-widest">Kernel Patch Applied</p>
                            <p class="text-[10px] text-slate-500 font-mono mt-1">v14.2.1-STABLE // T-MINUS 2H</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6">
                        <div class="w-2 h-2 mt-2 bg-emerald-500 rounded-full shadow-[0_0_8px_#10b981]"></div>
                        <div>
                            <p class="text-[11px] text-white font-bold uppercase tracking-widest">Sync Verification</p>
                            <p class="text-[10px] text-slate-500 font-mono mt-1">UPLINK_SUCCESS // T-MINUS 1D</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6">
                        <div class="w-2 h-2 mt-2 bg-orange-500 rounded-full shadow-[0_0_8px_#f97316]"></div>
                        <div>
                            <p class="text-[11px] text-white font-bold uppercase tracking-widest">Thermal Exception</p>
                            <p class="text-[10px] text-slate-500 font-mono mt-1">CRITICAL_TEMP_85C // T-MINUS 3D</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts.admin-layout>