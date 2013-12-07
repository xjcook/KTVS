<?php

class m131207_120509_create_student_el extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_student_el', array(
			// keys
			'student_id' => 'integer NOT NULL',
			'el_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addPrimaryKey('id', 'tbl_student_el', 'student_id, el_id');
		$this->addForeignKey('student_el_fk1', 'tbl_student_el', 'student_id', 'tbl_student', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('student_el_fk2', 'tbl_student_el', 'el_id', 'tbl_el', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_student_el');
	}
}
