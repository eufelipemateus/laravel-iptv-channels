<?php

namespace  FelipeMateus\IPTVChannels\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use FelipeMateus\IPTVChannels\Model\IPTVConfig;

class IPTVLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale =  IPTVConfig::get('CURRENT_LOCALE','br');
        App::setLocale($locale);
        return $next($request);
    }
}
