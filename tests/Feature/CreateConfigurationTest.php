<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create()
    {
        $updatedSystem= ["id_related"=>6,"name"=>"El Sistema2", "value"=>"no especificado"];
        $response= $this->call('POST', '/api/configurations', $updatedSystem);

        $response->assertStatus(201);
    }
}
