<?php

declare(strict_types=1);
namespace Genericmilk\Element\Facades;
use Illuminate\Support\Facades\Facade;

class Element extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Element';
    }
}
