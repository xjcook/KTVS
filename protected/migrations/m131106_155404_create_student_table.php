<?php

class m131106_155404_create_student_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_student', array(
			// keys
			'id' => 'pk',
			/* M:N relation in tbl_student_sport */

			// attributes	
			'name' => 'string NOT NULL',
			'email' => 'string NOT NULL',
			'class' => 'integer NOT NULL',	// maybe 1:N (1-5)
			'phone' => 'string NOT NULL',	
			'skills' => 'string NOT NULL',	// maybe 1:N (beginner, intermediate, advanced) 
			
			// timestamp
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_student');
	}
}
