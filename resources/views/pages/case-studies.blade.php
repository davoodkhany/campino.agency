@extends('layouts.main')

@section('title', 'نمونه کارها')

@section('content')
    <section class="mx-auto mt-12 w-[min(95%,72rem)]">
        <x-section-title
            kicker="Case Studies"
            title="نمونه خروجی کمپین ها"
            description="نمونه های زیر فرضی هستن و صرفا برای نمایش ساختار صفحه MVP قرار گرفتن."
        />

        <div class="mt-8 grid gap-5 md:grid-cols-2">
            <x-card title="برند آموزش آنلاین" icon="C1" description="هدف: افزایش لید فروش دوره ها در 6 هفته">
                <ul class="space-y-2">
                    <li>• رشد 2.9 برابر ثبت نام فرم مشاوره</li>
                    <li>• کاهش 36 درصد هزینه هر لید</li>
                    <li>• افزایش 41 درصد نرخ تبدیل صفحه فرود</li>
                </ul>
            </x-card>

            <x-card title="فروشگاه محصولات پوستی" icon="C2" description="هدف: افزایش خرید مستقیم از کمپین های عملکردی">
                <ul class="space-y-2">
                    <li>• رشد 2.1 برابر فروش کمپینی</li>
                    <li>• افزایش 58 درصد بازگشت مشتری با ریتارگتینگ</li>
                    <li>• رسیدن به ROAS میانگین 4.3</li>
                </ul>
            </x-card>

            <x-card title="استارتاپ SaaS" icon="C3" description="هدف: جذب دمو برای تیم فروش B2B">
                <ul class="space-y-2">
                    <li>• افزایش 3.4 برابر درخواست دمو</li>
                    <li>• بهبود 27 درصد نرخ حضور در جلسات</li>
                    <li>• کاهش چرخه فروش از 45 روز به 31 روز</li>
                </ul>
            </x-card>

            <x-card title="کلینیک زیبایی" icon="C4" description="هدف: رزرو نوبت ماهانه و پر کردن ظرفیت">
                <ul class="space-y-2">
                    <li>• رشد 1.8 برابر رزرو آنلاین</li>
                    <li>• افزایش 33 درصد نرخ پاسخ واتساپ</li>
                    <li>• بهینه سازی بودجه با حذف کمپین های کم بازده</li>
                </ul>
            </x-card>
        </div>
    </section>

    <section class="mx-auto mt-14 w-[min(95%,72rem)]">
        <x-cta
            title="می خوای کیس مشابه کسب و کار خودت رو ببینی؟"
            description="در جلسه اول، براساس صنعت و بازار شما یک سناریوی نزدیک به واقعیت ارائه می دیم."
            primary-text="درخواست جلسه"
            :primary-href="route('contact')"
        />
    </section>
@endsection
