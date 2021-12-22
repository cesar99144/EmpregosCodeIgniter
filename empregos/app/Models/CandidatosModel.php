<?php

namespace App\Models;
use CodeIgniter\Model;

class CandidatosModel extends Model{

    protected $table = 'candidatos';
    protected $primaryKey = 'idCandidato';
    protected $allowedFields = [
        'nome',
        'sobrenome',
        'celular',
        'email',
        'senha',
        'estado',
        'cidade',
        'formacao',
        'ultimaexperiencia',
        'areaPretendida',
        'faixaSalarialPretendida'
    ];

}