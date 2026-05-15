@extends('layouts.app')

@section('title', 'تماس')

@section('content')
    <section class="container-shell mt-12 grid gap-7 lg:grid-cols-[.9fr_1.1fr]">
        <aside class="space-y-6">
            <div class="dark-surface rounded-[2rem] p-7">
                <x-section-title
                    kicker="Contact Campino"
                    title="برای مشاوره یا شروع همکاری پیام بده"
                    description="تیم فروش و استراتژی کمپینو آماده است تا مسیر رشد برندت را بررسی کنه."
                />
            </div>

            <div class="premium-card rounded-[2rem] p-6">
                <h3 class="text-lg font-black text-[color:var(--ink)]">راه های ارتباطی</h3>
                <ul class="mt-4 space-y-3 text-sm leading-7 text-[color:var(--ink)]/84">
                    <li><span class="font-black">تلفن:</span> 021-88888888</li>
                    <li><span class="font-black">ایمیل:</span> hello@campino.agency</li>
                    <li><span class="font-black">آدرس:</span> تهران، ونک، خیابان ملاصدرا، پلاک 42</li>
                    <li><span class="font-black">ساعت پاسخ گویی:</span> شنبه تا چهارشنبه، 9 تا 18</li>
                </ul>
            </div>
        </aside>

        <form action="{{ route('contact.submit') }}" method="POST" class="dark-surface rounded-[2rem] p-6 md:p-8">
            @csrf

            <h3 class="text-2xl font-black text-white">فرم تماس با تیم کمپینو</h3>
            <p class="mt-3 text-sm text-[color:var(--gold-light)]/88">پیام شما مستقیم برای تیم مربوطه ارسال می شه.</p>

            <div class="mt-7 grid gap-4 md:grid-cols-2">
                <x-forms.input name="full_name" label="نام و نام خانوادگی" placeholder="مثال: سارا کریمی" :required="true" />
                <x-forms.input name="phone" label="شماره تماس" placeholder="مثال: 09121234567" />
                <x-forms.input name="email" type="email" label="ایمیل" placeholder="مثال: you@example.com" />
                <x-forms.input name="subject" label="موضوع" placeholder="مثال: مشاوره کمپین فروش" :required="true" />
            </div>

            <div class="mt-4">
                <x-forms.textarea name="message" label="پیام" placeholder="پیام خودت رو بنویس..." :required="true" :rows="6" />
            </div>

            <div class="mt-7 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-xs text-[color:var(--gold-light)]/75">حداقل یکی از فیلدهای شماره تماس یا ایمیل باید تکمیل بشه.</p>
                <x-forms.submit text="ارسال پیام" />
            </div>
        </form>
    </section>
@endsection
