<x-layouts.app
    title="درخواست کمپین | کمپینو"
    description="فرم درخواست کمپین کمپینو برای بررسی سریع نیاز تبلیغاتی و ارائه پلن اولیه."
>
    <section class="grid gap-8 lg:grid-cols-5">
        <div class="space-y-6 lg:col-span-2">
            <x-site.section-title
                eyebrow="درخواست کمپین"
                title="چند دقیقه زمان بگذارید تا مسیر رشدتان را دقیق طراحی کنیم"
                description="فرم زیر را کامل کنید تا تیم کمپینو ظرف یک روز کاری با شما تماس بگیرد."
            />

            <x-site.card title="چه اطلاعاتی لازم داریم؟">
                <ul class="space-y-2">
                    <li>هدف اصلی کمپین و نتیجه مدنظر</li>
                    <li>بودجه تقریبی ماهانه</li>
                    <li>مخاطب هدف یا پرسونای اصلی</li>
                    <li>چالش فعلی در تبلیغات</li>
                </ul>
            </x-site.card>

            <x-site.card title="تعهد ما" description="بعد از ثبت فرم، یک جلسه کوتاه ۲۰ دقیقه ای برای بررسی شرایط شما هماهنگ می کنیم." />
        </div>

        <div class="lg:col-span-3">
            <form action="{{ route('campaign-request.submit') }}" method="POST" class="space-y-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="نام و نام خانوادگی" name="full_name" placeholder="مثال: مریم صادقی" required="true" />
                    <x-site.forms.input label="نام شرکت" name="company" placeholder="مثال: فروشگاه نمونه" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="شماره تماس" name="phone" placeholder="۰۹۱۲۱۲۳۴۵۶۷" required="true" />
                    <x-site.forms.select
                        label="بودجه ماهانه"
                        name="budget"
                        :options="[
                            'کمتر از ۳۰ میلیون' => 'کمتر از ۳۰ میلیون',
                            '۳۰ تا ۷۰ میلیون' => '۳۰ تا ۷۰ میلیون',
                            '۷۰ تا ۱۵۰ میلیون' => '۷۰ تا ۱۵۰ میلیون',
                            'بیشتر از ۱۵۰ میلیون' => 'بیشتر از ۱۵۰ میلیون',
                        ]"
                    />
                </div>

                <x-site.forms.input label="هدف اصلی کمپین" name="goal" placeholder="مثال: افزایش لید با کیفیت برای تیم فروش" required="true" />

                <x-site.forms.textarea
                    label="توضیحات تکمیلی"
                    name="description"
                    placeholder="وضعیت فعلی تبلیغات، کانال های مورد استفاده یا هر نکته مهم را بنویسید."
                    :rows="6"
                    required="true"
                />

                <button type="submit" class="w-full rounded-xl bg-sky-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-sky-700 sm:w-auto">
                    ارسال درخواست
                </button>
            </form>
        </div>
    </section>
</x-layouts.app>
