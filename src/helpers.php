<?php

use Marcovie\LaravelMoneyHelper\Money;

$config = config('money.helpers', array_fill_keys([
    'moneyToDisplayFormat',
    'moneyToFloatAmount',
    'moneyToRoundedUpByNearestNumber',
], true));


if (($config['moneyToDisplayFormat'] ?? false) && ! function_exists('moneyToDisplayFormat')) {
    function moneyToDisplayFormat(int $amount, string $currency = 'GBP'): string
    {
        return Money::moneyToDisplayFormat($amount, $currency, app()->getLocale() ?? 'en_GB');
    }
}

if (($config['moneyToFloatAmount'] ?? false) && ! function_exists('moneyToFloatAmount')) {
    function moneyToFloatAmount(float $value): float
    {
        return Money::moneyToFloatAmount($value);
    }
}

if (($config['moneyToRoundedUpByNearestNumber'] ?? false) && ! function_exists('moneyToRoundedUpByNearestNumber')) {
    function moneyToRoundedUpByNearestNumber(int $amount, int $nearest = 10): int
    {
        return Money::moneyToRoundedUpByNearestNumber($amount, $nearest);
    }
}
