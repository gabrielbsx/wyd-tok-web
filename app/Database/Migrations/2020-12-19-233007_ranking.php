<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ranking extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'login' => [
				'type' => 'VARCHAR',
				'constraint' => '16'
			],
			'token' => [
				'type' => 'VARCHAR',
				'constraint' => '6'
			],
			'nick' => [
				'type' => 'VARCHAR',
				'constraint' => '16'
			],
			'reino' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'guild' => [
				'type' => 'INT',
				'constraint' => '31'
			],
			'evolution' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'pk' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'nivel' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'cnivel' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'guildlevel' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'deleted_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('ranking');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('ranking');
	}
}
