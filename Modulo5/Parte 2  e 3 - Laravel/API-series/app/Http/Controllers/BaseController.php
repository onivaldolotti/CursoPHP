<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController
{
	protected $classe;

	// public function index()
	// {
	// 	return $this->classe::all();
	// }

	// public function index(Request $request)
	// {
	// 	$offset = ($request->page -1)*$request->per_page;
	// 	return $this->classe::query()
	// 	->offset($offset)
	// 	->limit($request->per_page)
	// 	->get();
	// }

	public function index(Request $request)
	{
		$offset = ($request->page -1)*$request->per_page;
		return $this->classe::paginate($request->per_page);
	}

	public function store(Request $request)
	{
		return response()-> json($this->classe::create($request->all()), 201);
	}

	public function show(int $id)
	{
		$recurso = $this->classe::find($id);
		if(is_null($recurso)) {
			return response()->json('', 204);
		}
		return response()-> json($recurso);
	}

	public function update(int $id, Request $request)
	{
		$recurso = $this->classe::find($id);
		if(is_null($recurso)) {
			return response()->json(['erro'=>'Recurso nao Encontrado'], 404);
		}
		$recurso->fill($request->all());
		$recurso->save();

		return response()-> json($recurso);
	}

	public function destroy(int $id)
	{
		$qntRecursosRemovidos = $this->classe::destroy($id);
		if($qntRecursosRemovidos===0) {
			return response()->json(['erro'=>'Recurso nao Encontrado'], 404);
		}
		return response()->json([''], 204);
	}
}
