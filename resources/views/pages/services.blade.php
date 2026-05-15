<x-layouts.app
    title="خدمات کمپینو | راهکارهای تبلیغات و رشد"
    description="معرفی خدمات کمپینو در طراحی و اجرای کمپین های تبلیغاتی ۳۶۰ درجه."
>
    <section class="space-y-8">
        <x-site.section-title
            eyebrow="خدمات"
            title="سرویس های کامل برای رشد پایدار برند"
            description="هر سرویس برای یک گره مهم در مسیر جذب و تبدیل طراحی شده تا خروجی فروش بهتر شود."
        />

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-site.card title="استراتژی تبلیغات" description="تحلیل رفتار مخاطب و انتخاب کانال های مناسب برای هدف فروش شما." />
            <x-site.card title="مدیریت بودجه رسانه" description="تقسیم هوشمند بودجه بین پلتفرم ها با هدف کاهش هزینه جذب." />
            <x-site.card title="طراحی لندینگ پیج" description="لندینگ های سریع و متقاعدکننده برای جمع آوری لید با کیفیت." />
            <x-site.card title="تولید محتوای کمپین" description="ساخت محتوا برای ویدیو، بنر، استوری و تبلیغات تعاملی." />
            <x-site.card title="بهینه سازی نرخ تبدیل" description="تحلیل قیف، تست پیام و ارتقای صفحات برای افزایش ثبت درخواست." />
            <x-site.card title="گزارش و تحلیل" description="داشبورد قابل فهم با توصیه های اجرایی برای تصمیم گیری سریع تر." />
        </div>
    </section>

    <section class="mt-16 grid gap-5 lg:grid-cols-2">
        <x-site.card title="خروجی که تحویل می گیرید">
            <ul class="space-y-2">
                <li>پلن کمپین ۳۰ تا ۹۰ روزه</li>
                <li>تقویم محتوایی و پیام های تبلیغاتی</li>
                <li>نقشه فانل جذب تا خرید</li>
                <li>گزارش هفتگی همراه پیشنهاد اصلاح</li>
            </ul>
        </x-site.card>

        <x-site.card title="این خدمات برای چه کسب و کارهایی مناسب است؟">
            <ul class="space-y-2">
                <li>برندهای در حال رشد که تیم مارکتینگ کوچک دارند</li>
                <li>کسب و کارهایی که از تبلیغات خروجی ثابت نمی گیرند</li>
                <li>شرکت هایی که می خواهند KPI محور تصمیم بگیرند</li>
                <li>فروشگاه های آنلاین با هدف افزایش فروش ماهانه</li>
            </ul>
        </x-site.card>
    </section>

    <section class="mt-16">
        <x-site.cta
            title="خدمت مناسب کسب و کار شما کدام است؟"
            description="درخواست جلسه کوتاه بدهید تا بر اساس هدف و بودجه، بهترین ترکیب خدمات را پیشنهاد دهیم."
            primary-text="درخواست مشاوره"
            primary-url="{{ route('campaign-request') }}"
        />
    </section>
</x-layouts.app>
