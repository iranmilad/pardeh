<?php

namespace App\Traits;

use App\Models\Region;
use Carbon\Carbon;

trait ShippingCostAndTimeCalculator
{
    /**
     * Calculate shipping cost and delivery time based on the order region and delivery type.
     *
     * @param string $province
     * @param string $city
     * @param string $deliveryType
     * @return array
     */
    public function calculateShippingCostAndTime($province, $city, $deliveryType)
    {
        // دریافت اطلاعات ناحیه (استان و شهر) از مدل Region
        $region = Region::where('province', $province)
                        ->where('city', $city)
                        ->first();

        if (!$region) {
            return [
                'cost' => 0,
                'time' => 0,
                'error' => 'Region not found',
            ];
        }

        // تعیین هزینه بر اساس نوع تحویل (home_delivery یا self_delivery)
        $cost = $this->calculateCostBasedOnDeliveryType($region, $deliveryType);

        // تعیین زمان بر اساس نوع تحویل و منطقه
        $deliveryTime = $this->calculateDeliveryTime($region, $deliveryType);

        return [
            'cost' => $cost,
            'time' => $deliveryTime,
        ];
    }

    /**
     * Calculate the shipping cost based on the delivery type and region.
     *
     * @param Region $region
     * @param string $deliveryType
     * @return float
     */
    private function calculateCostBasedOnDeliveryType($region, $deliveryType)
    {
        // به عنوان مثال: اگر تحویل درب منزل باشد، هزینه بالاتر است
        switch ($deliveryType) {
            case 'home_delivery':
                return $region->home_delivery_cost;
            case 'self_delivery':
                return $region->self_delivery_cost;
            default:
                return 0;
        }
    }

    /**
     * Calculate the delivery time based on the delivery type and region.
     *
     * @param Region $region
     * @param string $deliveryType
     * @return int
     */
    private function calculateDeliveryTime($region, $deliveryType)
    {
        // به عنوان مثال: اگر تحویل درب منزل باشد، زمان بیشتری می‌برد
        switch ($deliveryType) {
            case 'home_delivery':
                return $region->home_delivery_time;
            case 'self_delivery':
                return $region->self_delivery_time;
            default:
                return 0;
        }
    }

    /**
     * Calculate the estimated delivery date based on the current date and delivery time.
     *
     * @param int $deliveryTime
     * @return string
     */
    public function calculateEstimatedDeliveryDate($deliveryTime)
    {
        $currentDate = Carbon::now();
        $estimatedDeliveryDate = $currentDate->addDays($deliveryTime);

        return $estimatedDeliveryDate->toDateString(); // تاریخ تحویل تخمینی
    }



}
