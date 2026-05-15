@extends('layouts.app')

@section('title', 'بلاگ')

@section('content')
    <section class="mx-auto mt-12 w-[min(95%,72rem)]">
        <x-section-title
            kicker="Blog"
            title="بلاگ کمپینو"
            description="محتوای این بخش فعلا نمونه ست و در فاز بعدی به CMS متصل می شه."
        />

        <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-card title="چطور CAC رو بدون افت کیفیت لید کم کنیم؟" icon="L1" description="5 اقدام ساده و فوری برای کاهش هزینه جذب مشتری در کمپین های عملکردی." link-text="مطالعه" :link-href="route('blog')" />
            <x-card title="اشتباه های رایج در طراحی صفحه فرود" icon="L2" description="چرا بعضی لندینگ ها با وجود ترافیک خوب، خروجی فروش ندارن." link-text="مطالعه" :link-href="route('blog')" />
            <x-card title="راهنمای انتخاب پلتفرم تبلیغاتی" icon="L3" description="بر اساس هدف کمپین، چه زمانی سراغ گوگل، اینستاگرام یا لینکدین بریم." link-text="مطالعه" :link-href="route('blog')" />
            <x-card title="ریتارگتینگ موثر برای فروشگاه ها" icon="L4" description="سناریوهایی که مشتری مردد رو به خرید نزدیک می کنن." link-text="مطالعه" :link-href="route('blog')" />
            <x-card title="نقش تیم فروش در موفقیت کمپین" icon="L5" description="هماهنگی مارکتینگ و فروش چطور نرخ نهایی تبدیل رو بالا می بره." link-text="مطالعه" :link-href="route('blog')" />
            <x-card title="چک لیست شروع کمپین 90 روزه" icon="L6" description="قبل از شروع کمپین، این 10 مورد رو حتما آماده داشته باش." link-text="مطالعه" :link-href="route('blog')" />
        </div>
    </section>
@endsection
