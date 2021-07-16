<?php

namespace App\Controllers;

class UsuarioController extends BaseController{

    public function cadastrarUsuario(){

        if($this->request->getMethod() === 'post'){

            $usuariosModel = new \App\Models\UsuariosModel();
            $usuariosModel->set('nome', $this->request->getPost('nome'));
            $usuariosModel->set('sobrenome', $this->request->getPost('sobrenome'));
            $usuariosModel->set('cnpj', $this->request->getPost('cnpj'));
            $usuariosModel->set('nivelRepresentante', $this->request->getPost('nivelRepresentante'));
            $usuariosModel->set('email', $this->request->getPost('email'));
            $usuariosModel->set('senha', $this->request->getPost('senha'));

            $nivel = $this->request->getPost('nivelRepresentante');

            if($usuariosModel->insert()){

                //Caso consiga salvar os dados
                
            }else{


            }
        }
    }
}