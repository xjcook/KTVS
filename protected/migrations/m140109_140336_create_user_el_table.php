<?php

class m140109_140336_create_user_el_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_user_el', array(
			// keys
			'user_id' => 'integer NOT NULL',
			'el_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addPrimaryKey('id', 'tbl_user_el', 'user_id, el_id');
		$this->addForeignKey('user_el_fk1', 'tbl_user_el', 'user_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('user_el_fk2', 'tbl_user_el', 'el_id', 'tbl_el', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_el');
	}
}
