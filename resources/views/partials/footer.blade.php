<!--Footer:start-->
<div class="container tw-mt-10">
    <img class="tw-w-full tw-h-full" src="{{ Vite::asset('resources/images/footer-light.png') }}" alt="">
</div>
<div class="tw-py-5 mt-5 tw-mb-5">
    <div class="container">
        <div class="row tw-justify-center gy-4">
            @foreach ($menus['features_menu']->childMenus  as $menu)
            <div class="col-lg-2 col-4">
                <li class="icon-footer-box">
                    <i class="{{  $menu->icon  }}"></i>
                    <span>{{ $menu->title }}</span>
                </li>
            </div>
            @endforeach
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
                            <x-footer-menu :alias="'quick_access'"/>
                        </div>
                        <div class="tw-col-span-1">
                            <x-footer-menu :alias="'categories_footer'"/>
                        </div>

                        <div class="tw-col-span-2">
                            <x-footer-menu :alias="'footer_contact_us'"/>

                            <ul class="social-list d-flex tw-justify-start mt-2 align-items-center tw-flex-wrap tw-w-full">
                                @foreach ($menus['social_media_menu']->childMenus  as $menu)
                                <li class="my-2">
                                    <a class="social-media-icon" href="{{ $menu->link }}">
                                        <img src="{{  $menu->icon }}" alt="">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tw-col-span-1">
                            <p class="fw-bold fs-6 title-dot text-white">{{ $menus['namad_menu']->title}}</p>
                            <div class="row mt-3 tw-justify-center">
                                <ul class="social-list d-flex tw-justify-start mt-2 align-items-center tw-flex-wrap tw-w-full">
                                    @foreach ($menus['namad_menu']->childMenus  as $menu)
                                    <li class="my-2">
                                        <a  href="{{ $menu->link }}">
                                        <img class="tw-w-16" src="{{  $menu->icon }}" alt="">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
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
