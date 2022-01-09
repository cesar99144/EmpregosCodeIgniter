<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\VagasCandidaturasModel;

class VagasCandidaturas extends ResourceController{

    use ResponseTrait;

    private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
    }

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
                    'success' => 'candidatadoSucesso'
                ]
            ];
            return $this->respondCreated($response);

        }else{

            return $this->fail($model->errors());
            
        }
    }

    public function show($id = null){

        $vagasCandidaturasModel = new VagasCandidaturasModel();

        // $data = $vagasCandidaturasModel->where('candidatoId', $id)->findAll();
        $data = $vagasCandidaturasModel->where('candidatoId', $id)->join('vagas', 'vagascandidaturas.    vagaId = vagas.idVaga')->findAll();

        if($data){
            return $this->respond($data);
        }
        
        return $this->failNotFound('Nenhum dado encontrado com'.$id);


    }
}