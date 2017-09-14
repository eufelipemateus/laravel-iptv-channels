<?php

namespace Felipefm32\LaravelIPTV;

use Illuminate\Support\ServiceProvider;

class IPTVProvider extends ServiceProvider
{
	
	
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');
		$this->loadViewsFrom(__DIR__.'/views', 'IPTV');
		$this->loadRoutesFrom(__DIR__.'/routes.php');	
    }

    

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
	
}