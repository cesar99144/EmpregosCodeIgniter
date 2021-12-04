<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empresas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idEmpresa' => [
                'type' => 'INT',
                'unique' => true,
                'auto_increment' => true,
            ],

            'razaoSocial' => [
                'type' => 'VARCHAR',
                'constraint' => 220
            ],

            'fantasia' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],

            'cnpj' => [
                'type' => 'VARCHAR',
                'constraint' => 40
            ],

            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],

            

        ]);

        $this->forge->addPrimaryKey('idEmpresa', TRUE);
        $this->forge->createTable('empresas', TRUE);
    }

    public function down()
    {
        //
    }
}
