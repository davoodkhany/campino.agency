<footer class="border-t border-slate-200 bg-white">
    <div class="mx-auto grid w-full max-w-7xl gap-8 px-4 py-10 sm:px-6 md:grid-cols-2 lg:grid-cols-4 lg:px-8">
        <div class="space-y-3">
            <h3 class="text-base font-bold text-slate-900">کمپینو</h3>
            <p class="text-sm leading-7 text-slate-600">
                آژانس کمپین ۳۶۰ درجه برای برندهایی که می خواهند از تبلیغات نتیجه واقعی بگیرند.
            </p>
        </div>

        <div>
            <h3 class="text-sm font-semibold text-slate-900">مسیرهای مهم</h3>
            <ul class="mt-3 space-y-2 text-sm text-slate-600">
                <li><a class="hover:text-sky-700" href="{{ route('services') }}">خدمات</a></li>
                <li><a class="hover:text-sky-700" href="{{ route('funnel-design') }}">طراحی فانل</a></li>
                <li><a class="hover:text-sky-700" href="{{ route('case-studies') }}">نمونه کارها</a></li>
                <li><a class="hover:text-sky-700" href="{{ route('blog') }}">بلاگ</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-sm font-semibold text-slate-900">در ارتباط باشیم</h3>
            <ul class="mt-3 space-y-2 text-sm text-slate-600">
                <li>تلفن: ۰۲۱-۸۸۰۰۱۲۳۴</li>
                <li>واتساپ: ۰۹۱۲۱۲۳۴۵۶۷</li>
                <li>ایمیل: hello@campino.agency</li>
            </ul>
        </div>

        <div>
            <h3 class="text-sm font-semibold text-slate-900">شروع سریع</h3>
            <p class="mt-3 text-sm text-slate-600">برای شروع همکاری فرم درخواست کمپین را پر کنید.</p>
            <a href="{{ route('campaign-request') }}" class="mt-4 inline-flex rounded-full bg-emerald-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-emerald-700">
                شروع همکاری
            </a>
        </div>
    </div>

    <div class="border-t border-slate-100">
        <p class="mx-auto w-full max-w-7xl px-4 py-4 text-center text-xs text-slate-500 sm:px-6 lg:px-8">
            © {{ now()->year }} کمپینو. همه حقوق محفوظ است.
        </p>
    </div>
</footer>
