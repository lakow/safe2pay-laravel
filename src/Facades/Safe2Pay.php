<?php

namespace Lakow\Safe2Pay\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Safe2Pay extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'safe2pay';
    }
}
