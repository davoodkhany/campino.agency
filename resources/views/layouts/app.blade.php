<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'کمپینو') | Campino Agency</title>
    <meta name="description" content="کمپینو ایجنسی طراحی و اجرای کمپین های تبلیغاتی 360 درجه">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="relative overflow-clip">
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -right-24 top-24 h-[26rem] w-[26rem] rounded-full bg-[color:var(--gold)]/20 blur-[130px]"></div>
            <div class="absolute left-[-7rem] top-[30rem] h-[28rem] w-[28rem] rounded-full bg-[color:var(--purple-light)]/24 blur-[120px]"></div>
            <div class="absolute right-1/3 top-[60rem] h-[26rem] w-[26rem] rounded-full bg-[color:var(--purple)]/24 blur-[120px]"></div>
        </div>

        <x-header />

        <main class="relative z-10 pb-24">
            @if (session('success'))
                <div class="container-shell mt-7">
                    <div class="premium-glass rounded-2xl px-5 py-4 text-sm font-semibold text-[color:var(--gold-light)]">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @yield('content')
        </main>

        <x-footer />
    </div>
</body>
</html>
