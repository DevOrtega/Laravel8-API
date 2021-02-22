<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Carbon\Carbon;


class UpdateConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update()
    {
        $updatedSystem= ["name"=>"El Sistema", "description"=>"Este es el sistema principal"];
        $id=1;
        $response= $this->call('PATCH', '/api/configurations/{id}', [$updatedSystem, $id]);

        $response->assertStatus(200);
    }
}
