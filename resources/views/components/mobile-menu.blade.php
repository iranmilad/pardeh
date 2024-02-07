<div class="offcanvas offcanvas-start tw-z-[99999999999999999999999999999999]" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">منوی {{config('app.name')}}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body tw-space-y-4 tw-flex tw-flex-col tw-text-sm">
        <a href="{{ route('home') }}">
            <i class="fa-regular fa-house"></i>
            خانه
        </a>
        <div class="accordion menu-accordion menu_sub_category accordion-flush" id="menu_sub_category_parent">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menu_sub_category" aria-expanded="true" aria-controls="menu_sub_category">
                        <i class="fa-regular fa-grid-2"></i>
                        محصولات
                    </button>
                </h2>
                <div id="menu_sub_category" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#menu_sub_category_parent">
                    <div class="accordion-body">
                        <div>
                            <a href="/category" class="menu-submenu">
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
                        <div class="parde-color parde-color-row tw-w-max">
                            <svg width="25" height="25" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50" fill="#ef4444" />
                            </svg>
                            <span>قرمز</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menu_sub_category2" aria-expanded="true" aria-controls="menu_sub_category">
                        <i class="fa-regular fa-booth-curtain"></i>
                        پرده
                    </button>
                </h2>
                <div id="menu_sub_category2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#menu_sub_category_parent">
                    <div class="accordion-body">
                        <div>
                            <a href="/category" class="menu-submenu">
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
        <a href="/blog">
            <i class="fa-regular fa-newspaper"></i>
            بلاگ
        </a>
        <a href="/contact-us">
            <i class="fa-regular fa-phone"></i>
            تماس باما</a>
        <a href="/about-us">
            <i class="fa-regular fa-headset"></i>
            ارتباط باما</a>
    </div>
</div>
