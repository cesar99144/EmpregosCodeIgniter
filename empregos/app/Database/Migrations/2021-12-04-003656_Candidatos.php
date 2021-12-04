<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Candidatos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idCandidato' => [
                'type' => 'INT',
                'unique' => true,
                'auto_increment' => true,
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],

            'sobrenome' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],

            'celular' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 254
            ],

            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => 40
            ],

            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
                'null' => TRUE
            ],

            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE
            ],

            'formacao' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
                'null' => TRUE
            ],

            'ultimaexperiencia' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
                'null' => TRUE
            ],

            'areaPretendida' => [
                'type' => 'VARCHAR',
                'constraint' => 90,
                'null' => TRUE
            ],

            'faixaSalarialPretendida' => [
                'type' => 'VARCHAR',
                'constraint' => 90,
                'null' => TRUE
            ],

           

        ]);

        $this->forge->addPrimaryKey('idCandidato', TRUE);
        $this->forge->createTable('candidatos', TRUE);
    }

    public function down()
    {
        //
    }
}
