<!--Footer:start-->
<div class="container tw-mt-10">
    <img class="tw-w-full tw-h-full" src="{{ Vite::asset('resources/images/footer-light.png') }}" alt="">
</div>
<div class="tw-py-5 mt-5 tw-mb-5">
    <div class="container">
        <div class="row tw-justify-center gy-4">
            <div class="col-lg-2 col-12 col-md-4">
                <div class="icon-footer-box">
                    <i class="fa-regular fa-box tw-text-amber-500"></i>
                    <div class="tw-flex tw-flex-col">
                        <span>تحویل اکسپرس</span>
                        <label for="">ارسال سریع به سراسر کشور</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12 col-md-4">
                <div class="icon-footer-box">
                    <i class="fa-regular fa-credit-card tw-text-emerald-500"></i>
                    <div class="tw-flex tw-flex-col">
                        <span>خرید آنلاین مطمئن</span>
                        <label for="">نماد اعتماد الکترونیکی</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12 col-md-4">
                <div class="icon-footer-box">
                    <i class="fa-regular fa-badge-check tw-text-purple-500"></i>
                    <div class="tw-flex tw-flex-col">
                        <span>تضمین اصالت کالا</span>
                        <label for="">فاکتور رسمی نمایندگی سامسونگ</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12 col-md-4">
                <div class="icon-footer-box">
                    <i class="fa-regular fa-person-dolly-empty tw-text-sky-500"></i>
                    <div class="tw-flex tw-flex-col">
                        <span>مشاور رایگان خرید</span>
                        <label for="">توسط کارشناسان فروش بوم سام</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12 col-md-4">
                <div class="icon-footer-box">
                    <i class="fa-regular fa-headphones-simple tw-text-rose-500"></i>
                    <div class="tw-flex tw-flex-col">
                        <span>ضمانت بازگشت</span>
                        <label for="">7 روز ضمانت بازگشت کالا</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tw-bg-slate-800 tw-text-gray-100 mt-3 {{ Route::currentRouteName() == 'product' ? 'tw-pb-[80px]': '' }}">
    <div class="container">
        <footer class="footer">
            <div class="container">
                <div class="footer-main my-5">
                    <div class="tw-grid tw-grid-cols-2 sm:tw-grid-cols-2 md:tw-grid-cols-3 lg:tw-grid-cols-5">
                        <div class="tw-col-span-1">
                            <h3 class="fw-bold fs-6 title-dot text-white">دسترسی سریع</h3>
                            <ul class="tw-pr-5 tw-text-xs">
                                <li class="my-3"><a class="" href="/">صفحه ی خانه</a></li>
                                <li class="my-3"><a href="/">ورود/ثبت نام</a></li>
                                <li class="my-3"><a href="/">راهنمای اندازه گیزی</a></li>
                                <li class="my-3"><a href="{{ Auth::guest() ? '/favorites' : '/dashboard/favorites' }}">علاقه مندی ها</a></li>
                                <li class="my-3"><a href="/about-us">درباره ما</a></li>
                                <li class="my-3"><a href="/contact-us">تماس باما</a></li>
                                <li class="my-3"><a href="/blog">وبلاگ</a></li>
                            </ul>
                        </div>
                        <div class="tw-col-span-1">
                            <h3 class="fw-bold fs-6 title-dot text-white">دسته بندی ها</h3>
                            <ul class="tw-pr-5 tw-text-xs">
                                <li class="my-3"><a href="#">پرده</a></li>
                                <li class="my-3"><a href="#">رو تختی</a></li>
                                <li class="my-3"><a href="#">کاغذ دیواری</a></li>
                                <li class="my-3"><a href="#">موکت</a></li>
                                <li class="my-3"><a href="#">فرش</a></li>
                                <li class="my-3"><a href="#">کوسن و روبالشی</a></li>
                                <li class="my-3"><a href="#">لوستر و آباژور</a></li>
                                <li class="my-3"><a href="#">قالیچه و پادری</a></li>
                                <li class="my-3"><a href="#">مبلمان</a></li>
                                <li class="my-3"><a href="#">آینه</a></li>
                            </ul>
                        </div>

                        <div class="tw-col-span-2">
                            <p class="fw-bold fs-6 title-dot text-white">تماس باما</p>
                            <div class="tw-flex tw-text-sm tw-items-start lg:tw-items-center mt-2">
                                <span class="tw-ml-1 tw-font-bold">آدرس: </span>
                                <p>فارس - شیراز - خیابان ارم - کوچه 8</p>
                            </div>
                            <div class="tw-flex tw-text-sm tw-items-center mt-2">
                                <span class="tw-ml-1 tw-font-bold">دفتر شیراز: </span>
                                <p>071236234</p>
                            </div>
                            <div class="tw-flex tw-text-sm tw-items-center mt-2">
                                <span class="tw-ml-1 tw-font-bold">پشتیبانی 1: </span>
                                <p>02134623</p>
                            </div>
                            <ul class="social-list d-flex tw-justify-start mt-2 align-items-center tw-flex-wrap tw-w-full">
                                <li class="my-2 instagram">
                                    <a class="social-media-icon" href="#">
                                        <img src="{{ Vite::asset('resources/images/instagram.png') }}" alt="">
                                    </a>
                                </li>
                                <li class="my-2 twitter">
                                    <a class="social-media-icon" href="#">
                                        <img src="{{ Vite::asset('resources/images/twitter.png') }}" alt="">
                                    </a>
                                </li>
                                <li class="my-2 linkedin">
                                    <a class="social-media-icon" href="#">
                                        <img src="{{ Vite::asset('resources/images/linkedin.png') }}" alt="">
                                    </a>
                                </li>
                                <li class="my-2 telegram">
                                    <a class="social-media-icon" href="#">
                                        <img src="{{ Vite::asset('resources/images/whatsapp.png') }}" alt="">
                                    </a>
                                </li>
                                <li class="my-2 telegram">
                                    <a class="social-media-icon" href="#">
                                        <img src="{{ Vite::asset('resources/images/telegram.png') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tw-col-span-1">
                            <p class="fw-bold fs-6 title-dot text-white">نماد ها</p>
                            <div class="row mt-3 tw-justify-center">
                                <img class="tw-w-28" src="{{ Vite::asset('resources/images/enamad.png') }}" alt="">
                                <img class="tw-w-28" src="{{ Vite::asset('resources/images/rezi.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-4">
                <div class="container">
                    <p class="fs-8 gray-600">
                        برای استفاده از مطالب <span>{{config('app.name')}}</span>، داشتن «هدف غیرتجاری» و ذکر «منبع» کافیست. تمام حقوق اين وب‌سايت نیز برای
                        شرکت <span>{{config('app.name')}}</span> است.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--Footer:End-->