<?php 

namespace App;
use App\Models\CandidatosModel;
use App\Models\UsuariosModel;

class Auth{

    public function loginRecrutador($email, $senha){

        $usuariosModel = new UsuariosModel();
        $data = $usuariosModel->where('email', $email)->first();
        //print_r($data);
        
        if($data){

            $pass = $data->senha;

            $authenticatePassword = $pass === $senha;

            if($authenticatePassword){
                
                //Após comparar senha o sistema verifica o status do usuário
                if($data->statusUsuario == 'Ativo'){

                    $session = \Config\Services::session($config);
                    $session->set('idUser', $data->id);
                    $session->set('nomeUser', $data->nome);
                    $session->set('emailUser', $data->email);
                    $session->set('sobrenomeUser', $data->sobrenome);
                    $session->set('nivelUser', $data->nivelRepresentante);
                    $session->set('empresaUser', $data->empresaId);
                    $session->set('logado', true);
                   
                    return true;

                }else{

                    return false;
                }
                
                
                
            }else{

                return false;
            }

        }else{

            return false;
        }
    
    }

    public function loginCandidatoApp($email, $senha){

        $candidatosModel = new CandidatosModel;

        $data = $candidatosModel->where('email', $email)->first();

        if($data):

            $senhaUser = $data['senha'];

            $autenticacaoSenha = $senhaUser === $senha;
           
            if($autenticacaoSenha):
                
                return true;

            else:

                return false;
                
            endif;

        else:

            return false;

        endif;
    }
}