<?php

namespace Lucasborges24\BrazilHolidays;

use Illuminate\Support\Facades\Facade;

class BrazilHolidaysFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'brazil-holidays';
    }
}
