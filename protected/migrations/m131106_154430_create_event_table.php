<?php

class m131106_154430_create_event_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_event', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer NOT NULL',

			// attributes		
			'name' => 'string NOT NULL',
			'description' => 'text',
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addForeignKey('event_user_fk', 'tbl_event', 'user_id', 'tbl_user', 'id');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_event');
	}
}
