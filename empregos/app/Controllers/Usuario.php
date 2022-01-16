<?php

namespace App\Controllers;
use App\Auth;

class Usuario extends BaseController{

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

    public function login(){

        if($this->request->getMethod() === 'post'):

			$login = Auth::loginRecrutador($this->request->getPost('userEmail'), $this->request->getPost('userSenha'));

            if($login):
                //echo "Logou";
                return redirect()->to('/dashboard');

            else:

                echo "Não Logou";
                //return redirect('/login');
            endif;
            
			
		/*else: 

			$mensagem[] = "Preencha os campos";

			$this->view('home/login', $dados = ['mensagem' => $mensagem]);*/

		endif;
    }
}