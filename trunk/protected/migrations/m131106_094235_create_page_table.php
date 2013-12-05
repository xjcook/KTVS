<?php

class m131106_094235_create_page_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_page', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer NOT NULL',
			
			// attributes
			'title' => 'string NOT NULL',
			'content' => 'text NOT NULL',
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addForeignKey('page_fk1', 'tbl_page', 'user_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_page');
	}
}
