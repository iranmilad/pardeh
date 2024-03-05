@extends('layouts.primary')

@section('title', 'درباره ما')

@section('content')
<div class="container xl:tw-w-2/3">
    <div class="about-us-content">
        <h1 class="tw-font-semibold">درباره <span class="tw-text-brand-500">{{config('app.name')}}</span></h1>
        <div class="tw-mt-16">
            <p class="tw-text-lg tw-leading-8">
                با افتخار به شما معرفی می‌کنیم که در دنیای وبسایت ما، تجربه‌ای منحصر به فرد از طراحی و اجرای پرده‌های شگفت‌انگیز را خواهید یافت. محصولات متنوع ما، از لحاظ طراحی و دقت اجرا، علامتی از دقت و حرفه‌ای بالا دارند که هرکدام با زیبایی خاص خود، داستانی خاص و جذاب را در جلوهٔ چشمان شما باز می‌کنند.


            </p>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="tw-font-semibold">ما چه کارهایی انجام می دهیم؟</h2>
                    <br>
                    <br>
                    <p class="tw-mt-4 tw-text-lg tw-leading-8">
                        به وبسایت ما یک نقطه تجمع فرهنگی برای علاقمندان به هنر دکوراسیون و طراحی داخلی، خوش آمدید! ما با افتخار به عنوان یک پلتفرم جامع، به شما یک تجربه ارتباطی با دنیای جذاب و جذاب دکوراسیون ارائه می‌دهیم. از آخرین روند‌ها و مدل‌های دکوراسیون گرفته تا نکات طراحی مدرن، ما با ارائه‌ی اطلاعات غنی و منابع متنوع، به شما امکان می‌دهیم تا فضای زندگی خود را به یک شاهکار هنری تبدیل کنید.
                    </p>
                    <br>
                    <br>
                    <ul class="tw-list-none tw-p-0">
                        <li class="tw-mt-4 tw-mb-2 tw-text-lg tw-font-semibold tw-text-gray-800">سفارش انواع پرده</li>
                        <li class="tw-mb-2 tw-text-lg tw-font-semibold tw-text-gray-800">خدمات متنوع</li>
                        <li class="tw-mb-2 tw-text-lg tw-font-semibold tw-text-gray-800">طراحی و اجرای پروژه‌های دکوراسیون داخلی</li>
                        <li class="tw-mb-2 tw-text-lg tw-font-semibold tw-text-gray-800">مشاوره در انتخاب رنگ و جزئیات طراحی</li>
                        <!-- دیگر آیتم‌های لیست را اضافه کنید در اینجا -->
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{ Vite::asset('resources/images/about1.jpg') }}" />
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ Vite::asset('resources/images/about2.jpg') }}" />
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="tw-font-semibold">محصولات متنوع</h2>

                    <br>
                    <p class="tw-mt-4 tw-text-lg tw-leading-8">
                        از لحاظ طراحی و اجرا، محصولات متنوع وبسایت ما نشان‌دهنده یک دقت و حرفه‌ای بالاست. از پرده‌های کلاسیک با طرح‌های زیبا و زمینه‌های شیک گرفته تا پرده‌های مدرن با جسارت و نوآوری، هر کدام از محصولات ما داستان منحصر به فردی را برای شما باز می‌کنند. ما به این اعتقاد داریم که هر انتخاب یک اظهارنامه است و با پرده‌های ما، شما می‌توانید داستان خود را در فضای خود بنویسید.</p>

                    <br>
                    <ul class="tw-list-disc tw-list-inside tw-p-0">
                        <li>پرده‌های کلاسیک</li>
                        <li>پرده‌های مدرن</li>
                        <li>پرده‌های ضدآب</li>
                        <li>رده‌های دیجیتال</li>
                        <li>پرده‌های مخصوص نوزادان</li>
                        <!-- دیگر آیتم‌های لیست را اضافه کنید در اینجا -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection