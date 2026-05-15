<x-layouts.app
    title="پلتفرم های تبلیغاتی | کمپینو"
    description="معرفی پلتفرم های تبلیغاتی مناسب برای کمپین های برندینگ و پرفورمنس."
>
    <section class="space-y-8">
        <x-site.section-title
            eyebrow="پلتفرم ها"
            title="هر پلتفرم برای یک هدف مشخص"
            description="پلتفرم مناسب را بر اساس هدف کمپین، نوع مخاطب و سقف بودجه انتخاب می کنیم."
        />

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-site.card title="اینستاگرام و متا" description="برای آگاهی برند، لیدگیری سریع و ری تارگتینگ مؤثر." />
            <x-site.card title="گوگل ادز" description="برای جذب مخاطب با نیت خرید و افزایش فروش مستقیم." />
            <x-site.card title="لینکدین" description="برای کمپین های B2B و جذب لیدهای سازمانی با کیفیت." />
            <x-site.card title="تلگرام و رسانه های پیام رسان" description="برای تعامل نزدیک تر و هدایت مستقیم به فرم یا فروش." />
            <x-site.card title="آپارات و ویدیو ادز" description="برای تقویت آگاهی برند و نمایش محصول در قالب ویدیو." />
            <x-site.card title="رپورتاژ و رسانه های محتوا" description="برای ساخت اعتبار برند و پشتیبانی سئویی مسیر فروش." />
        </div>
    </section>

    <section class="mt-16 grid gap-5 lg:grid-cols-3">
        <x-site.card title="هدف: لید فوری" description="ترکیب گوگل + لندینگ اختصاصی + پیگیری فروش سریع." />
        <x-site.card title="هدف: رشد برند" description="ترکیب ویدیو، شبکه اجتماعی و کمپین های آگاهی مرحله ای." />
        <x-site.card title="هدف: فروش تکرارپذیر" description="ترکیب ری مارکتینگ، اتوماسیون و پیشنهادهای مکمل." />
    </section>

    <section class="mt-16">
        <x-site.cta
            title="پیشنهاد کانال تبلیغاتی اختصاصی می خواهید؟"
            description="فرم درخواست را پر کنید تا ترکیب رسانه ای مناسب کسب و کارتان را دریافت کنید."
            primary-text="دریافت پیشنهاد پلتفرم"
            primary-url="{{ route('campaign-request') }}"
        />
    </section>
</x-layouts.app>
