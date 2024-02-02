<!-- resources/views/partials/header.blade.php -->
<div class="container">
    <!--Navbar:start-->
    <div class="custom-navbar" id="customNavbar">
        <!--        Ads Banner:start-->
        <!-- <a href="" class="ads-banner" title="">
        <img src="assets/img/ads-banner.jpg" alt="" class="img-fluid object-cover">
    </a> -->
        <!--        Ads Banner:end-->

        <!--Top Navbar::start-->
        <div class="top-navbar navbar-expand-lg navbar-light py-2">
            <!--        Container:start-->
            <div class="container d-flex justify-content-between align-items-center">
                <!--        Top Navbar Right:start-->
                <div class="top-nav-right d-flex justify-content-between align-items-center">
                    <!--            Logo:start-->
                    <a href="/" class="navbar-brand" title="">
                        <img class="tw-h-10" src="{{ Vite::asset('resources/images/logo.png') }}" alt="لوگوی برگ شاپ">
                    </a>
                    <!--            Logo:end-->
                </div>
                <!--        Top Navbar Right:end-->

                @livewire('search')

                <!--        Top Navbar Left:start-->
                <div class="top-nav-left d-flex justify-content-between align-items-center">
                    <!--            Login and Register:start-->
                    <!-- isPasscodeValid my variable -->
                    <!-- if -->
                    @if (Auth::guest())
                    <a href="/login" class="btn tw-text-slate-800 me-3 border-gray-300 border-radius-xl fs-7 d-flex tw-items-center" title="">
                        <!--begin::Svg Icon -->

                        <!--end::Svg Icon-->
                        ورود | ثبت نام
                    </a>
                    @else
                    <a href="/dashboard" class="btn tw-text-slate-800 me-3 border-gray-300 border-radius-xl fs-7 d-flex tw-items-center" title="">
                        <!--begin::Svg Icon -->

                        <!--end::Svg Icon-->
                        حساب کاربری
                    </a>
                    @endif
                    <!--            Login and Register:end-->

                    <!--            Horizontal Line:start-->
                    <span class="horizontal-line"></span>
                    <!--            Horizontal Line:end-->

                    <!--            Shopping Cart:start-->
                    <div class="shopping-cart-wrapper position-relative ms-2">
                        <!--            Shopping Cart Button:start-->
                        <a href="/cart" class="btn shopping-cart-btn position-relative border-radius-xl" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3" />
                                    <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000" />
                                </g>
                            </svg><!--end::Svg Icon-->
                            <span class="badge position-absolute shop-cart-badge border border-white hover:tw-bg-indigo-500">4</span>
                        </a>
                        <!--            Shopping Cart Button:end-->
                    </div>
                    <!--            Shopping Cart:end-->
                </div>
                <!--        Top Navbar Left:end-->
            </div>
            <!--        Container:end-->

            <!--        Top Mobile Navbar In Mobile :start-->
            <div class="top-mobile-navbar border-bottom-gray-150" id="topMobileNavbar">
                <!--        Container:start-->
                <div class="container d-flex justify-content-between align-items-center">
                    <!--        Top Mobile Navbar Right:start-->
                    <div class="top-mobile-navbar-right d-flex justify-content-between align-items-center">
                        <!--            Humber Btn:start-->
                        <button class="btn ps-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg><!--end::Svg Icon-->
                        </button>
                        <!--            Humber Btn:end-->

                        <!--                Navbar Items:start-->
                        <div class="navbar-items-mobile">
                            <!--                    Navbar Items Mobile Header:start-->
                            <div class="navbar-items-mobile-header d-flex justify-content-between align-items-center border-bottom-gray-300 p-3">
                                <!--                    Navbar Items Mobile Title:start-->
                                <div class="navbar-items-mobile-title">
                                    <h5 class="fw-bold">منوی برگ شاپ</h5>
                                </div>
                                <!--                    Navbar Items Mobile Title:end-->

                                <!--                    Navbar Items Mobile Close Button:start-->
                                <div class="navbar-items-mobile-close-btn">
                                    <i class="fa fa-times fs-5"></i>
                                </div>
                                <!--                    Navbar Items Mobile Close Button:end-->
                            </div>
                            <!--                    Navbar Items Mobile Header:end-->


                        </div>
                        <!--                Navbar Items:end-->
                    </div>
                    <!--        Top Mobile Navbar Right:end-->

                    <!--        Top Mobile Navbar Middle:start-->
                    <div class="top-mobile-navbar-middle d-flex justify-content-between align-items-center">
                        <!--            Logo:start-->
                        <a href="index.html" class="navbar-brand pb-2 mobile-brand" title="">
                            <img src="https://placehold.co/115x30" alt="لوگوی برگ شاپ">
                        </a>
                        <!--            Logo:end-->
                    </div>
                    <!--        Top Mobile Navbar Middle:end-->

                    <!--        Top Mobile Navbar Left:start-->
                    <div class="top-mobile-navbar-left">
                        <!--            Login and Register:start-->
                        <!-- if -->
                        @if (true)
                        <!--            Login and Register:start-->
                        <a href="/login" class="btn text-dark-blue border-radius-xl" title="">
                            ورود
                        </a>
                        @else
                        <a href="/dashboard" class="btn px-0 tw-text-slate-800 border-radius-xl fs-3 d-flex tw-items-center " title="">
                            <!--begin::Svg Icon -->
                            <i class="fa-duotone fa-circle-user"></i>
                            <!--end::Svg Icon-->
                        </a>
                        @endif
                        <!--            Login and Register:end-->
                    </div>
                    <!--        Top Mobile Navbar Left:end-->
                </div>
                <!--        Container:end-->
            </div>
            <!--        Top Mobile Navbar In Mobile:end-->
        </div>
        <!--Top Navbar::end-->

        <!--Main Navbar::start-->
        <nav class="main-navbar navbar navbar-expand-lg navbar-light bg-light custom-box-shadow-s-1-bottom py-1 w-100" id="mainNavbar">
            <!--    Container:start-->
            <div class="container d-flex align-items-center tw-justify-between">
                <div class="tw-flex tw-items-center">
                    <a class="btn desktop-menu" href="/">خانه</a>
                    <div class="dropdown cs-main-menu">
                        <button class="btn tw-flex tw-text-gray-500 tw-items-center hover:tw-text-indigo-500 tw-text-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-duotone fa-grid-2"></i>
                            <span class="ms-2">دسته بندی محصولات</span>
                        </button>
                        <div class="dropdown-menu tw-w-full">
                            <div class="container">
                                <div class="primary-menu">
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="0 0 50 54" xmlns="http://www.w3.org/2000/svg">
                                            <title>shutter icon</title>
                                            <g stroke="#42145f" stroke-linejoin="round" stroke-miterlimit="10">
                                                <path d="m.7.7h48.6v52.6h-48.6z" fill="#fff" stroke-width="1.001"></path>
                                                <path d="m5.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                                <path d="m5.7 16.8h17.5m-17.5 10.3h17.5m-17.5 10.4h17.5" fill="#fff" stroke-width="1.1875"></path>
                                                <path d="m26.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                                <path d="m26.8 16.8h17.4m-17.4 10.3h17.4m-17.4 10.4h17.4" fill="#fff" stroke-width="1.1875"></path>
                                            </g>
                                        </svg>
                                        <span>پرده ی اماده ی تورکان</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="8 -10 50 55" xmlns="http://www.w3.org/2000/svg">
                                            <title>vertical blinds icon</title>
                                            <g stroke="#3f245d" stroke-miterlimit="10">
                                                <path d="m11.7-7.3v49.1h40.8v-49.1" fill="#fff" stroke-width="1.47"></path>
                                                <path d="m17.4 41.8v-49.1m6 49.1v-49.1m5.7 49.1v-49.1m6 49.1v-49.1m5.7 49.1v-49.1m6 49.1v-49.1" fill="none" stroke-width="1.47"></path>
                                                <path d="m55.1-6.7v32.9" fill="none" stroke-width=".735"></path>
                                            </g>
                                            <path d="m54.1 25.3h2.2v4.8h-2.2z" fill="#3f245d"></path>
                                            <path d="m9-7.1h48.5" fill="none" stroke="#3f245d" stroke-miterlimit="10" stroke-width="2.205"></path>
                                        </svg>
                                        <span>پرده آستر</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="0 0 50 49" xmlns="http://www.w3.org/2000/svg">
                                            <title>wooden blinds icon</title>
                                            <g stroke-miterlimit="10">
                                                <path d="m30.9 3v2.1m0 10.5v2.2m0 10.4v2.2" fill="none" stroke="#575756"></path>
                                                <path d="m11.2 22.9 37.6-13.8-9.4-6.8-38.3 12.9zm0 12.6 37.6-13.7-9.4-6.9-38.3 13zm0 12.6 37.6-13.7-9.4-6.9-38.3 13z" fill="#fff" stroke="#42145f"></path>
                                                <path d="m41 7.3v32.1m-10-10s5.6 1.9 9.9 7.1m-10.2-19.5s6 2.1 10.3 7.3m-10.3-20.2s6 2.2 10.4 7.5" fill="none" stroke="#575756"></path>
                                            </g>
                                        </svg>
                                        <span>پرده ی زبرا</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="0 0 50 54" xmlns="http://www.w3.org/2000/svg">
                                            <title>shutter icon</title>
                                            <g stroke="#42145f" stroke-linejoin="round" stroke-miterlimit="10">
                                                <path d="m.7.7h48.6v52.6h-48.6z" fill="#fff" stroke-width="1.001"></path>
                                                <path d="m5.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                                <path d="m5.7 16.8h17.5m-17.5 10.3h17.5m-17.5 10.4h17.5" fill="#fff" stroke-width="1.1875"></path>
                                                <path d="m26.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                                <path d="m26.8 16.8h17.4m-17.4 10.3h17.4m-17.4 10.4h17.4" fill="#fff" stroke-width="1.1875"></path>
                                            </g>
                                        </svg>
                                        <span>پرده ی مخمل</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="8 -10 50 54" xmlns="http://www.w3.org/2000/svg">
                                            <title>blackout blinds icon</title>
                                            <g fill="#fff" stroke="#42145f" stroke-miterlimit="10" stroke-width="1.0331">
                                                <path d="m56.9 31-4.4-.6-2.1-4-1.9 4.1-4.5.6 3.3 3.2-.7 4.4 3.9-2.1 4 2-.8-4.4zm-6.5-20.7-8.5-1.1-3.9-7.7-3.7 7.8-8.5 1.3 6.2 5.9-1.3 8.5 7.5-4.1 7.7 3.9-1.6-8.4z"></path>
                                                <path d="m20.7 17c0-12.3 8.6-22.5 20-25.2-1.9-.4-3.8-.7-5.8-.7-14.2.1-25.8 11.6-25.8 25.9s11.6 25.8 25.8 25.8c2 0 3.9-.2 5.8-.7-11.5-2.6-20-12.8-20-25.1z"></path>
                                            </g>
                                        </svg>
                                        <span>پرده ی حریر</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="8 -5 50 45">
                                            <title>velux blinds icon</title>
                                            <style>
                                                .st0,
                                                .st1 {
                                                    fill: #fff;
                                                    stroke: #42145f;
                                                    stroke-width: 1.0351;
                                                    stroke-linejoin: round;
                                                    stroke-miterlimit: 10
                                                }

                                                .st1 {
                                                    fill: none
                                                }
                                            </style>
                                            <path class="st0" d="M54.2 39.4l2.9-2.7L40.4-4 37.6-.9M8.5.5l2.6-3.4 29.3-1.3-2.8 3.3"></path>
                                            <path class="st0" d="M8.5.5L37.6-.9l16.5 40.3-28.3-.6z"></path>
                                            <path class="st1" d="M23.4 22.4l5.4 12.3 21.2.2"></path>
                                            <path shape-rendering="crispEdges" d="M45.3 22.6L22 23 13 3.2l23.8-.8z" fill="#42145f"></path>
                                            <path class="st1" d="M11.9 3.2l24.9-.9 14.6 35.2-24.4-.4z"></path>
                                        </svg>
                                        <span>پرده ی پانچی</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#ef4444" />
                                            </svg>
                                            <span>قرمز</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#eab308" />
                                            </svg>
                                            <span>زرد</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#84cc16" />
                                            </svg>
                                            <span>لیمویی</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#06b6d4" />
                                            </svg>
                                            <span>آبی آسمانی</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#8b5cf6" />
                                            </svg>
                                            <span>بنفش</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#ec4899" />
                                            </svg>
                                            <span>صورتی</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown cs-main-menu">
                        <button class="btn tw-flex tw-text-gray-500 tw-items-center hover:tw-text-indigo-500 tw-text-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-duotone fa-grid-2"></i>
                            <span class="ms-2">محصولات</span>
                        </button>
                        <div class="dropdown-menu tw-w-full">
                            <div class="container">
                                <div class="primary-menu">
                                    <span>عنوان قسمت</span>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="8 -10 50 55" xmlns="http://www.w3.org/2000/svg">
                                            <title>vertical blinds icon</title>
                                            <g stroke="#3f245d" stroke-miterlimit="10">
                                                <path d="m11.7-7.3v49.1h40.8v-49.1" fill="#fff" stroke-width="1.47"></path>
                                                <path d="m17.4 41.8v-49.1m6 49.1v-49.1m5.7 49.1v-49.1m6 49.1v-49.1m5.7 49.1v-49.1m6 49.1v-49.1" fill="none" stroke-width="1.47"></path>
                                                <path d="m55.1-6.7v32.9" fill="none" stroke-width=".735"></path>
                                            </g>
                                            <path d="m54.1 25.3h2.2v4.8h-2.2z" fill="#3f245d"></path>
                                            <path d="m9-7.1h48.5" fill="none" stroke="#3f245d" stroke-miterlimit="10" stroke-width="2.205"></path>
                                        </svg>
                                        <span>پرده آستر</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="0 0 50 49" xmlns="http://www.w3.org/2000/svg">
                                            <title>wooden blinds icon</title>
                                            <g stroke-miterlimit="10">
                                                <path d="m30.9 3v2.1m0 10.5v2.2m0 10.4v2.2" fill="none" stroke="#575756"></path>
                                                <path d="m11.2 22.9 37.6-13.8-9.4-6.8-38.3 12.9zm0 12.6 37.6-13.7-9.4-6.9-38.3 13zm0 12.6 37.6-13.7-9.4-6.9-38.3 13z" fill="#fff" stroke="#42145f"></path>
                                                <path d="m41 7.3v32.1m-10-10s5.6 1.9 9.9 7.1m-10.2-19.5s6 2.1 10.3 7.3m-10.3-20.2s6 2.2 10.4 7.5" fill="none" stroke="#575756"></path>
                                            </g>
                                        </svg>
                                        <span>پرده ی زبرا</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="0 0 50 54" xmlns="http://www.w3.org/2000/svg">
                                            <title>shutter icon</title>
                                            <g stroke="#42145f" stroke-linejoin="round" stroke-miterlimit="10">
                                                <path d="m.7.7h48.6v52.6h-48.6z" fill="#fff" stroke-width="1.001"></path>
                                                <path d="m5.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                                <path d="m5.7 16.8h17.5m-17.5 10.3h17.5m-17.5 10.4h17.5" fill="#fff" stroke-width="1.1875"></path>
                                                <path d="m26.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                                <path d="m26.8 16.8h17.4m-17.4 10.3h17.4m-17.4 10.4h17.4" fill="#fff" stroke-width="1.1875"></path>
                                            </g>
                                        </svg>
                                        <span>پرده ی مخمل</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg viewBox="8 -10 50 54" xmlns="http://www.w3.org/2000/svg">
                                            <title>blackout blinds icon</title>
                                            <g fill="#fff" stroke="#42145f" stroke-miterlimit="10" stroke-width="1.0331">
                                                <path d="m56.9 31-4.4-.6-2.1-4-1.9 4.1-4.5.6 3.3 3.2-.7 4.4 3.9-2.1 4 2-.8-4.4zm-6.5-20.7-8.5-1.1-3.9-7.7-3.7 7.8-8.5 1.3 6.2 5.9-1.3 8.5 7.5-4.1 7.7 3.9-1.6-8.4z"></path>
                                                <path d="m20.7 17c0-12.3 8.6-22.5 20-25.2-1.9-.4-3.8-.7-5.8-.7-14.2.1-25.8 11.6-25.8 25.9s11.6 25.8 25.8 25.8c2 0 3.9-.2 5.8-.7-11.5-2.6-20-12.8-20-25.1z"></path>
                                            </g>
                                        </svg>
                                        <span>پرده ی حریر</span>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="8 -5 50 45">
                                            <title>velux blinds icon</title>
                                            <style>
                                                .st0,
                                                .st1 {
                                                    fill: #fff;
                                                    stroke: #42145f;
                                                    stroke-width: 1.0351;
                                                    stroke-linejoin: round;
                                                    stroke-miterlimit: 10
                                                }

                                                .st1 {
                                                    fill: none
                                                }
                                            </style>
                                            <path class="st0" d="M54.2 39.4l2.9-2.7L40.4-4 37.6-.9M8.5.5l2.6-3.4 29.3-1.3-2.8 3.3"></path>
                                            <path class="st0" d="M8.5.5L37.6-.9l16.5 40.3-28.3-.6z"></path>
                                            <path class="st1" d="M23.4 22.4l5.4 12.3 21.2.2"></path>
                                            <path shape-rendering="crispEdges" d="M45.3 22.6L22 23 13 3.2l23.8-.8z" fill="#42145f"></path>
                                            <path class="st1" d="M11.9 3.2l24.9-.9 14.6 35.2-24.4-.4z"></path>
                                        </svg>
                                        <span>پرده ی پانچی</span>
                                    </a>
                                    <span>پرده های رنگی</span>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#eab308" />
                                            </svg>
                                            <span>زرد</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#84cc16" />
                                            </svg>
                                            <span>لیمویی</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#06b6d4" />
                                            </svg>
                                            <span>آبی آسمانی</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#8b5cf6" />
                                            </svg>
                                            <span>بنفش</span>
                                        </div>
                                    </a>
                                    <a href="/category" class="dropdown-item">
                                        <div class="parde-color parde-color-row">
                                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="50" cy="50" r="50" fill="#ec4899" />
                                            </svg>
                                            <span>صورتی</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="btn desktop-menu" href="/blog">بلاگ</a>
                    <a class="btn desktop-menu" href="/about-us">درباره ما</a>
                    <a class="btn desktop-menu" href="/contact-us">تماس باما</a>
                </div>
            </div>
            <!--    Container:end-->

            <!--        Main Mobile Navbar:start-->
            <div class="main-mobile-navbar pb-1">
                <!--        Container:start-->
                <div class="container d-flex justify-content-between align-items-center">
                    <!--            Main Mobile Navbar Right:start-->
                    <div class="main-mobile-navbar-right">
                        <!--            Search Form:start-->
                        <form action="search.html" class="position-relative">
                            <input class="form-control border-0 fs-6 fw-normal bg-gray-150 border-radius-xl py-2" type="search" placeholder="جستجو">
                            <button class="btn position-absolute" type="submit">
                                <i class="fab fa-sistrix text-light-gray fw-md fs-5"></i>
                            </button>
                        </form>
                        <!--            Search Form:end-->
                    </div>
                    <!--            Main Mobile Navbar Right:end-->

                    <!--            Main Mobile Navbar Left:start-->
                    <div class="main-mobile-navbar-left">
                        <!--            Login and Register:end-->
                        <!--            Shopping Cart Button:start-->
                        <a href="/cart" class="btn shopping-cart-btn p-2 border-radius-xl position-relative" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3" />
                                    <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000" />
                                </g>
                            </svg><!--end::Svg Icon-->
                            <span class="badge bg-primary position-absolute shop-cart-badge border border-white border-2 border-radius-xl">4</span>
                        </a>
                        <!--            Shopping Cart Button:end-->
                    </div>
                    <!--            Main Mobile Navbar Left:end-->
                </div>
                <!--        Container:end-->
            </div>
            <!--        Main Mobile Navbar:end-->
        </nav>
        <!--Main Navbar::end-->
    </div>
    <!--Navbar:end-->
