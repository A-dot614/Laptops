<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Link Verification | ZENITH</title>
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
            background: linear-gradient(to bottom, transparent 50%, rgba(34, 211, 238, 0.02) 50%);
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 50;
        }

        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }

        @keyframes radar {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(3); opacity: 0; }
        }
        .radar-ping {
            animation: radar 2s infinite;
        }
    </style>
</head>
<body class="auth-gradient text-slate-300 min-h-screen flex items-center justify-center p-4 sm:p-6 relative overflow-hidden scanline">

    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: linear-gradient(#22d3ee 1px, transparent 1px), linear-gradient(90deg, #22d3ee 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>

    <div class="w-full max-w-[480px] relative z-10">
        
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-slate-900/80 border border-white/10 mb-6 relative">
                <div class="absolute inset-0 rounded-2xl border border-cyan-500/40 radar-ping"></div>
                <div class="absolute inset-0 rounded-2xl border border-cyan-500/20 radar-ping" style="animation-delay: 1s"></div>
                
                <svg class="w-10 h-10 text-cyan-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h1 class="text-3xl font-light tracking-[0.2em] text-white uppercase italic">Awaiting <span class="text-cyan-500 font-bold">Uplink</span></h1>
            <p class="text-slate-500 mt-4 text-[11px] font-bold uppercase tracking-[0.3em] max-w-xs mx-auto leading-relaxed">
                Verification packet transmitted. Check your secure inbox to activate this terminal.
            </p>
        </div>

        <div class="bg-slate-950/50 backdrop-blur-2xl p-8 sm:p-10 rounded-[2rem] border border-white/5 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-cyan-400 to-transparent animate-[shimmer_4s_infinite] translate-x-[-100%]"></div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-8 p-4 rounded-lg bg-cyan-500/10 border border-cyan-500/20 flex items-center gap-3">
                    <div class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></div>
                    <span class="text-[9px] font-black text-cyan-400 uppercase tracking-widest leading-tight">
                        New verification link re-routed to your coordinates.
                    </span>
                </div>
            @endif

            <div class="space-y-8">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="group relative w-full py-5 bg-white text-black font-black text-[10px] uppercase tracking-[0.4em] rounded-xl transition-all duration-300 hover:bg-cyan-400 hover:shadow-[0_0_30px_rgba(34,211,238,0.3)] active:scale-95 overflow-hidden">
                        <span class="relative z-10">Resend Uplink Packet</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                    </button>
                </form>

                <div class="flex flex-col sm:flex-row items-center justify-between pt-6 border-t border-white/5 gap-6">
                    <div class="flex items-center gap-2">
                        <span class="w-1 h-1 bg-slate-600 rounded-full"></span>
                        <span class="text-[9px] font-bold text-slate-500 uppercase tracking-widest">Protocol 7-E</span>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-[9px] font-black text-slate-500 uppercase tracking-[0.2em] hover:text-rose-400 transition-colors border-b border-transparent hover:border-rose-400/30 pb-1">
                            Terminate Session
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center gap-2 opacity-50">
            <div class="flex gap-1">
                <div class="w-8 h-1 bg-white/10 rounded-full"></div>
                <div class="w-2 h-1 bg-cyan-500 rounded-full"></div>
                <div class="w-2 h-1 bg-white/10 rounded-full"></div>
            </div>
            <span class="text-[8px] font-bold text-slate-600 tracking-[0.5em] uppercase italic">Zenith Secure Comms System</span>
        </div>
    </div>

</body>
</html>