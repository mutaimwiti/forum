<?php

namespace Tests\Unit;

use App\Reply;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_has_an_owner()
    {
        $reply =  create(Reply::class);

        $this->assertInstanceOf('App\User', $reply->owner);
    }
}
