<?php

namespace Marcovie\LaravelMoneyHelper;

use Illuminate\Support\ServiceProvider;

class MoneyHelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/money.php', 'money');
    }

    public function boot()
    {
        $helpers = __DIR__ . '/helpers.php';
        if (file_exists($helpers)) {
            require_once $helpers;
        }
    }
}
