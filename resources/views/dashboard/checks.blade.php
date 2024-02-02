@extends('layouts.dashboard')

@section('title', 'چک ها')

@section('dashboard-css')
@endsection

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4 d-flex tw-items-center">
        چک های ثبت شده ی شما
    </p>
    <div class="p-4 tw-w-auto tw-mx-auto tw-text-center">
        <span>هنوز چک برای شما ثبت نشده است</span>
    </div>
    <div class="table-responsive">
        <table  class="table">
            <thead>
                <tr>
                    <th>شماره چک</th>
                    <th>مبلغ چک</th>
                    <th>تاریخ سر رسید</th>
                    <th>وضعیت</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1234#</td>
                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></td>
                    <td>25-3-1402</td>
                    <td><i class="tw-text-emerald-500 fa-solid fa-circle-check"></i></td>
                </tr>
                <tr>
                    <td scope="row">1234#</td>
                    <td>25,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></td>
                    <td>25-3-1402</td>
                    <td><i class="tw-text-emerald-500 fa-solid fa-circle-check"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <label class="tw-text-gray-500 fs-7" for="">میزان نقدی: </label>
        <span class="fw-bold fs-7" >2,000,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></span>
    </div>
    <div>
        <label class="tw-text-gray-500 fs-7" for="">جمع کل نقد: </label>
        <span class="fw-bold fs-7" >500,000 <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></span>
    </div>
    <div>
        <label class="tw-text-gray-500 fs-7" for="">جمع کل چک: </label>
        <span class="fw-bold fs-7" >2</span>
    </div>
</div>
<!--                        User Panel Orders:end-->
@endsection

@section('dashboard-js')
@endsection