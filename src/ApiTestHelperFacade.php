<?php

namespace Stephenjude\ApiTestHelper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stephenjude\ApiTestHelper\Skeleton\SkeletonClass
 */
class ApiTestHelperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'api-test-helper';
    }
}
