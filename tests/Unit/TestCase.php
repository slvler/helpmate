<?php

namespace slvler\helpmate\Tests\Unit;

use slvler\helpmate\QwertyHelperServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            QwertyHelperServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}