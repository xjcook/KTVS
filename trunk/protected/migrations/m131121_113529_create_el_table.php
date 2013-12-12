<?php

class m131121_113529_create_el_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_el', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer NOT NULL',
			/* M:N relation in tbl_student_el */
			
			// attributes		
			'name' => 'string NOT NULL',
			'description' => 'text',
			'type' => 'integer NOT NULL', 	// 0 event, 1 league 
			
			// timestamp
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_el');
	}
}