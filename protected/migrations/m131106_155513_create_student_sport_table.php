<?php

class m131106_155513_create_student_sport_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_student_sport', array(
			// keys
			'id' => 'pk',
			'student_id' => 'integer NOT NULL REFERENCES tbl_student(id)',
			'sport_id' => 'integer NOT NULL REFERENCES tbl_sport(id)',

			// attributes		
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_student_sport');
	}
}
