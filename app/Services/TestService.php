<?php

namespace App\Services;

use App\Interfaces\TestServiceInterface;

class TestService implements TestServiceInterface
{
    public function helloWorld()
    {
        return "hello world";
    }
}