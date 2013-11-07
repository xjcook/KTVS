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
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addForeignKey('sport_user_fk', 'tbl_user_sport', 'user_id', 'tbl_user', 'id');
		$this->addForeignKey('user_sport_fk', 'tbl_user_sport', 'sport_id', 'tbl_sport', 'id');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_sport');
	}
}
