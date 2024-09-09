<?php
namespace App\Traits;

use Morilog\Jalali\Jalalian;
use Carbon\Carbon;

trait DeliveryTimeTrait
{
    // Property برای تنظیم تعداد روزها در صورت عدم وجود سرویس
    protected $extraDaysForNonServiceItems = 2;

    /**
     * محاسبه زمان ارسال بر اساس محتوای سبد
     */
    public function getAvailableTimeWithBasket($basket)
    {
        $dates = [];
        $today = Carbon::now(); // تاریخ میلادی
        $isServiceInBasket = false;

        // چک کردن وجود سرویس در سبد
        foreach ($basket->items as $item) {
            if ($item->service) {
                $isServiceInBasket = true;
                break;
            }
        }

        // اگر سرویسی در سبد وجود ندارد، تعداد روزها به property اضافه می‌کنیم.
        $daysToAdd = $isServiceInBasket ? 0 : $this->extraDaysForNonServiceItems;

        // اضافه کردن تاریخ‌های بعدی که فقط روزهای کاری هستند (شنبه تا پنج‌شنبه)
        for ($i = 0; $i < 3; $i++) {
            $currentDay = $today->copy()->addDays($daysToAdd);

            // اگر روز تعطیل باشد، به روز کاری بعدی موکول می‌کنیم
            while ($currentDay->isWeekend()) {
                $currentDay->addDay();
            }

            // تبدیل تاریخ میلادی به شمسی
            $jalaliDate = Jalalian::fromCarbon($currentDay);

            $dates[] = [
                "dayWeek" => $this->getPersianDayOfWeek($currentDay->dayOfWeek),
                "dayMonth" => $jalaliDate->format('Y/m/d'), // نمایش تاریخ شمسی
                "time" => [
                    "9:30-13:00",
                    "14:30-18:00",
                    "19:30-22:00"
                ]
            ];

            $daysToAdd++;
        }

        return ["dates" => $dates];
    }

    /**
     * تبدیل شماره روز هفته به معادل فارسی
     */
    private function getPersianDayOfWeek($dayOfWeek)
    {
        $days = [
            6 => 'شنبه',
            0 => 'یکشنبه',
            1 => 'دوشنبه',
            2 => 'سه‌شنبه',
            3 => 'چهارشنبه',
            4 => 'پنج‌شنبه',
            5 => 'جمعه'
        ];

        return $days[$dayOfWeek] ?? '';
    }
}
