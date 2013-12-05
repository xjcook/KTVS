<?php

class m131106_152406_create_user_course_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_user_course', array(
			// keys
			'user_id' => 'integer NOT NULL',
			'course_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addPrimaryKey('id', 'tbl_user_course', 'user_id, course_id');
		$this->addForeignKey('user_course_fk1', 'tbl_user_course', 'user_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('user_course_fk2', 'tbl_user_course', 'course_id', 'tbl_course', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_course');
	}
}
