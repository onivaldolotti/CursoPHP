<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
	public $timestamps = false;
	public $fillable = ['nome'];
	//protected $table = 'series'; nome da classe em minusculo e no plural o Eloquent ja reconhece e nao precisa desse comando.
}
