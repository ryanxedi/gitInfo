<?php

namespace RyanXedi\GitInfo\Tests;

use RyanXedi\GitInfo\Facades\GitInfo as Facade;
use RyanXedi\GitInfo\GitInfo;
use RyanXedi\GitInfo\Tests\TestCase;

class GitInfoTest extends TestCase
{
    public function test_it_gets_git_branch_name()
    {
        $gitInfo = new GitInfo();

        $this->assertSame(static::CURRENT_BRANCH, $gitInfo->branch());
    }

    public function test_can_use_facade()
    {
        $this->assertSame(static::CURRENT_BRANCH, Facade::branch());
    }

    public function test_can_resolve_dependency()
    {
        $this->assertSame(static::CURRENT_BRANCH, app(GitInfo::class)->branch());
    }
}
