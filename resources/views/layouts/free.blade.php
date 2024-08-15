<!DOCTYPE html>
<html dir="rtl" lang="fa">
<!--Head::start-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>@yield('title')</title>

  @vite('resources/css/vendors/bootstrap/bootstrap.rtl.css')
  @vite('resources/css/style.css')
  @vite('resources/css/app.scss')
</head>
<!--Head::end-->

<!--Body::start-->

<body>
  @yield('content')
  @livewireScripts
  <script>
    function countdown(targetTimestamp) {
      return {
        days: 0,
        hours: 0,
        minutes: 0,
        seconds: 0,
        get formattedDays() {
          return String(this.days).padStart(2, '0');
        },
        get formattedHours() {
          return String(this.hours).padStart(2, '0');
        },
        get formattedMinutes() {
          return String(this.minutes).padStart(2, '0');
        },
        get formattedSeconds() {
          return String(this.seconds).padStart(2, '0');
        },
        targetDate: new Date(targetTimestamp),
        startCountdown() {
          this.updateCountdown();
          setInterval(() => {
            this.updateCountdown();
          }, 1000);
        },
        updateCountdown() {
          const now = new Date();
          const diff = this.targetDate - now;

          if (diff <= 0) {
            this.days = 0;
            this.hours = 0;
            this.minutes = 0;
            this.seconds = 0;
            return;
          }

          this.days = Math.floor(diff / (1000 * 60 * 60 * 24));
          this.hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          this.minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
          this.seconds = Math.floor((diff % (1000 * 60)) / 1000);
        },
      };
    }
  </script>
</body>
<!--Body::end-->

</html>
