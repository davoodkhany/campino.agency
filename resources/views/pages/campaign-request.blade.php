<x-layouts.app
    title="درخواست کمپین | کمپینو"
    description="فرم ثبت درخواست کمپین کمپینو برای بررسی نیاز تبلیغاتی و شروع همکاری."
>
    <section class="grid gap-8 lg:grid-cols-5">
        <div class="space-y-6 lg:col-span-2">
            <x-site.section-title
                eyebrow="ثبت درخواست"
                title="جزئیات کمپین را برای ما بفرستید"
                description="این فرم کوتاه کمک می کند تیم ما سریع تر نیاز شما را تحلیل کند و پیشنهاد اولیه دقیق تری بدهد."
            />

            <x-site.card title="بعد از ثبت فرم چه می شود؟">
                <ul class="space-y-2">
                    <li>بررسی اطلاعات توسط تیم استراتژی</li>
                    <li>تماس اولیه در اولین روز کاری</li>
                    <li>ارسال مسیر پیشنهادی همکاری</li>
                </ul>
            </x-site.card>
        </div>

        <div class="lg:col-span-3">
            <form action="{{ route('campaign-request.submit') }}" method="POST" class="space-y-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="نام برند" name="brand_name" placeholder="مثال: کمپینو" required="true" />
                    <x-site.forms.input label="نام و نام خانوادگی" name="full_name" placeholder="مثال: مریم رضایی" required="true" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="شماره تماس" name="phone" placeholder="۰۹۱۲۱۲۳۴۵۶۷" required="true" />
                    <x-site.forms.input label="ایمیل" name="email" type="email" placeholder="name@example.com" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="نوع کسب و کار" name="business_type" placeholder="مثال: فروشگاه اینترنتی" required="true" />
                    <x-site.forms.input label="نام محصول یا خدمت" name="product_name" placeholder="مثال: دوره آموزشی آنلاین" required="true" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="بازه قیمت محصول" name="product_price" placeholder="مثال: ۲ تا ۵ میلیون تومان" required="true" />
                    <x-site.forms.input label="بودجه تخمینی" name="estimated_budget" placeholder="مثال: ماهانه ۷۰ میلیون تومان" required="true" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.select
                        label="هدف کمپین"
                        name="campaign_goal"
                        required="true"
                        :options="[
                            'افزایش فروش' => 'افزایش فروش',
                            'جذب سرنخ' => 'جذب سرنخ',
                            'افزایش آگاهی برند' => 'افزایش آگاهی برند',
                            'معرفی محصول جدید' => 'معرفی محصول جدید',
                        ]"
                    />
                    <x-site.forms.input label="مدت زمان کمپین" name="campaign_duration" placeholder="مثال: ۳ ماه" required="true" />
                </div>

                <x-site.forms.input label="آدرس وب سایت" name="website_url" placeholder="https://example.com" />

                <x-site.forms.textarea
                    label="کانال های فعلی تبلیغات"
                    name="current_channels"
                    placeholder="مثال: اینستاگرام، گوگل ادز، پیامک"
                    :rows="3"
                />

                <x-site.forms.textarea
                    label="توضیحات"
                    name="description"
                    placeholder="چالش فعلی، هدف دقیق یا هر نکته مهم را بنویسید."
                    :rows="6"
                    required="true"
                />

                <button type="submit" class="w-full rounded-xl bg-sky-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-sky-700 sm:w-auto">
                    ارسال درخواست کمپین
                </button>
            </form>
        </div>
    </section>
</x-layouts.app>
