
<?php

/* 
COMO NÃO TEMOS LOGIN, NÃO ESTA FUNCIONANDO!
MAS ESTA PRONTO PARA IMPLEMENTAÇÃO DA FUNÇÃO.
*/

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class XssAttackTest extends TestCase
{
    public function testXssAttack()
    {
        $response = $this->postJson('/api/users', [
            'name' => '<script>alert("XSS")</script>',
            'email' => 'user@example.com',
            'password' => 'password123'
        ]);
    
        $response->assertStatus(422); // Deve rejeitar entradas maliciosas
    }

}
