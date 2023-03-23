<?php

namespace RyanXedi\GitInfo\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use RyanXedi\GitInfo\GitInfoServiceProvider;

abstract class TestCase extends Orchestra
{
    const CURRENT_BRANCH = 'main';

    protected function getPackageProviders($app)
    {
        return [
            GitInfoServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app->setBasePath(__DIR__ . '/..');
    }
}
