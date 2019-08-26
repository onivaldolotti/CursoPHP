<?php
namespace App;

use App\Serie;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
	public $timestamps=false;
	protected $fillable=['temporada','nome','assistido'];

	public function serie()
	{
		return $this->belongsTo(Serie::class);
	}
}
