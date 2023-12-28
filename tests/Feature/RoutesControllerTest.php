<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_index(): void
    {
        $response = $this->get(route('index'));
        $response->assertStatus(200);
    }
}
