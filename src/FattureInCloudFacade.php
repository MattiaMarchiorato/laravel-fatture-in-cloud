<?php

namespace InsologyStudio\FattureInCloud;
use Illuminate\Support\Facades\Facade;

class FattureInCloudFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fatture-in-cloud';
    }
}
