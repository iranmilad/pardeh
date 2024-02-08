<header class="tw-py-4">
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
            <a href="/"><img class="navbar-logo" src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""></a>
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
                <a href="{{ route('cart') }}" class="navbar-cart tw-ml-3 lg:tw-mx-4">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <span>2</span>
                </a>
                <a href="{{ route('dashboard.favorites') }}" class="navbar-favorite tw-hidden lg:tw-flex">
                    <i class="fa-regular fa-heart"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<x-desktop-menu />

<x-mobile-menu />
