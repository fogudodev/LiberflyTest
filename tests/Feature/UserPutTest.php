<?php

namespace Tests\Feature;  // Namespace correto para Feature Tests

use Tests\TestCase;

class UserPutTest extends TestCase
{
    public function testUpdateUser()
    {
        $response = $this->putJson('/api/users/1', [
            'name' => 'Updated Name'
        ]);
    
        $response->assertStatus(200); // Status de sucesso
        $response->assertJson([
            'id' => 1,
            'name' => 'Updated Name',
        ]);
    }
    
    
}
