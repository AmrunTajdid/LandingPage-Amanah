<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('PT Amanah Haramain International');
        $response->assertSee('AMANAH - Umroh dan Hajj Protection', false);
        $response->assertDontSee('Kalkulator Simulasi Proteksi Dana Jamaah');
        $response->assertSee('Bank Muamalat');
        $response->assertSee('logo-icon.png');
    }
}
