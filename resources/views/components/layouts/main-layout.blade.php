<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop | The Future of Computing</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        /* Custom CSS-only "Floating" and "Fade-in" Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up { animation: fadeInUp 1s ease-out forwards; }
        
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-slate-950 text-white font-sans overflow-x-hidden">

<x-common.header/>

   {{$slot}}
<x-common.footer/>   
</body>
</html>