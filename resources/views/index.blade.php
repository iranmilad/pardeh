<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', config('app.name'))

@section('content')
<!-- Your home page content here -->
<!--Header::start-->

<header class="header">
    <livewire:LoadWidget blockId="block_6" />
</header>
<!--Header::end-->

    <livewire:LoadWidget blockId="block_7" />


    <livewire:LoadWidget blockId="block_5" />

    <div class="tw-py-5 mt-5 tw-mb-5">
        <livewire:LoadWidget blockId="block_8" />
    </div>

    <livewire:LoadWidget blockId="block_1" />

    <livewire:LoadWidget blockId="block_2" />





    <livewire:LoadWidget blockId="block_3" />


    <div class="tw-py-5 tw-px-5 mt-5 tw-mb-5">
        <livewire:LoadWidget blockId="block_9" />
    </div>


    <livewire:LoadWidget blockId="block_4" />

    <!-- Last Blog:END1 -->
@endsection
