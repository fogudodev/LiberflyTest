<?php

namespace Tests\Feature;  // Namespace correto para Feature Tests

use Tests\TestCase;

class UserCreateTest extends TestCase
{
    public function testCreateUser()
    {
        $response = $this->postJson('/api/users', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'age' => '29'
        ]);
    
        $response->assertStatus(201); // Status para criação bem-sucedida
        $response->assertJson([
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'age' => '29',
        ]);
    }
    
    
}
