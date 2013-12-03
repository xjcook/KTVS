<?php

class m131106_155513_create_student_sport_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_student_sport', array(
			// keys
			'student_id' => 'integer NOT NULL',
			'sport_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addPrimaryKey('id', 'tbl_student_sport', 'student_id, sport_id');
		$this->addForeignKey('sport_student_fk', 'tbl_student_sport', 'student_id', 'tbl_student', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('student_sport_fk', 'tbl_student_sport', 'sport_id', 'tbl_sport', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_student_sport');
	}
}
