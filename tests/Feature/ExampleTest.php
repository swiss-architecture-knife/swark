<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    #[Test]
    public function entrypoint_redirects_to_swark(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    #[Test]
    public function swark_is_available(): void
    {
        $response = $this->get('/swark/strategy');

        $response->assertStatus(200);
    }
}
