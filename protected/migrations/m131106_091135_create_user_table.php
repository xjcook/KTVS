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
			'hashed_password' => 'string NOT NULL',
			'description' => 'text',
			'consultation' => 'text',
			'is_admin' => 'boolean DEFAULT FALSE',
				
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->createIndex('user_email_unique_idx', 'tbl_user', 'email', true);
		
		$this->insert('tbl_user', array(
			'name' => 'Admin',
			'email' => 'admin@admin.com',
			'hashed_password' => '$2a$13$0nQLc820ApZ6iXU7BqjNoOlTcODFXIY6QGI8zjWQWQXAxAfb79D4m',
			'is_admin' => '1',
		));
		
		$this->insert('tbl_user', array(
			'name' => 'User',
			'email' => 'user@user.com',
			'hashed_password' => '$2a$13$TG4rxg8cg9tp2JpT/KgYU.W.fmATFd0FtCU2aywUuqoDxPgADBzsK',
			'is_admin' => '0',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user');
	}
	
}
