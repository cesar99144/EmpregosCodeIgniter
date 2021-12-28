<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class VagasCandidaturas extends ResourceController{

    use ResponseTrait;

    public function index(){

        echo "Teste";
    }
}