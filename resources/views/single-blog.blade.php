@extends('layouts.primary')

<!-- IMAGE DOTTER: data of this image is created in admin dashboard. -->
<!-- if user clicks on each dot, with js we request to api /imgdot/{id} and it render blade and sends html to js.  -->

@section('title', '')

@section('content')
<div class="container">
    <!--    BreadCrumb:start-->
    <nav class="my-4">
        {{ Breadcrumbs::render('single.post',$post) }}
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
