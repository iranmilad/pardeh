<!-- resources/views/home.blade.php -->
@extends('layouts.primary')

@section('title', config('app.name'))
@section('css')
<style>
    /* Add your desired styling for the countdown bar here */
    /* For example: background color, font size, etc. */
    .countdown-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #ff6347; /* Red color (similar to alert) */
            color: #fff;
            text-align: center;
            padding: 10px;
            font-family: Arial, sans-serif;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 100000000000000;
        }
</style>
@endsection


@section('content')
<!-- Your home page content here -->
<!-- Countdown timer section -->
<div class="countdown-bar d-none">
   تا افتتاحیه سایت <span id="countdown-date"></span>   مانده است
</div>

<!--Header::start-->

<header class="header">
    <livewire:LoadWidget blockId="Slider_slider 4" />
</header>
<!--Header::end-->

    <livewire:LoadWidget blockId="block_7" />


    <livewire:LoadWidget blockId="Banner_banner 1" />



    <div class="tw-py-5 mt-5 tw-mb-5">
        <livewire:LoadWidget blockId="menu_future" />
    </div>



    <livewire:LoadWidget blockId="block_1" />

    <livewire:LoadWidget blockId="block_2" />





    <livewire:LoadWidget blockId="block_3" />


    <div class="tw-py-5 tw-px-5 mt-5 tw-mb-5">
        <livewire:LoadWidget blockId="block_9" />
    </div>

    <livewire:LoadWidget blockId="block_4" />

@endsection



@section("js")
<script>
    //    // Set your target date (replace with your desired date)
    //    const targetDate = new Date('2024-08-22T23:59:59');

    //     // Function to update countdown
    //     function updateCountdown() {
    //         const currentDate = new Date();
    //         const timeRemaining = targetDate - currentDate;

    //         // Calculate days, hours, minutes, and seconds
    //         const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    //         const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //         const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    //         const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    //         // Display countdown
    //         document.getElementById('countdown-date').textContent = `${days} روز, ${hours} ساعت, ${minutes} دقیقه, ${seconds} ثانیه`;
    //     }

    //     // Initial call to update countdown
    //     updateCountdown();

    //     // Update countdown every second
    //     setInterval(updateCountdown, 1000);

</script>
@endsection
