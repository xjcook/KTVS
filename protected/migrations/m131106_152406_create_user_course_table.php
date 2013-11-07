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
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addForeignKey('course_user_fk', 'tbl_user_course', 'user_id', 'tbl_user', 'id');
		$this->addForeignKey('user_course_fk', 'tbl_user_course', 'course_id', 'tbl_course', 'id');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_course');
	}
}
