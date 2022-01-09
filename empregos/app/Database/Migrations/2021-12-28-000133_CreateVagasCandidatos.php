<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVagasCandidatos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idCandidatura' => [
                'type' => 'INT',
                'unique' => true,
                'auto_increment' => true,
            ],

            'vagaId' => [
                'type' => 'INT',
            ],

            'candidatoId' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addPrimaryKey('idCandidatura', TRUE);
        $this->forge->addForeignKey('vagaId', 'vagas', 'idVaga');
        $this->forge->addForeignKey('candidatoId', 'candidatos', 'idCandidato');
        $this->forge->createTable('vagasCandidaturas', TRUE);
    }

    public function down()
    {
        //
    }
}
