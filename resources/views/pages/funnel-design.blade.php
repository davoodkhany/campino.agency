@extends('layouts.app')

@section('title', 'طراحی فانل')

@section('content')
    <section class="mx-auto mt-12 grid w-[min(95%,72rem)] gap-8 lg:grid-cols-2 lg:items-center">
        <div>
            <x-section-title
                kicker="Funnel Design"
                title="طراحی فانل فروش بر اساس رفتار واقعی مخاطب"
                description="به جای کمپین های پراکنده، یک مسیر دقیق می سازیم تا مخاطب مرحله به مرحله جلو بیاد و تبدیل بشه."
            />
            <p class="mt-6 text-sm leading-8 text-slate-300">
                از صفحه فرود و پیام تبلیغ تا تماس فروش، تمام نقاط تماس کاربر رو به هم متصل می کنیم تا نرخ ریزش پایین بیاد.
            </p>
        </div>

        <div class="rounded-3xl border border-white/10 bg-slate-900/70 p-6">
            <h3 class="text-lg font-bold text-white">خروجی این سرویس</h3>
            <ul class="mt-4 space-y-3 text-sm text-slate-300">
                <li>• نقشه کامل قیف جذب و فروش</li>
                <li>• پیام مناسب برای هر مرحله قیف</li>
                <li>• پیشنهاد بهینه سازی صفحات فرود</li>
                <li>• KPIهای اصلی برای پایش هفتگی</li>
            </ul>
        </div>
    </section>

    <section class="mx-auto mt-14 w-[min(95%,72rem)]">
        <div class="grid gap-4 md:grid-cols-4">
            <x-card title="آگاهی" icon="A1" description="جذب مخاطب درست با پیام و کانال مناسب" />
            <x-card title="علاقه" icon="A2" description="ایجاد تعامل با محتوا و پیشنهاد اولیه" />
            <x-card title="اقدام" icon="A3" description="هدایت کاربر به ثبت نام، فرم یا تماس" />
            <x-card title="خرید" icon="A4" description="هم راستا کردن فروش برای بستن معامله" />
        </div>
    </section>

    <section class="mx-auto mt-14 w-[min(95%,72rem)]">
        <x-cta
            title="اگر نرخ تبدیل پایین مونده، از فانل شروع کنیم"
            description="با تحلیل قیف فعلی، نقاط ریزش رو پیدا می کنیم و پلن بهبود سریع می دیم."
            primary-text="درخواست طراحی فانل"
            :primary-href="route('campaign-request')"
        />
    </section>
@endsection
