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

       $loginUsuario = Auth::loginCandidatoApp('cesar@gmail.com', '1234');

       if($loginUsuario):

            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Logado'
                ]
            ];
            
            return $this->respondCreated($response);

       else:

        $response = [
            'status'   => 401,
            'messages' => [
                'success' => 'Falha'
            ]
        ];
        
        return $this->respondCreated($response);

       endif;

    }
}