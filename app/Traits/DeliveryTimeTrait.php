<?php
namespace App\Traits;

use Morilog\Jalali\Jalalian;
use Carbon\Carbon;

trait DeliveryTimeTrait
{
    protected $extraDaysForNonServiceItems = 2; // تعداد روز اضافه برای آیتم‌های بدون سرویس
    protected $baseDeliveryDays = 3; // تعداد روزهای پایه برای تحویل

    /**
     * محاسبه زمان ارسال بر اساس محتوای سبد و زمان انجام کار
     */
    public function getAvailableTimeWithBasket($basket)
    {
        $dates = [];
        $today = Carbon::now(); // تاریخ میلادی
        $isServiceInBasket = false;
        $maxWorkTime = 0; // بیشترین زمان انجام کار برای آیتم‌ها

        // چک کردن وجود سرویس و محاسبه بیشترین زمان انجام کار در سبد
        foreach ($basket->items as $item) {
            if ($item->service) {
                $isServiceInBasket = true;
            }
            if (isset($item->time_total)) {
                $maxWorkTime = max($maxWorkTime, $item->time_total);
            }
        }

        $daysToAdd = $isServiceInBasket ? 0 : $this->extraDaysForNonServiceItems;

        // محاسبه تاریخ تحویل بر اساس زمان انجام کار و تاریخ پایه
        $deliveryDate = $this->calculateDeliveryDateWithWorkTime($today, $daysToAdd, $maxWorkTime);

        for ($i = 0; $i < 3; $i++) {
            $currentDay = $deliveryDate->copy()->addDays($daysToAdd);

            // اگر روز تعطیل باشد، به روز کاری بعدی موکول می‌کنیم
            while ($this->isHoliday($currentDay)) {
                $currentDay->addDay();
            }

            $jalaliDate = Jalalian::fromCarbon($currentDay);

            $dates[] = [
                "dayWeek" => $this->getPersianDayOfWeek($currentDay->dayOfWeek),
                "dayMonth" => $jalaliDate->format('Y/m/d'),
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
     * محاسبه تاریخ تحویل بر اساس زمان انجام کار
     */
    public function calculateDeliveryDateWithWorkTime(Carbon $startDate, $baseDays, $workTimeInDays)
    {
        $totalDaysToAdd = $baseDays + ceil($workTimeInDays / 24); // تبدیل زمان کار به روز

        $deliveryDate = $startDate->copy()->addDays($totalDaysToAdd);

        // اگر روز تعطیل باشد، به روز کاری بعدی موکول می‌کنیم
        while ($this->isHoliday($deliveryDate)) {
            $deliveryDate->addDay();
        }

        return $deliveryDate;
    }

    /**
     * محاسبه تعداد روزهای باقی‌مانده تا زمان تحویل
     */
    public function calculateDaysUntilDelivery($deliveryDate)
    {
        $today = Carbon::now();
        $daysUntilDelivery = $today->diffInDays($deliveryDate, false); // محاسبه تعداد روزها

        return $daysUntilDelivery;
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

    /**
     * بررسی اینکه آیا روز تعطیل است یا خیر (پنج‌شنبه و جمعه)
     */
    private function isHoliday(Carbon $date)
    {
        // در اینجا شماره 5 (پنج‌شنبه) و 6 (جمعه) به عنوان روزهای تعطیل در نظر گرفته شده‌اند.
        return $date->dayOfWeek === 4 || $date->dayOfWeek === 5;
    }

    /**
     * محاسبه زمان کل انجام کار بر اساس ترکیب‌ها
     */
    public function calculateTotalWorkTime($selectedIndependentAttributes, $selectedDependentAttributes, $product)
    {
        $totalWorkTime = 0;

        foreach ($selectedIndependentAttributes as $attributeId => $selectedValue) {
            $combination = $product->getIndependentCombinationDetails($attributeId, $selectedValue);
            if ($combination && isset($combination->time_per_unit)) {
                $totalWorkTime += $combination->time_per_unit;
            }
        }

        if (!empty($selectedDependentAttributes)) {
            $combination = $product->getCombinationDetails($selectedDependentAttributes);
            if ($combination && isset($combination->time_per_unit)) {
                $totalWorkTime += $combination->time_per_unit;
            }
        }

        return $totalWorkTime;
    }
}
