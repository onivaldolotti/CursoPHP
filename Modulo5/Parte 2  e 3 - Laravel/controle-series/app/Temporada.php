<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Episodio;
use App\Serie;

class Temporada extends Model
{
    public $timestamps = false;
	public $fillable = ['numero'];

    public function episodios()
	{
		return $this->hasMany(Episodio::class);
	}

	public function serie()
	{
		return $this->belongsTo(Serie::class);
	}

    public function getEpisodiosAssistidos():Collection
    {
        return $this->episodios->filter(function(Episodio $episodio) {
            return $episodio->assistido;
        });
    }
}
