<?php

namespace RyanXedi\GitInfo;

use Illuminate\Support\ServiceProvider;

class GitInfoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(GitInfo::class, function () {
            return new GitInfo;
        });
    }
}
