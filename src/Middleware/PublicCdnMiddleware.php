<?php

namespace  Tschope\IPTVChannels\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tschope\IPTVCore\Model\IPTVConfig;

class PublicCdnMiddleware
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
        if(!IPTVConfig::get('URL_CDN')){
            return response(['Url cdn is disabled.'], 503);
        }
        return  $next($request);
    }
}
