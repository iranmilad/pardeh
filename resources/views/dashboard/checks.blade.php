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
    @if ($checks->isEmpty())
    <div class="p-4 tw-w-auto tw-mx-auto tw-text-center">
        <span>هنوز چک برای شما ثبت نشده است</span>
    </div>
    @else
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>شماره چک</th>
                    <th>مبلغ چک</th>
                    <th>تاریخ سر رسید</th>
                    <th>وضعیت</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($checks as $check)
                <tr>
                    <td scope="row">{{ $check->check_number }}</td>
                    <td>{{ number_format($check->amount) }} <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></td>
                    <td>{{ $check->dueDateShamsi }}</td>
                    <td>
                        @if ($check->payment_status=='paid')
                        <i class="tw-text-emerald-500 fa-solid fa-circle-check"></i>

                        @elseif ($check->payment_status=='unpaid' and $check->due_date < $today)
                        <i class="fa fa-times-circle"></i>

                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <label class="tw-text-gray-500 fs-7" for="">میزان وصول شده: </label>
        <span class="fw-bold fs-7">{{ number_format($totalReceived) }} <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></span>
    </div>
    <div>
        <label class="tw-text-gray-500 fs-7" for="">جمع در انتظار وصول: </label>
        <span class="fw-bold fs-7">{{ number_format($totalPending) }} <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></span>
    </div>
    <div>
        <label class="tw-text-gray-500 fs-7" for="">جمع کل چک: </label>
        <span class="fw-bold fs-7">{{ $totalChecks }}</span>
    </div>
    @endif
</div>
<!--                        User Panel Orders:end-->
@endsection

@section('dashboard-js')
@endsection
