@extends('layouts.primary')

<!-- IMAGE DOTTER: data of this image is created in admin dashboard. -->
<!-- if user clicks on each dot, with js we request to api /imgdot/{id} and it render blade and sends html to js.  -->

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
                            <livewire:LoadWidget blockId="block_18" :slug="$post->slug"/>

                            <livewire:LoadWidget blockId="block_19" :slug="$post->slug"/>
                        </div>
                        <!--                        Blog Post Header:end-->

                        <!--                        Blog Post Content:start-->
                        <div class="blog-post-content mt-4">
                            <!--                            Blog Post Image:start-->
                            <livewire:LoadWidget blockId="block_20" :slug="$post->slug"/>
                            <!--                            Blog Post Image:end-->
                            <livewire:LoadWidget blockId="block_21" :slug="$post->slug"/>
                        </div>
                        <!--                        Blog Post Content:end-->

                        <!--                        Blog Post Footer:start-->
                        <!--                        Blog Post Footer:end-->

                        <!--                        Blog Keywords:start-->
                        <livewire:LoadWidget blockId="block_22" :slug="$post->slug"/>
                        <!--                        Blog Keywords:end-->

                        <livewire:LoadWidget blockId="block_23" :slug="$post->slug"/>
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
                    <a type="button" class="btn custom-btn-primary btn-sm tw-py-1.5 tw-rounded-lg">مشاهده محصول</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@vite('resources/js/imageDot.js')
@endsection
