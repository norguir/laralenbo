<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class IouTest extends TestCase
{

	use RefreshDatabase, WithFaker;

    /** @test */
    public function an_anonymous_user_can_create_an_iou()
    {
		$this->expectException('Illuminate\Auth\AuthenticationException');
        $iou = factory('App\Iou')->create();
    }
}
