<?php

namespace App\Http\ViewComposers;

use App\Components\Money\Currency;
use Illuminate\View\View;

class CurrencyComposer
{
    protected $currencies;

    public function __construct()
    {
        $this->currencies = require Currency::ROOT;
    }

    public function compose(View $view)
    {
        $view->with('currencies', $this->currencies);
    }
}
