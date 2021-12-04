<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\EmpresasModel;

class Empresas extends ResourceController{

    use ResponseTrait;

    public function index(){

        $modelEmpresas = new EmpresasModel;
        $data = $modelEmpresas->findAll();

        return $this->respond($data);
    }
}