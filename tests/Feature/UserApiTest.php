<?php

namespace Tests\Feature;  // Namespace correto para Feature Tests

use Tests\TestCase;

class UserApiTest extends TestCase
{
    public function testGetUsers()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'name', 'email']  // Modifique de acordo com sua estrutura JSON
        ]);
    }
}
