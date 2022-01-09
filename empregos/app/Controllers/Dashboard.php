<?php

namespace App\Controllers;

class Dashboard extends BaseController{

    public function home(){

        return view('moduloRecrutador/vagas/listagem');
    }
}