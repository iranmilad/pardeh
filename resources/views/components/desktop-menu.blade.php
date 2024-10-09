<div class="">
    <div class="container tw-py-4 tw-bg-[var(--header-bg)] tw-rounded-b-2xl">
        <div class="tw-w-full md:tw-w-[70%] tw-mx-auto tw-flex tw-justify-center lg:tw-hidden tw-gap-4">
            @livewire('search')
            <a href="{{ route('compare') }}" class="login-register-btn tw-h-[46px]">
                <i class="fa-solid fa-shuffle"></i>
            </a>
        </div>
        <nav class="tw-items-center tw-justify-center navbar-link-main tw-hidden lg:tw-flex">
            <a href="{{ route('home') }}" class="navbar-link-menu">
                خانه
            </a>
            <div class="dropdown dropdown-center cs-main-menu">
                <button class="navbar-link-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    محصولات
                    <i class="fa-regular fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu tw-w-full">
                    <div class="container tw-overflow-x-auto">
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
            <div class="dropdown dropdown-center cs-main-menu">
                <button class="navbar-link-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    پرده
                    <i class="fa-regular fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu tw-w-full">
                    <div class="container tw-overflow-x-auto">
                        <div class="primary-menu">
                            <h6 class="title-dot tw-mb-3">انواع مختلف پنجره</h6>
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
                            <h6 class="title-dot tw-mb-3">انواع رنگ پرده</h6>
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
            <a href="" class="navbar-link-menu">
                رو تختی
            </a>
            <a href="" class="navbar-link-menu">
                تجهیزات نصب پرده
            </a>
            <a href="{{ route('blog') }}" class="navbar-link-menu">
                وبلاگ
            </a>
        </nav>
    </div>
</div>