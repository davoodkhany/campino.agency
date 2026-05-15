@extends('layouts.main')

@section('title', 'تعرفه ها')

@section('content')
    <section class="mx-auto mt-12 w-[min(95%,72rem)]">
        <x-section-title
            kicker="Pricing"
            title="تعرفه های شروع همکاری با کمپینو"
            description="اعداد زیر نمونه ان و برای MVP ثبت شدن. جزئیات نهایی بعد از جلسه شناخت مشخص می شه."
            :center="true"
        />

        <div class="mt-10 grid gap-5 lg:grid-cols-3">
            <x-card title="پلن شروع" icon="B1" class="relative">
                <p class="font-bold text-orange-300">ماهانه 25 میلیون تومان</p>
                <ul class="mt-4 space-y-2 text-sm">
                    <li>• استراتژی اولیه کمپین</li>
                    <li>• مدیریت 2 کانال تبلیغاتی</li>
                    <li>• گزارش هفتگی</li>
                </ul>
            </x-card>

            <x-card title="پلن رشد" icon="B2" class="relative border-orange-300/40 bg-orange-400/10">
                <span class="absolute left-4 top-4 rounded-full bg-orange-400 px-3 py-1 text-xs font-bold text-slate-950">پیشنهادی</span>
                <p class="font-bold text-orange-200">ماهانه 45 میلیون تومان</p>
                <ul class="mt-4 space-y-2 text-sm">
                    <li>• طراحی کامل فانل فروش</li>
                    <li>• مدیریت 4 کانال تبلیغاتی</li>
                    <li>• بهینه سازی روزانه و داشبورد</li>
                </ul>
            </x-card>

            <x-card title="پلن مقیاس" icon="B3" class="relative">
                <p class="font-bold text-orange-300">سفارشی</p>
                <ul class="mt-4 space-y-2 text-sm">
                    <li>• تیم اختصاصی چندتخصصی</li>
                    <li>• تبلیغات چندبازاری و چندبرندی</li>
                    <li>• جلسه استراتژی هفتگی مدیران</li>
                </ul>
            </x-card>
        </div>
    </section>

    <section class="mx-auto mt-14 w-[min(95%,72rem)]">
        <x-cta
            title="برای انتخاب پلن مطمئن نیستی؟"
            description="شرایط فعلی برندت رو بگو تا ترکیب خدمات مناسب و بودجه واقع بینانه پیشنهاد بدیم."
            primary-text="درخواست پلن پیشنهادی"
            :primary-href="route('campaign-request')"
        />
    </section>
@endsection
