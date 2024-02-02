@extends('layouts.free')

@section("content")
<!--Main:start-->
<main class="container mt-xxx-large">
    <div class="wrapper-404 text-center">
        <img src="{{ Vite::asset('resources/images/404.png') }}" alt="" class="img-fluid mt-5">
        <h1 class="fs-1 tw-mt-20">404</h1>
        <h2 class="fs-5 tw-mt-5">صفحه که به دنبال آن بودید پیدا نشد!</h2>
        <a href="/" class="text-info d-block fs-7 mt-3">صفحه اصلی
            <i class="fa fa-angle-left ms-1"></i>
        </a>
    </div>
</main>
<!--Main:end-->
@endsection