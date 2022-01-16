<?php 

namespace App\Models;
use CodeIgniter\Model;

class CategoriasModel extends Model{

    protected $table = 'categorias';
    protected $primaryKey = 'idCategoria';
    protected $allowedFields = ['titulo','status'];
    protected $returnType = 'object';
}