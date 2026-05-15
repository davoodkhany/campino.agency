<x-layouts.app
    title="کمپینو | آژانس کمپین ۳۶۰ درجه"
    description="کمپینو به برندها کمک می کند با طراحی فانل و اجرای تبلیغات، فروش پایدارتری بسازند."
>
    <section class="grid gap-8 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm lg:grid-cols-2 lg:p-10">
        <div class="space-y-5">
            <p class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-700">کمپینو، شریک رشد برند شما</p>
            <h1 class="text-3xl font-black leading-tight text-slate-900 sm:text-4xl">
                از آگاهی تا خرید، یک کمپین منسجم و قابل اندازه گیری
            </h1>
            <p class="text-base leading-8 text-slate-600">
                ما مسیر تبلیغات شما را با استراتژی، تولید محتوا، اجرای رسانه ای و تحلیل داده یکپارچه می کنیم تا سرنخ بیشتر و فروش واقعی بگیرید.
            </p>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('campaign-request') }}" class="rounded-full bg-sky-600 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-sky-700">شروع کمپین</a>
                <a href="{{ route('services') }}" class="rounded-full border border-slate-300 px-5 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-sky-300 hover:text-sky-700">مشاهده خدمات</a>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <x-site.card title="بیش از ۸۰ کمپین موفق" description="تجربه اجرای کمپین در حوزه های فروشگاهی، آموزشی و B2B." />
            <x-site.card title="افزایش میانگین ۲.۴ برابری لید" description="تمرکز ما روی نرخ تبدیل و کیفیت سرنخ است، نه فقط بازدید." />
            <x-site.card title="گزارش شفاف هفتگی" description="هزینه، نتایج و تصمیم های بعدی را شفاف گزارش می دهیم." class="sm:col-span-2" />
        </div>
    </section>

    <section class="mt-16 space-y-8">
        <x-site.section-title
            eyebrow="خدمات اصلی"
            title="هر چیزی که برای اجرای کمپین نیاز دارید"
            description="از استراتژی تا اجرا و بهینه سازی را با یک تیم منسجم جلو می بریم."
        />

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-site.card title="استراتژی کمپین" description="تحلیل بازار، تعریف پرسونای مشتری و چیدن مسیر جذب تا خرید." />
            <x-site.card title="تولید محتوا" description="سناریو، طراحی ویدیو و محتوای تبلیغاتی برای هر پلتفرم." />
            <x-site.card title="مدیریت رسانه" description="اجرای تبلیغات در پلتفرم های منتخب با کنترل بودجه روزانه." />
            <x-site.card title="طراحی فانل" description="ساخت لندینگ، پیام های پیگیری و مسیر تبدیل لید به مشتری." />
            <x-site.card title="اتوماسیون فروش" description="یکپارچه سازی فرم ها و پیگیری سریع تیم فروش." />
            <x-site.card title="بهینه سازی داده محور" description="A/B تست، تحلیل رفتار و اصلاح مداوم برای کاهش CAC." />
        </div>
    </section>

    <section class="mt-16 space-y-8">
        <x-site.section-title
            eyebrow="فرایند کار"
            title="کمپین شما در ۴ مرحله جلو می رود"
            description="ساختار اجرایی ساده، سریع و قابل پیگیری برای تیم بازاریابی شما."
        />

        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
            <x-site.card title="۱. جلسه کشف" description="هدف فروش، بودجه و محدودیت ها را شفاف می کنیم." />
            <x-site.card title="۲. طراحی برنامه" description="رسانه ها، پیام کلیدی و شاخص های عملکرد تعیین می شود." />
            <x-site.card title="۳. اجرا و پایش" description="کمپین راه اندازی می شود و روزانه بهینه سازی انجام می شود." />
            <x-site.card title="۴. رشد و مقیاس" description="کانال های موفق را بزرگ می کنیم و هزینه کانال های ضعیف را کم می کنیم." />
        </div>
    </section>

    <section class="mt-16">
        <x-site.cta
            title="برای کمپین بعدی آماده اید؟"
            description="در کمتر از ۳ دقیقه درخواست خود را ثبت کنید تا تیم ما پلن پیشنهادی اولیه را برای شما آماده کند."
            primary-text="ثبت درخواست کمپین"
            primary-url="{{ route('campaign-request') }}"
            secondary-text="تماس با ما"
            secondary-url="{{ route('contact') }}"
        />
    </section>
</x-layouts.app>
