<x-layouts.app
    title="تعرفه خدمات کمپینو"
    description="پلن های پیشنهادی کمپینو برای اجرای کمپین های تبلیغاتی متناسب با مرحله رشد کسب و کار."
>
    <section class="space-y-8">
        <x-site.section-title
            eyebrow="تعرفه ها"
            title="پلن های ساده و شفاف برای شروع"
            description="اعداد زیر نمونه هستند و در جلسه مشاوره بر اساس نیاز واقعی شما دقیق می شوند."
        />

        <div class="grid gap-5 lg:grid-cols-3">
            <x-site.card title="پلن شروع" description="مناسب کسب و کارهای تازه وارد تبلیغات">
                <p class="mb-3 text-2xl font-black text-slate-900">از ۲۵ میلیون تومان</p>
                <ul class="space-y-2">
                    <li>طراحی استراتژی اولیه</li>
                    <li>اجرای ۲ کانال تبلیغاتی</li>
                    <li>گزارش هفتگی</li>
                </ul>
            </x-site.card>

            <x-site.card class="border-sky-300 ring-2 ring-sky-100" title="پلن رشد" description="مناسب برندهای در حال توسعه">
                <p class="mb-3 text-2xl font-black text-slate-900">از ۵۵ میلیون تومان</p>
                <ul class="space-y-2">
                    <li>طراحی فانل کامل</li>
                    <li>اجرای ۳ تا ۴ کانال تبلیغاتی</li>
                    <li>بهینه سازی مداوم کمپین</li>
                </ul>
            </x-site.card>

            <x-site.card title="پلن مقیاس" description="برای کسب و کارهای با بودجه بالا">
                <p class="mb-3 text-2xl font-black text-slate-900">از ۹۰ میلیون تومان</p>
                <ul class="space-y-2">
                    <li>مدیریت کمپین ۳۶۰ درجه</li>
                    <li>تیم اختصاصی محتوا و رسانه</li>
                    <li>جلسه تحلیل و تصمیم هفتگی</li>
                </ul>
            </x-site.card>
        </div>
    </section>

    <section class="mt-16 grid gap-5 lg:grid-cols-2">
        <x-site.card title="چه چیزی روی قیمت اثر می گذارد؟" description="حجم تولید محتوا، تعداد کانال ها، طول کمپین، و میزان اتوماسیون فروش از عوامل اصلی تعیین تعرفه هستند." />
        <x-site.card title="قبل از شروع چه اتفاقی می افتد؟" description="در یک جلسه کوتاه، هدف کمپین، KPI و سقف بودجه بررسی می شود تا بهترین پلن را پیشنهاد دهیم." />
    </section>

    <section class="mt-16">
        <x-site.cta
            title="برای دریافت قیمت دقیق آماده اید؟"
            description="درخواست کمپین را ثبت کنید تا تیم ما پلن متناسب با هدف شما را ارائه کند."
            primary-text="دریافت پیشنهاد قیمت"
            primary-url="{{ route('campaign-request') }}"
        />
    </section>
</x-layouts.app>
