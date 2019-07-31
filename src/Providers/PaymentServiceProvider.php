<?php

namespace Lakow\Safe2Pay\Providers;

use Lakow\Safe2Pay\Safe2Pay;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Safe2Pay\Safe2Pay as Api;

class PaymentServiceProvider extends ServiceProvider
{
    public function boot() 
    {
        $this->publishes([
            __DIR__ . '/../config/payment.php' => config_path('payment.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton('safe2pay', function() {
            $token    = $this->app->make('config')->get('safe2pay.api_key');
            $sandbox  = $this->app->make('config')->get('safe2pay.sandbox');
            return (new Safe2Pay(new Api($token)))->isSandbox($sandbox);
        });

        $this->mergeConfigFrom(
            __DIR__ . '/../config/payment.php',
            'safe2pay'
        );
    }
}