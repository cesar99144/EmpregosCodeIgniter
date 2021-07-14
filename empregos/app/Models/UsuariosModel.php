<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model{

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'sobrenome', 'cnpj', 'nivelRepresentante', 'email', 'senha'];
}