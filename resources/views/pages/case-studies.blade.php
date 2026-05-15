<x-layouts.app
    title="نمونه کارهای کمپینو | Case Studies"
    description="نمونه پروژه های اجرا شده در کمپینو با تمرکز روی نتایج واقعی."
>
    <section class="space-y-8">
        <x-site.section-title
            eyebrow="نمونه کارها"
            title="نمونه کمپین های اجرا شده"
            description="این اعداد نمونه هستند و برای نمایش ساختار صفحه قرار گرفته اند."
        />

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-site.card title="برند آموزشی آنلاین">
                <p>هدف: افزایش ثبت نام دوره</p>
                <p>نتیجه: رشد ۱۷۰٪ ثبت لید در ۶ هفته</p>
                <p>نقطه قوت: بازطراحی لندینگ و پیام های پیگیری</p>
            </x-site.card>

            <x-site.card title="فروشگاه محصولات آرایشی">
                <p>هدف: کاهش هزینه جذب مشتری</p>
                <p>نتیجه: کاهش ۳۸٪ CAC در ۲ ماه</p>
                <p>نقطه قوت: تقسیم بودجه مرحله ای بین کانال ها</p>
            </x-site.card>

            <x-site.card title="شرکت نرم افزاری B2B">
                <p>هدف: افزایش دموهای فروش</p>
                <p>نتیجه: ۲.۱ برابر شدن درخواست دمو</p>
                <p>نقطه قوت: تبلیغات لینکدین + پرورش لید</p>
            </x-site.card>
        </div>
    </section>

    <section class="mt-16 grid gap-5 lg:grid-cols-2">
        <x-site.card title="چرا این نتایج تکرار می شوند؟" description="ما فقط تبلیغ اجرا نمی کنیم. قبل از اجرا پیام و صفحه فرود را هم اصلاح می کنیم تا کیفیت لید بالا برود." />
        <x-site.card title="گزارش دهی در پروژه ها" description="هر هفته عملکرد کانال ها، بودجه مصرفی و تصمیم بعدی را شفاف ارائه می کنیم." />
    </section>

    <section class="mt-16">
        <x-site.cta
            title="می خواهید برند شما نمونه کار بعدی باشد؟"
            description="کافی است هدف و بودجه را برای ما بفرستید تا مسیر پیشنهادی کمپین را ارائه کنیم."
            primary-text="شروع پروژه"
            primary-url="{{ route('campaign-request') }}"
        />
    </section>
</x-layouts.app>
