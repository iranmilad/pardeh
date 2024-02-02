@extends('layouts.dashboard')

@section('title', 'سررسید اقساط')

@section('dashboard-css')
@endsection

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4 d-flex tw-items-center">
        اطلاعات سررسید اقساط
    </p>
    <div class="p-4 tw-w-auto tw-mx-auto tw-text-center">
        <span>پرداخت اقساط برای شما فعال نشده است</span>
    </div>
    <div class="table-responsive">
        <table  class="table">
            <thead>
                <tr>
                    <th>شماره قسط</th>
                    <th>مبلغ چک</th>
                    <th>تاریخ سر رسید</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></td>
                    <td>25-3-1402</td>
                    <td><i class="tw-text-emerald-500 fa-solid fa-circle-check"></i></td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></td>
                    <td>25-3-1402</td>
                    <td><i class="tw-text-emerald-500 fa-solid fa-circle-check"></i></td>
                    <td><button class="btn btn-success btn-sm rounded-pill">پرداخت کردن</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!--                        User Panel Orders:end-->
@endsection

@section('dashboard-js')
@endsection