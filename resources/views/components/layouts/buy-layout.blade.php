<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Command Center | ZENITH OS</title>
    
    <style>
        /* Custom scrollbar for that sleek tech feel */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #020617; }
        ::-webkit-scrollbar-thumb { 
            background: #1e293b; 
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover { background: #22d3ee; }

        .dashboard-bg {
            background-color: #020617;
            background-image: 
                radial-gradient(at 0% 0%, rgba(34, 211, 238, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(59, 130, 246, 0.05) 0px, transparent 50%);
        }

        /* Ambient grid pattern */
        .grid-overlay {
            background-image: linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="dashboard-bg text-slate-300 font-sans flex h-screen overflow-hidden">

    <aside class="flex-shrink-0 z-50">
        <x-common.admin-sidebar />
    </aside>

    <div class="flex-1 flex flex-col min-w-0 relative">
        <div class="absolute inset-0 grid-overlay pointer-events-none"></div>

        <header class="relative z-40">
            <x-common.admin-header />
        </header>

        <main class="flex-1 overflow-y-auto relative z-10 custom-scrollbar">
            <div class="p-6 lg:p-10 max-w-[1600px] mx-auto w-full">
                
                <div class="mb-8">
                    <h2 class="text-xs font-black uppercase tracking-[0.4em] text-cyan-500/80 mb-2">System Telemetry</h2>
                    <h1 class="text-3xl font-bold text-white tracking-tight">Executive Overview</h1>
                </div>

                <div class="animate-in fade-in slide-in-from-bottom-4 duration-700">
                    {{ $slot }}
                </div>

                <footer class="mt-20 py-6 border-t border-white/5 flex justify-between items-center opacity-40">
                    <p class="text-[9px] font-mono tracking-widest uppercase">Zenith Kernel v4.2.0-stable</p>
                    <p class="text-[9px] font-mono tracking-widest uppercase">Encrypted Connection: TLS 1.3</p>
                </footer>
            </div>
        </main>
    </div>

</body>
</html>