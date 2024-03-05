@extends('layouts.shipping')

@section('title', "سبد خرید")

@section('shipping-content')
<div class="tw-px-5" x-data="{ modal: false }">
    <!--                        Cart Header:start-->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            سبد خرید شما
            <button class="btn" id="show-tour-guide">
                <i class="fa-solid fa-circle-question"></i>
            </button>
        </p>
        <button class="btn custom-btn-danger btn-sm tw-px-4 tw-rounded-xl" id="remove-all-carts">حذف همه</button>
    </div>
    <!--                        Cart Header:end-->

    <x-cart />
    

    <div class="modal fade" tabindex="-1" id="detailsModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">جزئیات محصول شما</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary tw-px-3 btn-sm tw-rounded-xl" data-bs-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>

    <!-- START: Header -->
    <div class="cart-header d-flex justify-content-between align-items-center my-4">
        <p class="fw-bold">
            خدمات
        </p>
    </div>
    <!-- END: Header -->
    <x-cart-service />

</div>
@endsection