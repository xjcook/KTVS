<?php

class m131106_154430_create_event_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_event', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer REFERENCES tbl_user(id)',

			// attributes		
			'name' => 'string NOT NULL',
			'description' => 'text',
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_event');
	}
}
