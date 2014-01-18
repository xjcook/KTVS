<?php

class m131106_155404_create_student_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_student', array(
			// keys
			'id' => 'pk',
			'sport_id' => 'integer',
			/* M:N relation in tbl_student_el */
			/* M:N relation in tbl_student_course */
			
			// attributes	
			'name' => 'string NOT NULL',
			'email' => 'string NOT NULL',
			'class' => 'integer NOT NULL',	// maybe 1:N (1-5)
			'phone' => 'string NOT NULL',	
			'skills' => 'string',	// maybe 1:N (beginner, intermediate, advanced) 
			'hashed_password' => 'string NOT NULL',
			
			// timestamp
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_student');
	}
}
