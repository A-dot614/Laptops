<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Security Clearance | ZENITH</title>
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
    </div>

    <div class="w-full max-w-[420px] relative z-10">
        
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-900/50 border border-cyan-500/30 mb-6 relative">
                <div class="absolute inset-0 rounded-full border border-cyan-500/20 animate-ping"></div>
                <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h1 class="text-3xl font-light tracking-[0.15em] text-white uppercase italic">Clearance <span class="text-cyan-500 font-bold">Required</span></h1>
            <p class="text-slate-500 mt-3 text-[10px] font-bold uppercase tracking-[0.3em] px-4 leading-relaxed">
                Secure area protocols active. Please confirm identity to proceed.
            </p>
        </div>

        <div class="bg-slate-950/40 backdrop-blur-2xl p-8 sm:p-10 rounded-2xl border border-white/5 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-cyan-400 to-transparent animate-[shimmer_3s_infinite] translate-x-[-100%]"></div>
            
            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-10">
                @csrf

                <div class="relative">
                    <input id="password" type="password" name="password" placeholder=" " required autocomplete="current-password" autofocus
                           class="input-field w-full bg-transparent border-b-2 border-white/10 py-2 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-500 placeholder-transparent">
                    <label for="password" class="absolute left-0 top-2 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-500 origin-left">
                        Master Keycode
                    </label>
                    
                    @if ($errors->has('password'))
                        <div class="mt-2 flex items-center gap-2 text-rose-500">
                            <span class="w-1 h-1 bg-rose-500 rounded-full animate-pulse"></span>
                            <span class="text-[9px] font-bold uppercase tracking-widest">{{ $errors->first('password') }}</span>
                        </div>
                    @endif
                </div>

                <div class="flex flex-col gap-4">
                    <button type="submit" class="group relative w-full py-4 bg-white text-black font-bold text-[10px] uppercase tracking-[0.4em] rounded transition-all duration-300 hover:bg-cyan-400 hover:shadow-[0_0_25px_rgba(34,211,238,0.4)] active:scale-95 overflow-hidden">
                        <span class="relative z-10 italic">Verify Identity</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                    </button>

                    <a href="{{ url()->previous() }}" class="text-center text-[9px] font-bold uppercase tracking-widest text-slate-500 hover:text-white transition-colors">
                        [ Abort Operation ]
                    </a>
                </div>
            </form>
        </div>

        <div class="mt-10 flex justify-center items-center gap-6">
            <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_8px_#22d3ee]"></span>
                <span class="text-[8px] font-bold text-slate-600 tracking-[0.3em] uppercase">Auth-Level: 4</span>
            </div>
            <div class="w-[1px] h-3 bg-white/10"></div>
            <span class="text-[8px] font-bold text-slate-600 tracking-[0.3em] uppercase italic">Zenith Secure-Link</span>
        </div>

    </div>

</body>
</html>