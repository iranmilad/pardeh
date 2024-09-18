<?php

namespace App\Services;

use App\Models\CodePiece;

class CodePlacementService
{
    /**
     * دریافت قطعات کد برای صفحه‌ای با URL مشخص
     *
     * @param string $url
     * @return \Illuminate\Support\Collection
     */
    public function getCodePiecesForPage($url)
    {
        // دریافت کدهای در حال انتشار و آدرس منطبق یا بدون آدرس (url خالی)
        return CodePiece::where('status', 'published')
            ->where(function ($query) use ($url) {
                $query->where('url', $url)
                    ->orWhere('url', '*') // * برای تطابق با هر صفحه
                    ->orWhereNull('url') // url خالی
                    ->orWhere('url', ''); // url خالی
            })
            ->orderBy('priority', 'desc') // ترتیب بر اساس اولویت
            ->get();
    }

    /**
     * سازماندهی کدهای دریافت‌شده بر اساس مکان
     *
     * @param string $url
     * @return array
     */
    public function renderCode($url)
    {
        // دریافت قطعات کد با توجه به URL
        $codePieces = $this->getCodePiecesForPage($url);

        // سازماندهی کدها بر اساس مکان‌های تعریف‌شده
        $placementMap = [
            'header_start' => [],
            'header_end' => [],
            'body_start' => [],
            'body_end' => [],
            'footer_start' => [],
            'footer_end' => [],
        ];

        // دسته‌بندی کدها به مکان‌های مختلف
        foreach ($codePieces as $piece) {
            if (isset($placementMap[$piece->placement])) {
                $placementMap[$piece->placement][] = $piece->code;
            }
        }

        return $placementMap;
    }
}
