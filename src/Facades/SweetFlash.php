<?php

namespace DraperStudio\SweetFlash\Facades;

use Illuminate\Support\Facades\Facade;

class SweetFlash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sweet-flash';
    }
}
