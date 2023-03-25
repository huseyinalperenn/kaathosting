<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Client\Client;
use App\Interfaces\ClientInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ClientInterface::class, function(){
            $config = [
                'base_url' => env('WHMCS_API_URL')
            ];
            return new Client($config);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
