<?php

namespace App\Models;
use CodeIgniter\Model;

class VagasCandidaturasModel extends Model{

    protected $table = 'vagascandidaturas';
    protected $primaryKey = 'idCandidatura';
    protected $allowedFields = ['vagaId', 'candidatoId', 'dataCandidatura'];
} 