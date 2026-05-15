<x-layouts.app
    title="تماس با کمپینو"
    description="راه های ارتباطی با تیم کمپینو و فرم ارسال پیام."
>
    <section class="grid gap-8 lg:grid-cols-5">
        <div class="space-y-6 lg:col-span-2">
            <x-site.section-title
                eyebrow="تماس با ما"
                title="هر سوالی دارید، مستقیم بپرسید"
                description="برای مشاوره، پشتیبانی یا همکاری، پیام شما را سریع بررسی می کنیم."
            />

            <x-site.card title="تلفن و واتساپ">
                <p>۰۲۱-۸۸۰۰۱۲۳۴</p>
                <p>۰۹۱۲۱۲۳۴۵۶۷</p>
            </x-site.card>

            <x-site.card title="ایمیل">
                <p>hello@campino.agency</p>
                <p>sales@campino.agency</p>
            </x-site.card>

            <x-site.card title="ساعت پاسخگویی" description="شنبه تا چهارشنبه، ۹ صبح تا ۶ عصر" />
        </div>

        <div class="lg:col-span-3">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="نام" name="name" placeholder="نام شما" required="true" />
                    <x-site.forms.input label="موضوع" name="subject" placeholder="موضوع پیام" required="true" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="شماره تماس" name="phone" placeholder="۰۹۱۲۱۲۳۴۵۶۷" />
                    <x-site.forms.input label="ایمیل" name="email" type="email" placeholder="name@example.com" />
                </div>

                <x-site.forms.textarea label="متن پیام" name="message" placeholder="پیام خود را اینجا بنویسید" :rows="6" required="true" />

                <p class="text-xs text-slate-500">حداقل یکی از فیلدهای تماس (شماره یا ایمیل) را وارد کنید.</p>

                <button type="submit" class="w-full rounded-xl bg-sky-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-sky-700 sm:w-auto">
                    ارسال پیام
                </button>
            </form>
        </div>
    </section>
</x-layouts.app>
