<?php

namespace Rconfig\Inspire\Tests;

use Tests\TestCase;

class SampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testInspire()
    {
        $response = $this->get('/inspire');

        $response->assertSee('Climb the mountains to see lowlands. -Chinese Proverb');

        $response->assertStatus(200);
    }
}
