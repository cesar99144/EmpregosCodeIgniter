<?php

namespace App\Models;
use CodeIgniter\Model;

class EmpresasModel extends Model{

    protected $table = 'empresas';
    protected $primaryKey = 'idEmpresa';
    protected $allowedFields = ['razaoSocial','fantasia', 'cnpj', 'status'];
}