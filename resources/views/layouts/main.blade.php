<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'کمپینو') | کمپینو ایجنسی</title>
    <meta name="description" content="کمپینو ایجنسی طراحی و اجرای کمپین های تبلیغاتی 360 درجه">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-slate-950 text-slate-100 antialiased">
    <div class="relative min-h-screen overflow-hidden">
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -top-32 right-0 h-80 w-80 rounded-full bg-orange-400/20 blur-3xl"></div>
            <div class="absolute top-72 -left-16 h-72 w-72 rounded-full bg-emerald-400/15 blur-3xl"></div>
            <div class="absolute bottom-0 left-1/3 h-96 w-96 rounded-full bg-cyan-400/10 blur-3xl"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.08),transparent_50%)]"></div>
        </div>

        <x-header />

        <main class="relative z-10 pb-20">
            @if (session('success'))
                <div class="mx-auto mt-6 w-[min(95%,72rem)] rounded-2xl border border-emerald-300/40 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-100">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>

        <x-footer />
    </div>
</body>
</html>
