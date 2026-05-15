<x-layouts.app
    title="بلاگ کمپینو | آموزش تبلیغات و کمپین"
    description="مقالات آموزشی کمپینو درباره طراحی کمپین، بهینه سازی تبلیغات و افزایش فروش."
>
    <section class="space-y-8">
        <x-site.section-title
            eyebrow="بلاگ"
            title="محتوای آموزشی برای تصمیم های بهتر تبلیغاتی"
            description="این نوشته ها فعلا نمونه هستند تا ساختار صفحه بلاگ در MVP آماده باشد."
        />

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-site.card title="۵ اشتباه رایج در اجرای کمپین اولین بار">
                <p>دسته بندی: استراتژی</p>
                <p>زمان مطالعه: ۷ دقیقه</p>
                <a href="#" class="mt-3 inline-flex text-sm font-semibold text-sky-700 hover:text-sky-800">ادامه مطلب</a>
            </x-site.card>

            <x-site.card title="چطور کیفیت لید را قبل از تماس فروش بالا ببریم؟">
                <p>دسته بندی: لید جنریشن</p>
                <p>زمان مطالعه: ۵ دقیقه</p>
                <a href="#" class="mt-3 inline-flex text-sm font-semibold text-sky-700 hover:text-sky-800">ادامه مطلب</a>
            </x-site.card>

            <x-site.card title="راهنمای سریع انتخاب پلتفرم تبلیغاتی مناسب">
                <p>دسته بندی: رسانه</p>
                <p>زمان مطالعه: ۸ دقیقه</p>
                <a href="#" class="mt-3 inline-flex text-sm font-semibold text-sky-700 hover:text-sky-800">ادامه مطلب</a>
            </x-site.card>
        </div>
    </section>

    <section class="mt-16 grid gap-5 lg:grid-cols-2">
        <x-site.card title="خبرنامه کمپینو" description="مقالات جدید و نکات اجرایی تبلیغات را ماهی یک بار در ایمیل دریافت کنید." />
        <x-site.card title="موضوعات محبوب" description="فانل تبلیغاتی، KPI کمپین، بهینه سازی هزینه جذب و تحلیل عملکرد کانال ها." />
    </section>

    <section class="mt-16">
        <x-site.cta
            title="به محتوای کاربردی بیشتری نیاز دارید؟"
            description="با ثبت درخواست، تیم ما بر اساس صنعت شما منابع آموزشی مرتبط معرفی می کند."
            primary-text="ثبت درخواست مشاوره"
            primary-url="{{ route('campaign-request') }}"
        />
    </section>
</x-layouts.app>
