<?php

namespace Tests\Feature;

use App\Services\CriadorDeSeries;
use App\Services\RemovedorDeSeries;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RemovedorDeSeriesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp():void
    {
        parent::setUp();
        $criadorDeSerie = new CriadorDeSeries();
        $this->serie= $criadorDeSerie->criarSerie('nome de teste', 1, 1);
    }

    public function testRemoverUmaSerie()
    {
        $this->assertDatabaseHas('series',['id'=>$this->serie->id]);

        $removedorDeSerie = new RemovedorDeSeries();
        $nomeSerie = $removedorDeSerie->removerSerie($this->serie->id);

        $this->assertIsString($nomeSerie);
        $this->assertEquals('nome de teste', $this->serie->nome);
        $this->assertDatabaseMissing('series',['id'=>$this->serie->id]);
    }
}
