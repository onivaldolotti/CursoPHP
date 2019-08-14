<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Http\Requests\SeriesFormRequest;
use App\Services\CriadorDeSeries;

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

	public function store(SeriesFormRequest $request, CriadorDeSeries $criadorDeSerie)
	{
		$serie = $criadorDeSerie->criarSerie($request->nome, $request->qtd_temporadas, $request->ep_por_temporada);

		$request->session()->flash('mensagem', "Série {$serie->id} com suas temporadas e episódios criados com sucesso {$serie->nome}");

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
