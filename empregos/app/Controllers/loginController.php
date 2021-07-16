<?php

namespace App\Controllers;

class LoginController extends BaseController{

    public function autenticar(){

        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        echo $email." senha: ".$senha;
    }
}