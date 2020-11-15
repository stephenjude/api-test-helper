<?php

namespace Stephenjude\ApiTestHelper\Tests;

use Orchestra\Testbench\TestCase;
use Stephenjude\ApiTestHelper\ApiTestHelperServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ApiTestHelperServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
