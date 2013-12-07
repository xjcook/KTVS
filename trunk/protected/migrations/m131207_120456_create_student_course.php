<?php

class m131207_120456_create_student_course extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_student_course', array(
			// keys
			'student_id' => 'integer NOT NULL',
			'course_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addPrimaryKey('id', 'tbl_student_course', 'student_id, course_id');
		$this->addForeignKey('student_course_fk1', 'tbl_student_course', 'student_id', 'tbl_student', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('student_course_fk2', 'tbl_student_course', 'course_id', 'tbl_course', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_student_course');
	}
}
