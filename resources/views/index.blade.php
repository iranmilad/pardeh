<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', config('app.name'))

@section('content')
<!-- Your home page content here -->
<!--Header::start-->

<div class="container tw-mb-14">
    <div class="swiper usersSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="tw-relative tw-block tw-object-contain tw-rounded-xl tw-h-full tw-w-full" src="https://placehold.co/1200x400.svg" />
            </div>
            <div class="swiper-slide">
                <img class="tw-relative tw-block tw-object-contain tw-rounded-xl tw-h-full tw-w-full" src="https://placehold.co/1200x400.svg" />
            </div>
            <div class="swiper-slide">
                <img class="tw-relative tw-block tw-object-contain tw-rounded-xl tw-h-full tw-w-full" src="https://placehold.co/1200x400.svg" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<header class="header">
    <livewire:LoadWidget blockId="block_6" />
    <div class="container">
        <div class="blogGrid">
            <div href="#" class="biggrid">
                <div class="blogbiggrid tw-cursor-pointer tw-rounded-2xl tw-overflow-hidden tw-relative tw-h-full">
                    <!-- Slider:start -->
                    <div class="swiper tw-w-full firstSlider *:tw-select-none tw-h-full">
                        <div class="swiper-wrapper">
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider1.jpg') }}" alt="">
                            </a>
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider2.jpg') }}" alt="">
                            </a>
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider3.webp') }}" alt="">
                            </a>
                            <a class="swiper-slide" href="#">
                                <img class="tw-w-full tw-h-full tw-object-contain" src="{{ Vite::asset('resources/images/slider4.webp') }}" alt="">
                            </a>
                        </div>
                        <div class="swiper-pagination"></div>

                    </div>
                    <!-- Slider:end -->
                </div>
            </div>
            <a href="#" class="smallgrid1 blogbiggrid">
                <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth2.jpg')}}" alt="">
            </a>
            <div class="smallgrid">
                <div class="row md:tw-h-full gx-3 gy-2">
                    <a href="#" class="col-md-6 tw-h-full">
                        <div class="smallgrid2 blogbiggrid">
                            <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth3.jpg')}}" alt="">
                        </div>
                    </a>
                    <a href="#" class="col-md-6 tw-h-full">
                        <div class="smallgrid3 blogbiggrid">
                            <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{Vite::asset('resources/images/auth3.jpg')}}" alt="">
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
<!--Header::end-->

    <livewire:LoadWidget blockId="block_7" />

    <livewire:LoadWidget blockId="block_5" />

    <livewire:LoadWidget blockId="block_1" />

    <livewire:LoadWidget blockId="block_2" />

    <livewire:LoadWidget blockId="block_3" />

    <livewire:LoadWidget blockId="block_4" />

    <!-- Last Blog:END1 -->
@endsection
