<?php
namespace App\Http\Controllers;

class SeriesController
{
	public function index()
	{
		return Serie::all();
	}
}