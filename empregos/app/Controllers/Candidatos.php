<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CandidatosModel;
use App\Auth;

class Candidatos extends ResourceController{

    use ResponseTrait;

    public function index(){

        $modelCandidatos = new CandidatosModel;
        $data = $modelCandidatos->findAll();

        return $this->respond($data);
    }

    public function show($id = null){

        $modelCandidatos = new CandidatosModel();
        //$data = $modelCandidatos->getWhere(['idCandidato' => $id])->getResult();
        $data = $modelCandidatos->where('idCandidato', $id)->first();

        if($data){
            return $this->respond($data);
        }
        
        return $this->failNotFound('Nenhum dado encontrado com'.$id);        
    
    }

    public function create(){

        $modelCandidatos = new CandidatosModel;
        $data = $this->request->getJSON();

        $senhaHash = password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT);
 
        // $modelCandidatos->set('nome', $this->request->getPost('nome'));
        // $modelCandidatos->set('sobrenome', $this->request->getPost('sobrenome'));
        // $modelCandidatos->set('email', $this->request->getPost('email'));
        // $modelCandidatos->set('senha', $senhaHash);

        if($modelCandidatos->insert($data)){
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

    public function login(){

       $modelCandidatos = new CandidatosModel;

       $email = $this->request->getPost('email');
       $senha = $this->request->getPost('senha');

       $data = $this->request->getJSON();

       $loginUsuario = Auth::loginCandidatoApp($data->email, $data->senha);
       //$loginUsuario = Auth::loginCandidatoApp("cesar@gmail.com", "1234");
       
       //$retornoUser = $modelCandidatos->getWhere(['email' => $data->email])->getResult();
        
       $retornoUser = $modelCandidatos->where('email', $data->email)->first();
       
       if($loginUsuario):

            $response = [
                'status'   => 200,
                'idUser' => $retornoUser['idCandidato'],
                'messages' => [
                    'success' => 'Logado'
                ]
            ];
            
            return $this->respondCreated($response);

       else:

        $response = [
            'status'   => 401,
            'messages' => [
                'erro' => $data->email
            ]
        ];
        
        return $this->respondCreated($response);


       endif;

    }

   
    
}