<?php

namespace Litepie\Html\Facades;

use Illuminate\Support\Facades\Facade;

class Html extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lavalite.locale';
    }
}
