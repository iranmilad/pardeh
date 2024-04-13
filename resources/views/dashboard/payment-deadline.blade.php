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

    @if ($credits->isEmpty())
    <div class="p-4 tw-w-auto tw-mx-auto tw-text-center">
        <span>پرداخت اقساط برای شما فعال نشده است</span>
    </div>
    @else
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>شماره قسط</th>
                    <th>مبلغ قسط</th>
                    <th>تاریخ سر رسید</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($credits as $credit)
                <tr>
                    <td scope="row">{{ $credit->id }}</td>
                    <td>{{ number_format($credit->amount) }} <svg style="width: 16px; height: 16px; fill: var(--undefined);"><use xlink:href="#toman"></use></svg></td>
                    <td>{{ $credit->dueDateShamsi }}</td>
                    <td>
                        @if ($credit->payment_status == 'paid' )
                        <i class="tw-text-emerald-500 fa-solid fa-circle-check"></i>
                        @elseif ($credit->payment_status == 'unpaid' and $credit->due_date < $today)
                        <i class="fa fa-times-circle"></i>
                        @endif
                    </td>
                    <td>
                        @if ($credit->payment_status == 'unpaid' && $credit->due_date <=  $today)
                        <button class="btn btn-success btn-sm rounded-pill">پرداخت کردن</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

</div>
<!--                        User Panel Orders:end-->
@endsection

@section('dashboard-js')
@endsection
