<?php

class m131106_152406_create_user_course_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_user_course', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer NOT NULL REFERENCES tbl_user(id)',
			'course_id' => 'integer NOT NULL REFERENCES tbl_course(id)',

			// attributes		
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_course');
	}
}
