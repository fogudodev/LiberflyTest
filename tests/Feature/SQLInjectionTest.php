<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SQLInjectionTest extends TestCase
{
    public function testSqlInjectionAttempt()
    {
        $response = $this->get('/api/users?id=1 OR 1=1');
        $response->assertStatus(400); // Esperar um erro ou uma resposta segura
    }
    

}
