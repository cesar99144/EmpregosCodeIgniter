<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model{

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nome', 
        'sobrenome', 
        'nivelRepresentante', 
        'email',
        'senha',
        'empresaId',
        'statusUsuario'
    ];
    protected $returnType = 'object';

    public function loginUsuario($email, $senha){

        
    }
}