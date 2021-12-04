<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CandidatosModel;

class Candidatos extends ResourceController{

    use ResponseTrait;

    public function index(){

        $modelCandidatos = new CandidatosModel;
        $data = $modelCandidatos->findAll();

        return $this->respond($data);
    }
}