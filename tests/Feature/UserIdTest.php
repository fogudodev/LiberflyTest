<?php

namespace Tests\Feature;  // Namespace correto para Feature Tests

use Tests\TestCase;

class UserIdTest extends TestCase
{
    public function testGetUserById()
    {
        // Supondo que você tenha um usuário com ID 1
        $response = $this->get('/api/users/1');
        
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'id', 'name', 'email'
        ]);
    }
    
}
