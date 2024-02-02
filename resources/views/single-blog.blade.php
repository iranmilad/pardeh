@extends('layouts.primary')

@section('title', '')

@section('content')
<div class="container">
    <!--    BreadCrumb:start-->
    <nav class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item fs-8"><a href="#">برگ شاپ</a></li>
            <li class="breadcrumb-item fs-8"><a href="#">وبلاگ</a></li>
            <li class="breadcrumb-item fs-8"><a href="#">تک مطلب</a></li>
        </ol>
    </nav>
    <!--    BreadCrumb:end-->

    <!--    Blog Post:start-->
    <div class="blog-post mt-3 mb-4">
        <div class="row">
            <div class="col-12">
                <!--               Blog Post Wrapper:start-->
                <div class="blog-post-wrapper tw-rounded-lg tw-py-1 tw-px-8">

                    <!--                    Article:start-->
                    <article class="mt-4">
                        <!--                        Blog Post Header:start-->
                        <div class="blog-post-header">

                            <!--                            Blog Post Header Title:start-->
                            <div class="blog-post-header-title d-flex justify-content-between align-items-baseline">
                                <h1 class="fs-5 fw-bold">۱۵ انیمیشن جذاب و دیدنی که حسابی سرحالتان می‌آورند</h1>
                            </div>
                            <!--                            Blog Post Header Title:end-->

                            <!--                            Blog Post Header Detail:start-->
                            <div class="blog-post-header-detail mt-4 d-flex justify-content-between align-items-center">
                                <!--                                Blog Post Header Detail Right:start-->
                                <div class="blog-post-header-detail-right">
                                    <!--                                    Blog Post Author:start-->
                                    <div class="blog-post-author">
                                        <img src="https://placehold.co/35x35" alt="" class="border-radius-circle">
                                        <span class="ps-1 fs-7 gray-600">فرهاد باقری</span>
                                        <span class="fs-7 ps-4 gray-500">
                                            <i class="fa fa-clock"></i>
                                            4 فروردین 1401
                                        </span>
                                    </div>
                                    <!--                                    Blog Post Author:end-->
                                </div>
                                <!--                                Blog Post Header Detail Right:end-->
                            </div>
                            <!--                            Blog Post Header Detail:end-->
                        </div>
                        <!--                        Blog Post Header:end-->

                        <!--                        Blog Post Content:start-->
                        <div class="blog-post-content mt-4">
                            <!--                            Blog Post Image:start-->
                            <figure>
                                <img src="{{ Vite::asset('resources/images/auth3.jpg') }}" alt="">
                                <figcaption>
                                    عکس اتاق خواب
                                </figcaption>
                            </figure>
                            <!--                            Blog Post Image:end-->
                            <p class="mt-3">
                                برای همه‌ی ما در زندگی پیش می‌آید که روزهای بد و استرس‌زا را تجربه ‌کنیم، و تنها دلمان
                                بخواهد در رخت‌‌خوابمان غلت بزنیم و یک فیلم خوب تماشا کنیم، تا در خود غرقمان کند و تمام
                                رخوت و سختی آن روز بد را با خود ببرد. خوشبختانه، همیشه برای دور کردن افکار بد و حال خراب
                                فیلم‌هایی وجود دارند که این احساس گرم و ساعاتی سرگرم‌کننده را فراهم کنند. فراتر از هر
                                اثر سینمایی، از استاپ‌موشن‌های کمپانی آردمن گرفته تا کاتالوگ گسترده‌ی انیمیشن‌های کلاسیک
                                پیکسار، چیزی در مورد فیلم‌های انیمیشن وجود دارد که برای این هدف عالی است. در این مطلب ۱۰
                                انیمیشن جذاب و تماشایی را نام بردیم که حسابی سرحالتان می‌آورند.
                            </p>
                            <div class="image_dotter">
                                <img src="{{ Vite::asset('resources/images/auth.jpg') }}" />
                                <span style="top: 5%;left: 5%;" data-id="1"></span>
                                <span style="top: 20%;left: 30%;" data-id="1"></span>
                                <span style="top: 50%;left: 50%;" data-id="1"></span>
                            </div>
                            <p class="mt-4">
                                تقریبا برای هر مناسبتی یک فیلم انیمیشن وجود دارد؛ تعطیلات خاص، برای سنین مختلف و
                                ماجراهای متنوعی که هر روز در دنیا اتفاق می‌افتد تنها نوک کوه یخی است که از داستان‌های
                                جذاب انیمیشنی می‌توانیم انتظار داشته باشیم. برخی از انیمیشن‌ها موضوعات صادقانه و دلپذیری
                                را در مورد دنیای واقعی ارائه می‌دهند، در حالی که برخی دیگر به اندازه‌ی کافی همه‌جانبه
                                هستند تا شما را به سمت خود جلب کنند و از مشکلاتتان رها کنند. اگر در حال جستجوی چیزی
                                هستید تا روز بدتان را در یک چشم به هم زدن در خود حل کند، ادامه‌ی مطلب را از دست ندهید.
                            </p>
                        </div>
                        <!--                        Blog Post Content:end-->

                        <!--                        Blog Post Footer:start-->
                        <!--                        Blog Post Footer:end-->

                        <!--                        Blog Keywords:start-->
                        <div class="blog-keywords mt-4 pb-4 border-bottom-gray-300">
                            <span>برچسب ها :</span>
                            <a href="">
                                <span class="badge bg-secondary">تکنولوژی</span>
                            </a>
                            <a href="">
                                <span class="badge bg-secondary">موبایل</span>
                            </a>
                            <a href="">
                                <span class="badge bg-secondary">لپ تاپ</span>
                            </a>
                        </div>
                        <!--                        Blog Keywords:end-->

                        <!--                        Blog Comments:start-->
                        <div class="blog-comments mt-4 form">
                            <strong class="fs-5">دیدگاه شما</strong>
                            <form class="mt-3 p-3" id="commentForm">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input name="name" type="text" class="form-control" autocomplete="off" placeholder="نام ...">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input name="email" type="email" class="form-control" autocomplete="off" placeholder="ایمیل ...">
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <textarea name="content" class="form-control" autocomplete="off" rows="4" placeholder="دیدگاه ..."></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button type="submit" class="btn custom-btn-primary">ارسال دیدگاه</button>
                                    </div>
                                </div>
                            </form>

                            <!--                            User Already Comments:start-->
                            <div class="blog-already-comments mt-5">
                                <div class="blog-already-comments-header position-relative mb-5">
                                    <strong class="pe-3">12 دیدگاه</strong>
                                    <div class="border-blog border-bottom-gray-300 position-absolute"></div>
                                </div>
                                <div class="comments mt-4">
                                    <!--                                    Comment Item:start-->
                                    <div class="comment-box border-bottom-gray-300 pb-3">
                                        <div class=" d-flex justify-content-between align-items-center">
                                            <div class="comment-box-right">
                                                <img src="https://placehold.co/35x35" alt="" class="border-radius-circle">
                                                <span class="ps-1 fw-bold">آرمان</span>
                                                <span class="fs-7 ps-5 gray-500 span-time">
                                                    <i class="fa fa-clock ps-2"></i>
                                                    6 فروردین 1401 | 16:32
                                                </span>
                                            </div>
                                        </div>
                                        <p class="pt-3 ps-4">عالی بود !!!!!!!!!!!</p>
                                        <div class="comment-box-reply ms-5 mt-5">
                                            <div class=" d-flex justify-content-between align-items-center">
                                                <div class="comment-box-right">
                                                    <img src="https://placehold.co/35x35" alt="" class="border-radius-circle">
                                                    <span class="ps-1 fw-bold">ادمین</span>
                                                    <span class="fs-7 ps-5 gray-500 span-time">
                                                        <i class="fa fa-clock ps-2"></i>
                                                        6 فروردین 1401 | 16:32
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="pt-3 ps-4">با تشکر از دیدگاه شما</p>
                                        </div>
                                    </div>
                                    <!--                                    Comment Item:end-->
                                </div>
                            </div>
                            <!--                            User Already Comments:end-->

                        </div>
                        <!--                        Blog Comments:end-->
                    </article>
                    <!--                    Article:end-->
                </div>
                <!--                Blog Post Wrapper:end-->
            </div>
        </div>
    </div>
    <!--    Blog Post:end-->

    <!-- Modal -->
    <div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="priceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product_details tw-min-h-8 tw-w-full tw-p-5"></div>
                </div>
                <div class="modal-footer tw-justify-start tw-border-none tw-bg-gray-100">
                    <button type="button" class="btn btn-light btn-sm tw-bg-transparent tw-border-transparent hover:tw-bg-transparent hover:tw-border-transparent closeModal" data-bs-dismiss="modal">بستن</button>
                    <button type="button" class="btn custom-btn-primary btn-sm tw-py-1.5 tw-rounded-lg">مشاهده محصول</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@vite('resources/js/imageDot.js')
@endsection