<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use phpDocumentor\Reflection\Types\This;

class Usuarios extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),

			'nome' => array(
				'type' => 'VARCHAR',
				'constraint' => 60
			),

			'sobrenome' => array(
				'type' => 'VARCHAR',
				'constraint' => 60
			),

			'cnpj' => array(
				'type' => 'VARCHAR',
				'constraint' => 30
			),

			'nivelRepresentante' => array(
				'type' => 'VARCHAR',
				'constraint' => 40
			),

			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 254
			),

			'senha' => array(
				'type' => 'VARCHAR',
				'constraint' => 40
			),
		]);

		$this->forge->addPrimaryKey('id', TRUE);
		$this->forge->createTable('usuarios');
	}

	public function down()
	{
		//
	}
}
