<?php

namespace RyanXedi\GitInfo\Facades;

use Illuminate\Support\Facades\Facade;
use RyanXedi\GitInfo\GitInfo as BaseGitInfo;

class GitInfo extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return BaseGitInfo::class;
    }
}
