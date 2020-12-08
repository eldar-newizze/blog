<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{

    public function testIndex()
    {
        $response = $this->get('/api/categories');
//        dump($response);
        dump($response->getData());

        $response->assertStatus(200);
    }

}
