<?php

namespace App\Services;

use App\Serie;
use Illuminate\Support\Facades\DB;

class CriadorDeSeries
{
	public function criarSerie(string $nome, int $qtd_temporadas, int $ep_por_temporada): Serie
	{
		//$nome = $request->nome;
		//$serie = Serie::create(['nome'=>$nome]);
		DB::beginTransaction();
		$serie = Serie::create(['nome' => $nome]);

		for ($i=1; $i <= $qtd_temporadas ; $i++) {
			$temporada= $serie->temporadas()->create(['numero'=>$i]);

			for ($j=1; $j <$ep_por_temporada; $j++) {
				$temporada->episodios()->create(['numero'=>$j]);
			}
		}
		DB::commit();
		return $serie;
	}
}
