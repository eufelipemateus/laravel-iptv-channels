<?php

namespace FelipeMateus\IPTVChannels;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use  FelipeMateus\IPTVChannels\Middleware\PublicCdn;

class IPTVProvider extends ServiceProvider {


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
        $this->registerMidleware();
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

    /**
     * Register Midleware
     *
     * @return void
     */
    private function registerMidleware(){
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('public_cdn', PublicCdn::class);
    }

}
