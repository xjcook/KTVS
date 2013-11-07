<?php

class m131106_153900_create_league_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_league', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer REFERENCES tbl_user(id)',

			// attributes		
			'name' => 'string NOT NULL',
			'description' => 'text',
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_league');
	}
}
