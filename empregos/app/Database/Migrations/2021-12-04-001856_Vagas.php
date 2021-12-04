<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vagas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idVaga' => [
                'type' => 'INT',
                'unique' => true,
                'auto_increment' => true,
            ],

            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 80
            ],

            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],

            'RegimeContratacao' => [
                'type' => 'VARCHAR',
                'constraint' => 70
            ],

            'cargaHoraria' => [
                'type' => 'VARCHAR',
                'constraint' => 80
            ],

            'tipoPresenca' => [
                'type' => 'VARCHAR',
                'constraint' => 60
            ],

            'faixaSalarial' => [
                'type' => 'VARCHAR',
                'constraint' => 90
            ],

            'faixaSalarial' => [
                'type' => 'VARCHAR',
                'constraint' => 90
            ],

            'categoriaId' => [
                'type' => 'INT',
            ],

            'empresaId' => [
                'type' => 'INT',
            ],

            'statusVisibilidade' => [
                'type' => 'VARCHAR',
                'constraint' => 40
            ],

        ]);

        $this->forge->addPrimaryKey('idVaga', TRUE);
        //$this->forge->addForeignKey('categoriaId', 'categorias', 'categorias');
        $this->forge->addForeignKey('empresaId', 'empresas', 'idEmpresa');
        $this->forge->createTable('vagas', TRUE);
    }

    public function down()
    {
        //
    }
}
