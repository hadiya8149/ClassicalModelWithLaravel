<?php
namespace App\Filters;

use Closure;

class Description
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('description')) {
            return $next($request);
        }

        return $next($request)->where('productDescription', request()->input('description'));
    }
}