<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Cafe;

class PostApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_ListarCafes()
    {
        $response = $this->get('/api/cafe');
        
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'Autor',
                'Titulo',
                'Contenido',
                'created_at',
                'updated_at',
            ]
        ]);
    }
    public function test_CrearUnCafe()
    {
            $parametros = [
            "Autor" => "Juan Pérez",
            "Titulo" => "Café de prueba",
            "Contenido" => "Este es un café de prueba para la API.",
        ];
        $response = $this->post('/api/cafe', $parametros);
        $response->assertStatus(201);
        $response->assertJsonStructure([
            'id',
            'Autor',
            'Titulo',
            'Contenido',
            'created_at',
            'updated_at',
        ]);

        $this->assertDatabaseHas('cafes', [
            "Autor" => "Juan Pérez",
            "Titulo" => "Café de prueba",
            "Contenido" => "Este es un café de prueba para la API.",
        ]);
    }
    public function test_CrearUnCafeConDatosErroneos()
{
    $parametros = [
        'Autor' => 'Juan Pérez',
    ];

    $response = $this->post('/api/cafe', $parametros);

    $response->assertStatus(500);
    $response->assertJsonValidationErrors(['Titulo', 'Contenido']);
}
}