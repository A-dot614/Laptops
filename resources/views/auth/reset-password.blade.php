<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Key Override | ZENITH</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap');
        
        body { font-family: 'Space Grotesk', sans-serif; }

        .auth-gradient {
            background: radial-gradient(circle at center, #0f172a 0%, #020617 100%);
        }

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
        <div class="absolute top-[-10%] right-[-10%] w-[50%] h-[50%] bg-blue-500 rounded-full blur-[120px] animate-pulse"></div>
    </div>

    <div class="w-full max-w-[440px] relative z-10">
        
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-slate-900/50 border border-cyan-500/30 mb-6 relative group">
                <div class="absolute inset-0 rounded-2xl bg-cyan-500/10 blur-xl"></div>
                <svg class="w-8 h-8 text-cyan-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
            </div>
            <h1 class="text-3xl font-light tracking-[0.2em] text-white uppercase italic">Key <span class="text-cyan-500 font-bold">Override</span></h1>
            <p class="text-slate-500 mt-3 text-[10px] font-bold uppercase tracking-[0.4em]">Updating Security Credentials</p>
        </div>

        <div class="bg-slate-950/40 backdrop-blur-2xl p-8 sm:p-10 rounded-3xl border border-white/5 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-cyan-400 to-transparent animate-[shimmer_2s_infinite] translate-x-[-100%]"></div>
            
            <form method="POST" action="{{ route('password.store') }}" class="space-y-10">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="relative">
                    <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" placeholder=" " required autofocus 
                           class="input-field w-full bg-transparent border-b-2 border-white/10 py-2 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-500 placeholder-transparent">
                    <label for="email" class="absolute left-0 top-2 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-500 origin-left">
                        Target Identity
                    </label>
                    @error('email')
                        <span class="text-[9px] text-rose-500 uppercase tracking-widest mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative">
                    <input id="password" type="password" name="password" placeholder=" " required 
                           class="input-field w-full bg-transparent border-b-2 border-white/10 py-2 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-500 placeholder-transparent">
                    <label for="password" class="absolute left-0 top-2 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-500 origin-left">
                        New System Key
                    </label>
                    @error('password')
                        <span class="text-[9px] text-rose-500 uppercase tracking-widest mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative">
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder=" " required 
                           class="input-field w-full bg-transparent border-b-2 border-white/10 py-2 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-500 placeholder-transparent">
                    <label for="password_confirmation" class="absolute left-0 top-2 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-500 origin-left">
                        Re-Verify Key
                    </label>
                    @error('password_confirmation')
                        <span class="text-[9px] text-rose-500 uppercase tracking-widest mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="pt-4">
                    <button type="submit" class="group relative w-full py-4 bg-white text-black font-bold text-[10px] uppercase tracking-[0.4em] rounded transition-all duration-300 hover:bg-cyan-400 hover:shadow-[0_0_25px_rgba(34,211,238,0.4)] active:scale-95 overflow-hidden">
                        <span class="relative z-10 italic">Rewrite Credentials</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-10 flex justify-between items-center px-6">
            <div class="flex items-center gap-2">
                <span class="w-1 h-1 bg-cyan-500 rounded-full animate-pulse"></span>
                <span class="text-[8px] font-bold text-slate-600 tracking-[0.3em] uppercase">Auth-Level: Admin</span>
            </div>
            <span class="text-[8px] font-bold text-slate-600 tracking-[0.3em] uppercase italic">Zenith-Crypt 2.0</span>
        </div>
    </div>

</body>
</html>