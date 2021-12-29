<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\VagasCandidaturasModel;

class VagasCandidaturas extends ResourceController{

    use ResponseTrait;

    public function index(){

        echo "Teste";
    }

    public function create(){

        $vagasCandidaturasModel = new VagasCandidaturasModel();

        $data = $this->request->getJSON();

        if($vagasCandidaturasModel->insert($data)){
            
            $response = [
                'status'   => 201,
                'error'    => null,
                'messages' => [
                    'success' => 'Dados salvos'
                ]
            ];
            return $this->respondCreated($response);

        }else{

            return $this->fail($model->errors());
            
        }
    }
}