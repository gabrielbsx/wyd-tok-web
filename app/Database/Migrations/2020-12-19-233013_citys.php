<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Citys extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'armia' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'azran' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'erion' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'nipple' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'noatun' => [
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
		$this->forge->createTable('citys');
	}

	public function down()
	{
		$this->forge->dropTable('citys');
	}
}
