<?php

namespace Marcovie\LaravelMoneyHelper;

class Money
{
    // Currency formatter's
    // Amount to display format with no currency symbol
    public static function moneyToFloatAmount($amount): float
    {
        return ($amount / 100);
    }

    // Amount to display format with currency symbol
    public static function moneyToDisplayFormat(int $amount, string $currency = 'GBP'): string
    {
        return CurrencyFormatter::format($amount, $currency);
    }

    // Amount to rounded up by nearest number
    // For example, 123456 will be rounded to 123460
    public static function moneyToRoundedUpByNearestNumber($amount, $nearest = 10): int
    {
        $remainder = $amount % $nearest;
        $rounded = $remainder === 0 ? $amount : $amount + ($nearest - $remainder);
        return $rounded;
    }
}
