<?php

class m131106_094751_create_page_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_page', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer',
			
			// attributes
			'title' => 'string NOT NULL',
			'content' => 'text NOT NULL',
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_page');
	}
}
