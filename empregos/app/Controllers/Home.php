<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/homePage');
	}

	//Cadastro recrutador
	public function cadastro(){

		return view('home/cadastro');
	}
}
