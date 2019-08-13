<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Temporada;

class Episodio extends Model
{
    public $timestamps = false;
	public $fillable = ['numero'];
    
    public function temporada()
	{
		return $this->belongsTo(Temporada::class);
	}
}
