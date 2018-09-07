<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class apiModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_llega_a_login()
    {
        //$this->assertTrue(true);
    	$this->get('/login')
    	->assertStatus(200);
    }

    public function test_api_crear()
    {
        //$this->assertTrue(true);
    	$this->get('/api/crearRegistro/{nombre}/{paterno}/{materno}/{comentario}')
    	->assertStatus(200);
    }

    public function test_api_actualizar()
    {
        //$this->assertTrue(true);
    	$this->get('/api/actualizarRegistro/{id}/{nombre}/{paterno}/{materno}/{comentario}')
    	->assertStatus(200);
    }

    public function test_api_mostrar_todo()
    {
        //$this->assertTrue(true);
    	$this->get('/api/muestraTodo')
    	->assertStatus(200);
    }

    public function test_api_mostrar_por_id()
    {
        //$this->assertTrue(true);
    	$this->get('/api/muestraPorId/{id}')
    	->assertStatus(200);
    }
}
