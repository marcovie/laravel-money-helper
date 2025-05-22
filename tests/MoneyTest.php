<?php

use Marcovie\LaravelMoneyHelper\Money;

test('formats to float', function () {
    $money = new Money();
    expect($money->moneyToFloatAmount(123456))->toEqual('1234.56');
});

test('rounds up to nearest 10', function () {
    $money = new Money();
    expect($money->moneyToRoundedUpByNearestNumber(123456))->toEqual(123460);
});

test('Formats to display amount', function () {
    // app()->setLocale('en_GB');
    // config(['app.name' => 'MyTestApp']);
    $money = new Money();
    expect($money->moneyToDisplayFormat(123456))->toEqual('£1,234.56');
});