</div>

<div class="offcanvas offcanvas-start tw-z-[99999999999999999999999999999999]" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">منوی {{config('app.name')}}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body tw-space-y-4 tw-flex tw-flex-col tw-text-sm">
        <a href="/">خانه</a>
        <div class="accordion menu-accordion" id="menu_sub_category_parent">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menu_sub_category" aria-expanded="true" aria-controls="menu_sub_category">
                        <i class="fa-duotone fa-grid-2"></i>
                        دسته بندی محصولات
                    </button>
                </h2>
                <div id="menu_sub_category" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#menu_sub_category_parent">
                    <div class="accordion-body">
                        <div>
                            <a href="/category" class="menu-submenu" >
                                <svg viewBox="0 0 50 54" xmlns="http://www.w3.org/2000/svg">
                                    <title>shutter icon</title>
                                    <g stroke="#42145f" stroke-linejoin="round" stroke-miterlimit="10">
                                        <path d="m.7.7h48.6v52.6h-48.6z" fill="#fff" stroke-width="1.001"></path>
                                        <path d="m5.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                        <path d="m5.7 16.8h17.5m-17.5 10.3h17.5m-17.5 10.4h17.5" fill="#fff" stroke-width="1.1875"></path>
                                        <path d="m26.8 7.7h17.4v38.3h-17.4z" fill="none" stroke-width="1.024"></path>
                                        <path d="m26.8 16.8h17.4m-17.4 10.3h17.4m-17.4 10.4h17.4" fill="#fff" stroke-width="1.1875"></path>
                                    </g>
                                </svg>
                                <span>پرده ی اماده ی تورکان</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/blog">بلاگ</a>
        <a href="/contact-us">تماس باما</a>
        <a href="/about-us">ارتباط باما</a>
    </div>
</div>
