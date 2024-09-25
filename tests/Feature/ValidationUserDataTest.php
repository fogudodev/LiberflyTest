<?php

namespace Tests\Feature;  // Namespace correto para Feature Tests

use Tests\TestCase;

class ValidationUserDataTest extends TestCase
{
    public function testCreateUserValidationFail()
{
    $response = $this->postJson('/api/users', [
        'name' => '', // Nome em branco
        'email' => 'invalid-email', // Email inválido
    ]);

    $response->assertStatus(422); // Código para erro de validação
    $response->assertJsonValidationErrors(['name', 'email']);
}
    
}
