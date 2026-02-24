<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>System Initialization | ZENITH</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700;800&display=swap');

        body { font-family: 'JetBrains Mono', monospace; }

        .auth-gradient {
            background: radial-gradient(circle at 50% 50%, #0f172a 0%, #020617 100%);
        }

        /* Glass Panel with Gradient Border */
        .glass-panel {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(20px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        /* Input Animation Logic */
        .input-field:focus ~ label,
        .input-field:not(:placeholder-shown) ~ label {
            transform: translateY(-24px) scale(0.8);
            color: #22d3ee;
            letter-spacing: 0.3em;
        }

        /* Scanning Animation */
        @keyframes scan {
            0% { top: -100%; }
            100% { top: 200%; }
        }
        .scan-effect::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 20px;
            background: linear-gradient(to bottom, transparent, rgba(34, 211, 238, 0.1), transparent);
            animation: scan 4s linear infinite;
        }
    </style>
</head>
<body class="auth-gradient text-slate-300 min-h-screen flex items-center justify-center p-4 sm:p-8 relative overflow-x-hidden">

    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-cyan-500/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>
    </div>

    <div class="w-full max-w-[550px] relative z-10 animate-fade-up">
        
        <div class="text-center mb-6 sm:mb-10">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-white/5 border border-white/10 mb-4 group transition-all duration-500 hover:border-cyan-500/50 hover:shadow-[0_0_20px_rgba(34,211,238,0.2)]">
                <svg class="w-8 h-8 text-cyan-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                </svg>
            </div>
            <h1 class="text-3xl sm:text-5xl font-black tracking-[0.1em] text-white uppercase italic">Initialize</h1>
            <p class="text-slate-500 mt-2 text-[9px] sm:text-[11px] font-bold uppercase tracking-[0.5em] opacity-80">New Operator Onboarding</p>
        </div>

        <div class="glass-panel scan-effect p-6 sm:p-12 rounded-[2rem] sm:rounded-[3.5rem] relative overflow-hidden">
            
            <div class="flex gap-2 mb-10">
                <div class="h-1 flex-1 bg-cyan-500 rounded-full shadow-[0_0_10px_#22d3ee]"></div>
                <div class="h-1 flex-1 bg-cyan-500 rounded-full shadow-[0_0_10px_#22d3ee]"></div>
                <div class="h-1 flex-1 bg-white/10 rounded-full"></div>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-8">
                @csrf

                <div class="relative">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder=" " required autofocus 
                           class="input-field w-full bg-transparent border-b border-white/10 py-3 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-300">
                    <label for="name" class="absolute left-0 top-3 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-300">
                        Operator Identity
                    </label>
                </div>

                <div class="relative">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder=" " required 
                           class="input-field w-full bg-transparent border-b border-white/10 py-3 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-300">
                    <label for="email" class="absolute left-0 top-3 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-300">
                        Comm Link / Email
                    </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="relative">
                        <input id="password" type="password" name="password" placeholder=" " required 
                               class="input-field w-full bg-transparent border-b border-white/10 py-3 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-300">
                        <label for="password" class="absolute left-0 top-3 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-300">
                            Access Key
                        </label>
                    </div>

                    <div class="relative">
                        <input id="password_confirmation" type="password" name="password_confirmation" placeholder=" " required 
                               class="input-field w-full bg-transparent border-b border-white/10 py-3 text-sm text-white focus:outline-none focus:border-cyan-500 transition-all duration-300">
                        <label for="password_confirmation" class="absolute left-0 top-3 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 pointer-events-none transition-all duration-300">
                            Verify Key
                        </label>
                    </div>
                </div>

                <div class="pt-6 space-y-6">
                    <button type="submit" class="group relative w-full py-5 bg-white text-black font-black text-[11px] uppercase tracking-[0.3em] rounded-xl sm:rounded-2xl overflow-hidden transition-all duration-500 hover:bg-cyan-400 hover:text-black hover:shadow-[0_0_30px_rgba(34,211,238,0.4)] active:scale-[0.97]">
                        <span class="relative z-10">Deploy Account</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </button>

                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-[9px] font-bold uppercase tracking-[0.2em] text-slate-500 hover:text-cyan-400 transition-colors border-b border-white/5 hover:border-cyan-500 pb-1">
                            Active Operator? Sign In
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-8 sm:mt-12 flex flex-col sm:flex-row justify-between items-center gap-4 px-4 text-center sm:text-left">
            <div class="flex items-center gap-2">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                </span>
                <span class="text-[9px] font-bold uppercase tracking-widest text-slate-600">Node: 0xF24A-ZENITH</span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-[9px] font-bold uppercase tracking-widest text-slate-600">AES-256 Enabled</span>
                <span class="text-[9px] font-bold uppercase tracking-widest text-slate-600 border-l border-white/10 pl-4 italic">v4.0.2-Stable</span>
            </div>
        </div>
    </div>

</body>
</html>