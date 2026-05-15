@props([
    'title' => 'کمپینو | آژانس تبلیغاتی ۳۶۰ درجه',
    'description' => 'کمپینو به شما کمک می کند از اولین سرنخ تا فروش نهایی یک کمپین تبلیغاتی کامل اجرا کنید.',
])

<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description }}">
    <title>{{ $title }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-full bg-slate-50 text-slate-900 antialiased">
    <div class="relative isolate min-h-screen overflow-x-hidden">
        <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-96 bg-gradient-to-b from-cyan-100 via-slate-50 to-transparent"></div>

        <x-site.header />

        <main class="mx-auto w-full max-w-7xl px-4 pb-16 pt-10 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
                    {{ session('success') }}
                </div>
            @endif

            {{ $slot }}
        </main>

        <x-site.footer />
    </div>
</body>
</html>
