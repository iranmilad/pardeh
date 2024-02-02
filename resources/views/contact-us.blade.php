@extends('layouts.primary')

@section('title', 'تماس با ما')

@section('content')
<div class="container">
    <div class="tw-mb-5" id="map"></div>
    <!--    Contact Us:start-->
    <section class="contact-us border-radius-2xl">
        <div class="row">
            <div class="col-12 col-lg-8">
                <!--        Contact Us Form:start-->
                <div class="contact-us-wrapper mb-3">
                    <div class="contact-us-header border-bottom-gray-150 pb-2">
                        <h2 class="fs-5 fw-bold">تماس با {{config('app.name')}}</h2>
                        <div class="vertical-line"></div>
                    </div>
                    <div class="contact-us-content">
                        <form method="post" action="" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-3">
                                    <label for="subject">موضوع <span class="text-danger">*</span></label>
                                    <select name="subject" id="subject" class="wide mt-2 form-select">
                                        <option selected>مدیریت</option>
                                        <option value="1">انتقاد</option>
                                        <option value="2">پیشنهاد</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-3">
                                    <label for="name">نام و نام خانوادگی <span class="text-danger">*</span></label>
                                    <input name="name" type="text" class="form-control mt-2" id="name">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-3">
                                    <label for="email">ایمیل <span class="text-danger">*</span></label>
                                    <input name="email" type="text" class="form-control mt-2" id="email">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-3">
                                    <label for="phone">تلفن تماس <span class="text-danger">*</span></label>
                                    <input name="phone" type="text" class="form-control mt-2" id="phone">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-3">
                                    <label for="orderNumber">شماره سفارش </label>
                                    <input name="product-id" type="text" class="form-control mt-2" id="orderNumber">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 my-3">
                                    <label for="message">متن پیام <span class="text-danger">*</span></label>
                                    <textarea name="content" type="text" class="form-control mt-2" id="message" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn custom-btn-primary">ثبت و ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--        Contact Us Form:end-->
            </div>
            <div class="col-12 col-lg-4">
                <!--        Contact Us Information:start-->
                <div class="contact-us-wrapper mb-3">
                    <div class="contact-us-header pb-2">
                        <h2 class="fs-5 fw-bold">اطلاعات {{config('app.name')}}</h2>
                        <div class="vertical-line"></div>
                    </div>
                    <div class="contact-us-content mt-3">
                        <!--                address-->
                        <div class="mb-3">
                            <strong class="fs-5">آدرس دفتر مرکزی</strong>
                            <p class="fs-7 mt-2">سبزوار - بلوار آزادگان - آزادگان 19 - کوچه شهید امری - پلاک 92</p>
                        </div>
                        <!--                contact phone email ...-->
                        <div class="mb-3">
                            <strong class="fs-5">شماره تماس</strong>
                            <p class="fs-7 mt-2">09374039436</p>
                        </div>
                        <div class="mb-3">
                            <strong class="fs-5">ایمیل</strong>
                            <p class="fs-7 mt-2">info@email.com</p>
                        </div>
                    </div>
                </div>
                <!--        Contact Us Information:end-->
            </div>
        </div>
    </section>
    <!--    Contact Us:end-->
</div>
@endsection
