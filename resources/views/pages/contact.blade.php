@extends('layouts.main')

@section('title', 'تماس')

@section('content')
    <section class="mx-auto mt-12 grid w-[min(95%,72rem)] gap-8 lg:grid-cols-[.9fr_1.1fr]">
        <div>
            <x-section-title
                kicker="Contact"
                title="با تیم کمپینو در تماس باش"
                description="برای شروع همکاری یا دریافت مشاوره، فرم رو پر کن یا مستقیم تماس بگیر."
            />

            <div class="mt-6 space-y-4 rounded-2xl border border-white/10 bg-slate-900/70 p-6 text-sm text-slate-300">
                <p><span class="font-bold text-white">تلفن:</span> 021-88888888</p>
                <p><span class="font-bold text-white">ایمیل:</span> hello@campino.agency</p>
                <p><span class="font-bold text-white">آدرس:</span> تهران، ونک، خیابان ملاصدرا، پلاک 42</p>
                <p><span class="font-bold text-white">ساعت پاسخ گویی:</span> شنبه تا چهارشنبه، 9 تا 18</p>
            </div>
        </div>

        <form action="{{ route('contact.submit') }}" method="POST" class="rounded-3xl border border-white/10 bg-slate-900/70 p-6 md:p-8">
            @csrf

            <div class="grid gap-4 md:grid-cols-2">
                <x-forms.input name="full_name" label="نام و نام خانوادگی" placeholder="مثال: سارا کریمی" :required="true" />
                <x-forms.input name="phone" label="شماره تماس" placeholder="مثال: 09121234567" />
                <x-forms.input name="email" type="email" label="ایمیل" placeholder="مثال: you@example.com" />
                <x-forms.input name="subject" label="موضوع" placeholder="مثال: مشاوره کمپین فروش" :required="true" />
            </div>

            <div class="mt-4">
                <x-forms.textarea name="message" label="پیام" placeholder="پیام خودت رو بنویس..." :required="true" :rows="6" />
            </div>

            <div class="mt-6 flex items-center justify-between gap-3">
                <p class="text-xs text-slate-400">حداقل یکی از فیلدهای شماره تماس یا ایمیل باید تکمیل بشه.</p>
                <x-forms.submit text="ارسال پیام" />
            </div>
        </form>
    </section>
@endsection
