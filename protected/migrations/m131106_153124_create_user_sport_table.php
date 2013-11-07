<?php

class m131106_153124_create_user_sport_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_user_sport', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer NOT NULL REFERENCES tbl_user(id)',
			'sport_id' => 'integer NOT NULL REFERENCES tbl_sport(id)',

			// attributes		
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_sport');
	}
}
