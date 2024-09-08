<?php
namespace App\Filters;

use Closure;

class ProductLine
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('active')) {
            return $next($request);
        }

        return $next($request)->where('active', request()->input('active'));
    }
}