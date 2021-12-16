<?php 

namespace App;
use App\Models\CandidatosModel;

class Auth{

    public function loginRecrutador(){


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