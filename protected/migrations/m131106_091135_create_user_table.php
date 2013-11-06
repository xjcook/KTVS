<?php

class m131106_091135_create_user_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_user', array(					
			// keys
			'id' => 'pk',
			
			// attributes
			'name' => 'string',	// admin can create user without name
			'email' => 'string NOT NULL',
			'password' => 'string NOT NULL',
			'is_admin' => 'boolean DEFAULT FALSE',
				
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user');
	}
	
}