<?php

namespace Marcovie\LaravelMoneyHelper;

use NumberFormatter;

class CurrencyFormatter
{
    public static function format(int $amount, string $currency, $appLocale = 'en_GB'): string
    {
        $formatter = new NumberFormatter($appLocale, NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($amount / 100, $currency);
    }
}
