<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsign' => TRUE,
				'auto_increment' => TRUE
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 50,	
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			]
		]);
		$this->forge->addKey('user_id', TRUE);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
