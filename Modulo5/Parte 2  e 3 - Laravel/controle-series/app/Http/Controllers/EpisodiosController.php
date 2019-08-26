<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporada;
use App\Episodio;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request)
	{
		return view('episodios.index', [
			'episodios'=>$temporada->episodios,
			'temporadaId'=>$temporada->id,
            'mensagem' => $request->session()->get('mensagem')
		]);
	}

	public function assistir(Temporada $temporada, Request $request)
	   {
		   $idsEpisodiosAssistidos = array_keys($request->episodio);
		   $temporada->episodios->each(function (Episodio $episodio)
		   use ($idsEpisodiosAssistidos)
		   {
			   $episodio->assistido = in_array(
				   $episodio->id,
				   $idsEpisodiosAssistidos
			   );
		   });

		   $temporada->push();
           $request->session()->flash('mensagem', 'Episodios marcados com sucesso');
           return redirect()->back();
	   }
}
