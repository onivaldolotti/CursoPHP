<?php

namespace App;

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
}
