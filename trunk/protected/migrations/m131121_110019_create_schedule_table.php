<?php

class m131121_110019_create_schedule_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_schedule', array(
			// keys
			'id' => 'pk',
			'page_id' => 'integer NOT NULL',
			'tvobject_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addForeignKey('schedule_page_fk', 'tbl_schedule', 'page_id', 'tbl_page', 'id');
		$this->addForeignKey('schedule_tvobject_fk', 'tbl_schedule', 'tvobject_id', 'tbl_tvobject', 'id');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_schedule');
	}
}
