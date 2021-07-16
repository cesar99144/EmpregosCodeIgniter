<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		return view('home/homePage');
	}

	//Cadastro recrutador
	public function cadastro(){

		return view('home/cadastro');
	}

	public function login(){

		return view('home/login');
	}
}
