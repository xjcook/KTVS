<?php

class m131106_120740_create_sport_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_sport', array(
			// keys
			'id' => 'pk',
			/* M:N relation in tbl_user_sport */

			// attributes	
			'name' => 'string NOT NULL',	
			'description' => 'text',
			'capacity' => 'integer',
			
			// timestamp
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_sport');
	}
}
