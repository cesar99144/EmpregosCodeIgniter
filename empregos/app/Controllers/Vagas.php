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

	public function create(){

		$vagasModel = new VagasModel;

		$vagasModel->set('titulo', $this->request->getPost('tituloVaga'));
		$vagasModel->set('descricao', $this->request->getPost('descricaoVaga'));
		$vagasModel->set('RegimeContratacao', $this->request->getPost('RegimeContratacao'));
		$vagasModel->set('cargaHoraria', $this->request->getPost('cargaHoraria'));
		$vagasModel->set('tipoPresenca', $this->request->getPost('tipoPresenca'));
		$vagasModel->set('faixaSalarial', $this->request->getPost('faixaSalarial'));
		$vagasModel->set('categoriaId', $this->request->getPost('categoriaId'));
		$vagasModel->set('empresaId', session()->empresaUser);
		$vagasModel->set('statusVisibilidade', $this->request->getPost('status'));

		if($vagasModel->insert()){

			$vagasModel = new VagasModel;
        	$data['listVagas'] = $vagasModel->where('empresaId', session()->idUser)->join('categorias', 'vagas.categoriaId = categorias.idCategoria')->findAll();
        
       		 return view('moduloRecrutador/vagas/listagem', $data);

		}else{

			print_r($vagasModel->error());
		}
	}
}