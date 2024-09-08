<?php
namespace App\Filters;

use Closure;

class Name
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('name')) {
            return $next($request);
        }

        return $next($request)->where('productName', request()->input('name'));
    }
}