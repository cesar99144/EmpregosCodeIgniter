<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CategoriasModel;

class Categorias extends ResourceController{

    use ResponseTrait;

    public function index(){

        $modelCategorias = new CategoriasModel;
        $data = $modelCategorias->findAll();

        return $this->respond($data);
    }
}