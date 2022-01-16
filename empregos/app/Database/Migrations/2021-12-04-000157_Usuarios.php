<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unique' => true,
                'auto_increment' => true,
            ],

			'nome' => [
				'type' => 'VARCHAR',
				'constraint' => 60
			],

			'sobrenome' => [
				'type' => 'VARCHAR',
				'constraint' => 60
			],

			'nivelRepresentante' => [
				'type' => 'VARCHAR',
				'constraint' => 40
			],

			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 254
			],

			'senha' => [
				'type' => 'VARCHAR',
				'constraint' => 200
			],

            'empresaId' => [
                'type' => 'INT',
            ],

            'statusUsuario' => [
                'type' => 'VARCHAR',
				'constraint' => 40
            ],
		]);

		$this->forge->addPrimaryKey('id', TRUE);
        $this->forge->addForeignKey('empresaId', 'empresas', 'idEmpresa');
		$this->forge->createTable('usuarios', TRUE);
    }

    public function down()
    {
        //
    }
}
