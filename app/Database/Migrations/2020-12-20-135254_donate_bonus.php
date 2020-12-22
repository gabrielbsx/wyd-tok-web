<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DonateBonus extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'id_donate' => [
				'type' => 'INT',
				'unsigned' => true
			],
			'itemcode' => [
				'type' => 'VARCHAR',
				'constraint' => '50'
			],
			'itemname' => [
				'type' => 'VARCHAR',
				'constraint' => '100'
			],
			'created_at' => [
				'type' => 'DATETIME'
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
		$this->forge->createTable('donate_bonus');
	}

	public function down()
	{
		$this->forge->dropTable('donate_bonus');
	}
}
