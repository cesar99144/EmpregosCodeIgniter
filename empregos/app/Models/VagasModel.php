<?php

namespace App\Models;
use CodeIgniter\Model;

class VagasModel extends Model{

	protected $table = 'vagas';
    protected $primaryKey = 'idVaga';
    protected $allowedFields = [
        'titulo',
        'descricao',
        'RegimeContratacao',
        'cargaHoraria',
        'tipoPresenca',
        'faixaSalarial',
        'categoriaId',
        'empresaId',
        'statusVisibilidade'
    ];
    protected $returnType = 'object';

    public function getVagasModoAdmin($idempresa){

        
    	
    }
}