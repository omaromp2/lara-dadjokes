<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DadJokesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetJoke()
    {
        $this->artisan('dadjoke')->assertExitCode(0);
    }
}
