@extends('layouts.primary')
@section("css")
@yield('dashboard-css')
@endsection
<?php
$currentUrl = url()->current();
$prefixToRemove = '/dashboard';
$strippedUrl = str_replace($prefixToRemove, '', $currentUrl);
// also remove http and host
preg_match('/\/\/[^\/]+(.+)/', $strippedUrl, $matches);

// Extracted part is in $matches[1]
$extractedPart = isset($matches[1]) ? $matches[1] : '';
?>
@section('content')
<div class="container">
    <!--    User Panel Wrapper:start-->
    <div class="user-panel-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
                    <!--        User Panel Aside:start-->
                    <aside class="user-panel-aside border border-radius-2xl py-3 tw-shadow-sm">
                        <!--            User Panel Header:start-->
                        <div class="user-panel-aside-header text-center border-bottom-gray-200 pb-2">
                            <!--                            User Picture:start-->
                            <i class="fa fa-user-circle cfs-1 gray-300"></i>
                            <!--                            User Picture:end-->

                            <!--                            User Name:start-->
                            <a href="/dashboard/user-info" class="d-flex tw-mx-auto tw-justify-center tw-items-center fw-bold mt-2">
                                فرهاد باقری
                                <span href="" class="ps-2">
                                    <i class="fa fa-pen tw-text-indigo-500 fa-md"></i>
                                </span>
                            </a>
                            <p class="gray-500">09374039436</p>
                            <!--                            User Name:end-->
                            <div class="fs-7 d-flex align-items-center tw-mx-auto tw-max-w-max">
                                <i class="me-2 text-warning fa-solid fa-badge-dollar"></i>
                                <span>اعتبار شما : <span>24,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></span></span>
                            </div>
                        </div>
                        <!--            User Panel Header:end-->

                        <!--                        User Panel Aside Menu:start-->
                        <div class="user-panel-aside-menu">
                            <ul>
                                <li class="<?php echo $extractedPart === '0' ? 'active' : '' ?>"><a href="/dashboard">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                        </svg>
                                        <span class="ps-2">
                                            داشبورد
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/user-info' ? 'active' : '' ?>"><a href="/dashboard/user-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                        <span class="ps-2">
                                            اطلاعات حساب کاربری
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/orders' ? 'active' : '' ?>"><a href="/dashboard/orders">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                                            <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                        <span class="ps-2">
                                            سفارش ها
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/favorites' ? 'active' : '' ?>"><a href="/dashboard/favorites">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                        <span class="ps-2">
                                            علاقه مندی ها
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/checks' ? 'active' : '' ?>"><a href="/dashboard/checks">
                                        <i class="fa-regular fa-money-check-pen"></i>
                                        <span class="ps-2">
                                            چک ها
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/payment-deadline' ? 'active' : '' ?>"><a href="/dashboard/payment-deadline">
                                        <i class="fa-regular fa-file-invoice-dollar"></i>
                                        <span class="ps-2">
                                            سررسید اقساط
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/comments' ? 'active' : '' ?>"><a href="/dashboard/comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                        </svg>
                                        <span class="ps-2">
                                            دیدگاه ها
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/changepass' ? 'active' : '' ?>"><a href="/dashboard/changepass">
                                        <i class="fa-regular fa-key"></i>
                                        <span class="ps-2">
                                            امنیت و رمز عبور
                                        </span>
                                    </a></li>
                                <li class="<?php echo $extractedPart === '/notifications' ? 'active' : '' ?>"><a href="/dashboard/notifications">
                                        <i class="fa-regular fa-messages"></i>
                                        <span class="ps-2">
                                            پیام ها
                                        </span>
                                    </a></li>
                                <li><a href="" class="text-danger">
                                        <i class="fa fa-sign-out-alt"></i>
                                        <span class="ps-2">
                                            خروج
                                        </span>
                                    </a></li>
                            </ul>
                        </div>
                        <!--                        User Panel Aside Menu:end-->
                    </aside>
                    <!--        User Panel Aside:end-->
                </div>

                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
                    <!--        User Panel Content:start-->
                    <div class="user-panel-content tw-h-full">
                        @yield('dashboard-content')
                    </div>
                    <!--        User Panel Content:end-->
                </div>
            </div>
        </div>
    </div>
    <!--    User Panel Wrapper:end-->
</div>
@endsection

@section("js")
@yield('dashboard-js')
@endsection