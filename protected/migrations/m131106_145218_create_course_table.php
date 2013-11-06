<?php

class m131106_145218_create_course_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_course', array(
			// keys
			'id' => 'pk',
			/* M:N relation in tbl_user_course */

			// attributes
			'name' => 'string NOT NULL',
			'description' => 'text',
			'type' => 'integer NOT NULL',	// 0 winter, 1 summer		
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_course');
	}
}
