<?php

class m131121_103633_create_tvobject_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_tvobject', array(
			// keys
			'id' => 'pk',
			'sport_id' => 'integer NOT NULL',

			// attributes		
			'name' => 'string NOT NULL',
			'description' => 'text',
			'image' => 'string',
			'map' => 'text',
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addForeignKey('tvobject_sport_fk', 'tbl_tvobject', 'sport_id', 'tbl_sport', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_tvobject');
	}
}
