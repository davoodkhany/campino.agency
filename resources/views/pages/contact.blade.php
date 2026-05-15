<x-layouts.app
    title="تماس با کمپینو"
    description="ارسال پیام، سوال یا درخواست همکاری برای تیم کمپینو."
>
    <section class="grid gap-8 lg:grid-cols-5">
        <div class="space-y-6 lg:col-span-2">
            <x-site.section-title
                eyebrow="ارتباط با ما"
                title="سوال یا درخواست دارید؟ پیام بفرستید"
                description="از طریق فرم زیر پیام خود را ثبت کنید. همکاران ما در اولین فرصت پاسخ می دهند."
            />

            <x-site.card title="راه های ارتباطی">
                <p>تلفن: ۰۲۱-۸۸۰۰۱۲۳۴</p>
                <p>واتساپ: ۰۹۱۲۱۲۳۴۵۶۷</p>
                <p>ایمیل: hello@campino.agency</p>
            </x-site.card>
        </div>

        <div class="lg:col-span-3">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="نام و نام خانوادگی" name="full_name" placeholder="نام شما" required="true" />
                    <x-site.forms.input label="موضوع" name="subject" placeholder="موضوع پیام" required="true" />
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <x-site.forms.input label="شماره تماس" name="phone" placeholder="۰۹۱۲۱۲۳۴۵۶۷" />
                    <x-site.forms.input label="ایمیل" name="email" type="email" placeholder="name@example.com" />
                </div>

                <x-site.forms.textarea
                    label="متن پیام"
                    name="message"
                    placeholder="پیام خود را اینجا بنویسید."
                    :rows="6"
                    required="true"
                />

                <p class="text-xs text-slate-500">حداقل یکی از فیلدهای شماره تماس یا ایمیل را وارد کنید.</p>

                <button type="submit" class="w-full rounded-xl bg-sky-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-sky-700 sm:w-auto">
                    ارسال پیام
                </button>
            </form>
        </div>
    </section>
</x-layouts.app>
