<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticateTest extends TestCase
{
    public function testAccessProtectedRouteWithoutToken()
    {
        $response = $this->get('/api/protected-route');
        $response->assertStatus(401); // Não autorizado
    }
}
