<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testContoh()
    {
        $youtube = Env('YOUTUBE');

        self::assertEquals('Irfan Martien', $youtube);
    }
}
