<?php

namespace Soap\AdminFortify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\AdminFortify\AdminFortify
 */
class AdminFortify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\AdminFortify\AdminFortify::class;
    }
}
