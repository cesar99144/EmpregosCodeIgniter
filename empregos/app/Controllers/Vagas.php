<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\VagasModel;

class Vagas extends ResourceController{

	use ResponseTrait;

	public function index(){

		$limit = 10;
		$offset = 0;
		$modelVagas = new VagasModel;
		$data = $modelVagas->findAll($limit, $offset);
		//$data = $modelVagas->getVagas();
		
		return $this->respond($data);
	}

	public function vagasRecentes(){

		$limit = 5;
		$offset = 0;
		$modelVagas = new VagasModel;
		$data = $modelVagas->findAll($limit, $offset);

		return $this->respond($data);
	}

	public function show($id = null){

		$vagasModel = new VagasModel;

		$data = $vagasModel->where('idVaga', $id)->first();

		if($data){
            return $this->respond($data);
        }
        
        return $this->failNotFound('Nenhum dado encontrado com'.$id);   
	}
}