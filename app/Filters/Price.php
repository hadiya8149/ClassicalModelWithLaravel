<?php
namespace App\Filters;

use Closure;

class Price
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('price')) {
            return $next($request);
        }

        return $next($request)->where('buyPrice', request()->input('price'));
    }
}