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

    public function getVagas(){

    	$this->join('vagas', 'vagas.empresaId = empresas.idEmpresa');
		$this->select('vagas');
		$this->select('empresas');

		$result = $this->findAll();

		return $result;
    }
}