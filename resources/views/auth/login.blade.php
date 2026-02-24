<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>System Authentication | ZENITH</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap');
        
        body { font-family: 'Space Grotesk', sans-serif; }

        .auth-gradient {
            background: radial-gradient(circle at center, #0f172a 0%, #020617 100%);
        }

        /* Scanline effect */
        .scanline::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 50%, rgba(34, 211, 238, 0.03) 50%);
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 50;
        }

        /* Label floating logic */
        .input-field:focus ~ label,
        .input-field:not(:placeholder-shown) ~ label {
            transform: translateY(-26px) scale(0.75);
            color: #22d3ee;
            letter-spacing: 0.4em;
        }

        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }
    </style>
</head>
<body class="auth-gradient text-slate-300 min-h-screen flex items-center justify-center p-4 sm:p-6 relative overflow-hidden scanline">

    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(#22d3ee 0.5px, transparent 0.5px); background-size: 30px 30px;"></div>
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-cyan-500 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-blue-600 rounded-full blur-[120px] animate-pulse"></div>
    </div>

    <div class="w-full max-w-[420px] relative z-10">
        
        <div class="text-center mb-8 group">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-xl bg-slate-900/50 border border-white/10 mb-6 shadow-2xl relative transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-cyan-500/10 blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="absolute -top-1 -left-1 w-4 h-4 border-t-2 border-l-2 border-cyan-500"></div>
                <div class="absolute -bottom-1 -right-1 w-4 h-4 border-b-2 border-r-2 border-cyan-500"></div>
                <span class="text-3xl font-bold text-white relative z-10">Z<span class="text-cyan-400">.</span></span>
            </div>
            <h1 class="text-4xl font-light tracking-[0.2em] text-white uppercase italic">Zenith<span class="text-cyan-500 font-bold">OS</span></h1>
            <div class="h-[1px] w-24 bg-gradient-to-r from-transparent via-cyan-500 to-transparent mx-auto mt-2"></div>
            <p class="text-slate-500 mt-4 text-[9px] font-black uppercase tracking-[0.5em]">Network Authorization Node</p>
        </div>

        <div class="bg-slate-950/40 backdrop-blur-2xl p-8 sm:p-10 rounded-2xl border border-white/5 shadow-[0_0_50px_-12px_rgba(0,0,0,0.5)] relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-cyan-400 to-transparent animate-[shimmer_2s_infinite] translate-x-[-100%]"></div>
            
            <form method="POST" action="{{ route('login') }}" class="space-y-10">
                @csrf

                <div class="relative">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder=" " required autofocus 
                           class="input-field w-full bg-transparent border-b-2 border-white/10 py-2 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-500 placeholder-transparent">
                    <label for="email" class="absolute left-0 top-2 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-500 origin-left">
                        User Identity
                    </label>
                    @error('email')
                        <span class="text-[9px] text-red-500 uppercase tracking-widest mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative">
                    <input id="password" type="password" name="password" placeholder=" " required 
                           class="input-field w-full bg-transparent border-b-2 border-white/10 py-2 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-500 placeholder-transparent">
                    <label for="password" class="absolute left-0 top-2 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-500 origin-left">
                        System Keycode
                    </label>
                    @error('password')
                        <span class="text-[9px] text-red-500 uppercase tracking-widest mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <label class="flex items-center cursor-pointer group">
                        <div class="relative">
                            <input id="remember_me" type="checkbox" name="remember" class="peer sr-only">
                            <div class="w-4 h-4 border border-white/20 rounded-sm bg-white/5 peer-checked:bg-cyan-500 peer-checked:border-cyan-500 transition-all"></div>
                            <svg class="absolute inset-0 w-4 h-4 text-black opacity-0 peer-checked:opacity-100 p-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="ms-3 text-[9px] font-bold uppercase tracking-widest text-slate-500 group-hover:text-slate-300">Stay Linked</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-[9px] font-bold uppercase tracking-widest text-cyan-500/80 hover:text-cyan-300 hover:underline underline-offset-4 transition-all">
                            Lost Access?
                        </a>
                    @endif
                </div>

                <button type="submit" class="group relative w-full py-4 bg-white text-black font-bold text-[10px] uppercase tracking-[0.4em] rounded transition-all duration-300 hover:bg-cyan-400 hover:shadow-[0_0_20px_rgba(34,211,238,0.4)] active:scale-95 overflow-hidden">
                    <span class="relative z-10">Initialize Connection</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                </button>

                <p class="text-center text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em]">
                    New Operator? 
                    <a href="{{ route('register') }}" class="text-white hover:text-cyan-400 transition-colors border-b border-white/20 hover:border-cyan-400 pb-0.5">Register Node</a>
                </p>
            </form>
        </div>

        <div class="text-center mt-10">
            <div class="inline-flex flex-wrap justify-center items-center gap-4 px-6 py-2 border border-white/5 bg-slate-900/20 rounded-xl sm:rounded-full">
                <div class="flex items-center gap-2">
                    <div class="flex gap-1">
                        <span class="w-1 h-1 bg-green-500 rounded-full animate-ping"></span>
                        <span class="w-1 h-1 bg-green-500 rounded-full"></span>
                    </div>
                    <span class="text-[8px] font-bold uppercase tracking-[0.4em] text-slate-600">Encrypted Tunnel v4.2.0</span>
                </div>
                <div class="hidden sm:block h-3 w-[1px] bg-white/10"></div>
                <span class="text-[8px] font-bold uppercase tracking-[0.4em] text-slate-600">Node: 0x82A</span>
            </div>
        </div>

    </div>

</body>
</html>