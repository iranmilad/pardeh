<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', 'بلاگ')

@section('content')

<livewire:LoadWidget blockId="block_14" />

<div class="container tw-mt-10">
    <div class="row">

        <!--                    Products In Cart:start-->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-9">
            <livewire:LoadWidget blockId="block_15" />
        </div>
        <!--                    Products In Cart:end-->

        <!--                    Products Prices:start-->
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 tw-mt-3 lg:tw-mt-0">
            <div class="cart-cal  overflow-hidden">
                <livewire:LoadWidget blockId="block_17" />
            </div>
            <div class="cart-cal  overflow-hidden">
                <livewire:LoadWidget blockId="block_16" />
            </div>
        </div>
        <!--                    Products Prices:end-->
    </div>
</div>
@endsection
