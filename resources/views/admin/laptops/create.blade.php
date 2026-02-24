<x-layouts.admin-layout>
    <div class="max-w-5xl mx-auto animate-in fade-in slide-in-from-bottom-6 duration-700">
<div class="mb-8">
    <button onclick="window.history.back()" 
        class="group relative inline-flex items-center gap-4 py-2 px-6 overflow-hidden transition-all">
        
        <div class="absolute inset-0 w-0 bg-cyan-500/10 transition-all duration-300 ease-out group-hover:w-full"></div>
        
        <div class="absolute left-0 top-0 h-full w-[2px] bg-slate-800 group-hover:bg-cyan-500 transition-colors"></div>

        <div class="relative flex items-center gap-3">
            <div class="flex items-center justify-center w-8 h-8 rounded-full border border-slate-800 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/10 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" 
                    class="text-slate-500 group-hover:text-cyan-400 transition-transform group-hover:-translate-x-0.5">
                    <path d="m15 18-6-6 6-6"/>
                </svg>
            </div>
            
            <div class="flex flex-col items-start">
                <span class="text-[8px] font-bold text-slate-600 uppercase tracking-[0.4em] leading-none mb-1 group-hover:text-cyan-500/60 transition-colors">
                    System_Nav
                </span>
                <span class="text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] group-hover:text-white transition-colors">
                    Return to Command
                </span>
            </div>
        </div>

        <div class="absolute top-0 right-0 w-1 h-1 border-t border-r border-slate-800 group-hover:border-cyan-500"></div>
        <div class="absolute bottom-0 right-0 w-1 h-1 border-b border-r border-slate-800 group-hover:border-cyan-500"></div>
    </button>
</div>     
        <div class="mb-10 flex justify-between items-end">
            <div>
                <h2 class="text-xs font-black uppercase tracking-[0.4em] text-cyan-500/80 mb-2">Protocol: Register_Node</h2>
                <h1 class="text-4xl font-black text-white tracking-tighter uppercase">Initialize Device</h1>
                <p class="text-slate-500 text-sm mt-2 font-light">Input hardware parameters to provision a new node to the Zenith grid.</p>
            </div>
            <div class="hidden md:block text-right">
                <span class="text-[10px] font-mono text-slate-600 block">ENCRYPTION: AES-256</span>
                <span class="text-[10px] font-mono text-cyan-500 animate-pulse">GATEWAY: SECURE</span>
            </div>
        </div>

            <form action="{{ route('postLaptops') }}" method="POST" enctype="multipart/form-data" class="p-10 space-y-10">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Hardware Schematic (Upload Image)</label>
                        <input name="cover_image" type="file" accept="image/*"
                            class="block w-full text-xs font-mono text-slate-400
                            file:mr-4 file:py-3 file:px-6
                            file:rounded-xl file:border-0
                            file:text-[10px] file:font-black file:uppercase file:tracking-widest
                            file:bg-cyan-500 file:text-black
                            hover:file:bg-cyan-400
                            cursor-pointer bg-white/5 rounded-xl border border-white/10 p-2" multiple>
                        @error('cover_image') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Model Designation</label>
                        <input name="model_name" type="text" placeholder="e.g. ZENITH X-1"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500/50 focus:outline-none transition-all">
                        @error('model_name') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Serial Signature</label>
                        <input name="serial_number" type="text" placeholder="SN-000-000"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500/50 focus:outline-none transition-all font-mono">
                        @error('serial_number') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="h-px bg-white/5"></div>

                <div>
                    <h3 class="text-cyan-500 font-black uppercase text-[10px] tracking-[0.3em] mb-8">Hardware Matrix</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Processing Unit</label>
                            <input name="cpu_type" type="text" placeholder="Intel i9 / M3 Ultra"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500/50 focus:outline-none">
                                @error('cpu_type')
                                  <div class="text-red-600">{{ $message }}</div>
                                 @enderror     
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Memory Capacity</label>
                            <input name="memory" type="text" placeholder="e.g. 64GB DDR5"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500/50 focus:outline-none">
                                @error('memory')
                                  <div class="text-red-600">{{ $message }}</div>
                                 @enderror    
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Primary Storage</label>
                            <input name="primary_storage" type="text" placeholder="e.g. 2TB NVMe"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500/50 focus:outline-none">
                              @error('primary_storage')
                                  <div class="text-red-600">{{ $message }}</div>
                                 @enderror     
                        </div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Market Value (USD)</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-cyan-500 font-bold">$</span>
                    <input type="number" name="price" step="0.01" value="{{ old('price') }}" required
                        class="w-full bg-white/5 border {{ $errors->has('price') ? 'border-red-500/50' : 'border-white/10' }} rounded-xl px-8 py-3 text-white focus:border-cyan-500/50 focus:outline-none font-mono">
                </div>
                @error('price')
                    <p class="text-red-500 text-[10px] mt-2 font-bold uppercase tracking-tighter">{{ $message }}</p>
                @enderror    
            </div>
        </div>
                    </div>
                </div>

                <div class="h-px bg-white/5"></div>

                <div class="space-y-8">
                    <div class="flex items-center p-4 bg-white/[0.03] border border-white/5 rounded-2xl w-fit">
                        <div class="mr-6">
                            <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest mb-1">System Activation</label>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Active Link Status</span>
                        </div>
                        <input type="hidden" name="is_active" value="0">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_active" value="1" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-slate-500 after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-cyan-500 shadow-inner"></div>
                        </label>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-3">Operator Notes</label>
                        <textarea name="admin_notes" rows="4" placeholder="Log additional system modifications..."
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-cyan-500/50 focus:outline-none transition-all resize-none"></textarea>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-6 pt-6">
                    <button type="button" onclick="window.history.back()"
                        class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 hover:text-white transition-colors">
                        Abort Mission
                    </button>

                    <button type="submit"
                        class="px-12 py-5 bg-white text-black font-black text-[10px] uppercase tracking-[0.3em] rounded-2xl shadow-2xl hover:bg-cyan-400 transform transition-all active:scale-95">
                        Commit Device
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin-layout>