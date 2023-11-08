<?php

namespace Lucasborges24\BrazilHolidays\Tests;

use Orchestra\Testbench\TestCase as OrchertraTest;

class OrchestraTestCase extends OrchertraTest
{
    protected function getPackageProviders($app): array
    {
        return [
            \Lucasborges24\BrazilHolidays\BrazilHolidaysServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'BrazilHoliday' => \Lucasborges24\BrazilHolidays\BrazilHolidaysFacade::class,
        ];
    }
}