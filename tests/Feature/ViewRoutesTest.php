<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewRoutesTest extends TestCase
{
    public function testCompressView()
    {
        $response = $this->get('compress');
        $response->assertStatus(200);
    }

    public function testSecureView()
    {
        $response = $this->get('cut');
        $response->assertStatus(200);
    }

    public function testCutView()
    {
        $response = $this->get('secure');
        $response->assertStatus(200);
    }
}
