<div>
    <!--    Categories:start-->
    @if (isset($options['type']) && $options['type'] === 'portfolio')
        <section class="categories mt-5">
            <h2 class="text-center fs-4">{{ $menus->title }}</h2>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-2 mb-3">
                    <!--                Row:start-->
                    <div class="row">
                        @foreach ($menus->childMenus as $menu)
                            <!--                Category Item:start-->
                            <div class="col-4 col-lg-2 col-xl-2 mb-4 index-category">
                                <a class="index-category" href="{{ $menu->link  }}" title="">
                                    <div>
                                        <img src="{{ $menu->icon }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-xl img-fluid img-opacity">
                                    </div>
                                    <strong class="text-center d-block fs-7">{{ $menu->title  }}</strong>
                                </a>
                            </div>
                            <!--                Category Item:end-->
                            @if ($loop->index % 5 == 4)
                                <div class="clearfix"></div>
                            @endif
                        @endforeach

                    </div>
                    <!--                Row:end-->

                </div>
            </div>

        </section>
    @elseif (isset($options['type']) && $options['type'] === 'features_menu')
        <div class="container">
            <div class="row tw-justify-center gy-4">
                @foreach ($menus->childMenus  as $menu)
                <div class="col-lg-2 col-12 col-md-4">
                    <div class="icon-footer-box">
                        <i class="{{  $menu->icon  }}"></i>
                        <div class="tw-flex tw-flex-col">
                            <span>{{ $menu->title }}</span>
                            <label for=""></label>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    @elseif (isset($options['type']) && $options['type'] === 'menu_category')
        @if ($menus)
        <div class="tw-flex tw-items-center tw-justify-between">
            <span class="tw-font-bold">دسته بندی های دیگر</span>
            <div>
                <div class="tw-flex">
                    <button class="" id="category-products-prev"><i class="fa fa-chevron-right"></i></button>
                    <button class="" id="category-products-next"><i class="fa fa-chevron-left"></i></button>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-1 category-main gy-3">
            <div class="col-12">
                <div class="swiper category-boxes-slider">
                    <div class="swiper-wrapper">
                        @foreach ($menus->childMenus  as $menu)
                            <a href="#" class="swiper-slide text-dark">
                                <div class="card">
                                    <div class="card-body tw-rounded-xl">
                                        <img class="tw-w-full tw-h-28 tw-block tw-relative tw-rounded-md tw-object-cover" src="{{  $menu->icon  }}" alt="">
                                        <span class="tw-text-[13px] mt-1 fw-medium tw-flex tw-items-center tw-justify-center">{{ $menu->title }} </span>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
    <!--    Categories:end-->

</div>
