<x-layouts.app
    title="طراحی فانل تبلیغاتی | کمپینو"
    description="طراحی فانل تبلیغاتی برای تبدیل بازدیدکننده به سرنخ و سرنخ به مشتری."
>
    <section class="space-y-8">
        <x-site.section-title
            eyebrow="طراحی فانل"
            title="فانل تبلیغاتی قابل اجرا، نه فقط یک دیاگرام"
            description="برای هر کسب و کار، مسیر مخاطب را از اولین برخورد تا خرید و پیگیری بعد از خرید طراحی می کنیم."
        />

        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-5">
            <x-site.card title="۱. جذب" description="جذب مخاطب درست با پیام و خلاقه مناسب هر کانال." />
            <x-site.card title="۲. تعامل" description="ایجاد اعتماد با محتوای آموزشی، نمونه کار و پیشنهاد اولیه." />
            <x-site.card title="۳. دریافت لید" description="فرم های ساده و پیشنهاد واضح برای گرفتن اطلاعات تماس." />
            <x-site.card title="۴. پیگیری" description="سناریوی پیگیری فروش با تماس، پیامک یا واتساپ در زمان مناسب." />
            <x-site.card title="۵. تبدیل و نگهداشت" description="بستن فروش و طراحی پیشنهادهای تکرار خرید برای مشتری فعلی." />
        </div>
    </section>

    <section class="mt-16 grid gap-5 lg:grid-cols-2">
        <x-site.card title="مشکلات رایج قبل از طراحی فانل" description="هزینه تبلیغات بالا می رود ولی لید بی کیفیت می آید. تیم فروش هم زمان زیادی را برای پیگیری های کم نتیجه می گذارد." />
        <x-site.card title="نتیجه بعد از پیاده سازی فانل" description="کیفیت لیدها بهتر می شود، زمان پیگیری هدفمندتر می شود و نرخ تبدیل فروش رشد می کند." />
    </section>

    <section class="mt-16">
        <x-site.cta
            title="فانل اختصاصی برندتان را طراحی کنیم"
            description="برای طراحی فانل، فقط کافی است هدف فروش و منابع فعلی شما را بدانیم."
            primary-text="ثبت درخواست فانل"
            primary-url="{{ route('campaign-request') }}"
            secondary-text="مشاهده تعرفه"
            secondary-url="{{ route('pricing') }}"
        />
    </section>
</x-layouts.app>
