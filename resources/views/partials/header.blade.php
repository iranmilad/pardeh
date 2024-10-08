<header class="tw-py-4" id="firstPixel">
    <div class="container">
        <div class="tw-flex tw-items-center tw-justify-between tw-h-20">
            <div class="lg:tw-hidden tw-flex tw-items-center tw-justify-center">
                <button class="navbar-menu " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a href="" class="navbar-favorite tw-flex tw-mr-3">
                    <i class="fa-regular fa-heart"></i>
                </a>
            </div>
            <a href="/"><img class="navbar-logo" src="{{ $setting->settings['logo'] }}" alt=""></a>
            <div class="tw-hidden lg:tw-block pre-main-search">
                @livewire('search')
            </div>
            <div class="tw-flex tw-items-center tw-flex-row-reverse lg:tw-flex-row  ">
                @if(Auth::guest())
                <a href="{{ route('login') }}" class="login-register-btn tw-h-[46px]">
                    <i class="fa-solid fa-user-large"></i>
                    <span class="tw-hidden md:tw-block">ورود/ثبت نام</span>
                </a>
                @else
                <a href="{{ route('dashboard.home') }}" class="login-register-btn tw-h-[46px]">
                    <i class="fa-solid fa-user-large"></i>
                </a>
                @endif
                @if (Route::current()->uri() == 'cart')
                    <button aria-controls="miniCart" class="btn navbar-cart tw-ml-3 lg:tw-mx-4">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span>{{$cartCount}}</span>
                    </button>
                @else
                    <button data-bs-toggle="offcanvas" data-bs-target="#miniCart" aria-controls="miniCart" class="btn navbar-cart tw-ml-3 lg:tw-mx-4">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span>{{$cartCount}}</span>
                    </button>
                @endif
                @if(Auth::guest())
                    <a href="{{ route('favorites') }}" class="navbar-favorite tw-hidden lg:tw-flex">
                @else
                    <a href="{{ route('dashboard.favorites') }}" class="navbar-favorite tw-hidden lg:tw-flex">
                @endif
                    <i class="fa-regular fa-heart"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- livewire menu -->
<x-desktop-menu :alias="'main_menu'" />
<x-mobile-menu :alias="'main_menu'" />
