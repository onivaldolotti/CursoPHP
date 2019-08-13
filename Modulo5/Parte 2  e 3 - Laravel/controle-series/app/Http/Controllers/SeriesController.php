<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
	public function index(Request $request)
	{
		//$series = Serie::all();//recebe uma collection do Eloquent
		$series = Serie::query()->orderBy('nome')->get();
		$mensagem = $request->session()->get('mensagem');

		return view('series.index', compact('series', 'mensagem'));
	}

	public function create()
	{
		return view ('series.create');
	}

	public function store(SeriesFormRequest $request)
	{
		//$nome = $request->nome;
		//$serie = Serie::create(['nome'=>$nome]);

		$serie = Serie::create(['nome' => $request->nome]);

		for ($i=1; $i <= $request->qtd_temporadas ; $i++) {
			$temporada= $serie->temporadas()->create(['numero'=>$i]);

			for ($j=1; $j <$request->ep_por_temporada; $j++) {
				$temporada->episodios()->create(['numero'=>$j]);
			}
		}
		$request->session()->flash('mensagem', "Serie {$serie->nome} com {$temporada->numero} temporadas criada com sucesso ");

		return redirect()->route('listar_series');
		//echo "Serie com id {$serie->id} criada: {$serie->nome}";
		// $nome = $request->nome;
		// $serie = new Serie();
		// $serie->nome = $nome;
		// $serie->save();
	}

	public function destroy(Request $request)
	{
		Serie::destroy($request->id);
		$request->session()->flash('mensagem', "Serie removida com sucesso");
		return redirect()->route('listar_series');
	}
}
