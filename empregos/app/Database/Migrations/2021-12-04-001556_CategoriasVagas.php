<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriasVagas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idCategoria' => [
                'type' => 'INT',
                'unique' => true,
                'auto_increment' => true,
            ],

            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 220
            ],

            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],


        ]);

        $this->forge->addPrimaryKey('idCategoria', TRUE);
        $this->forge->createTable('categorias', TRUE);
    }

    public function down()
    {
        //
    }
}
