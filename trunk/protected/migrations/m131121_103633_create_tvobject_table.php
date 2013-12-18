<?php

class m131121_103633_create_tvobject_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_tvobject', array(
			// keys
			'id' => 'pk',

			// attributes		
			'name' => 'string NOT NULL',
			'description' => 'text',
			'image' => 'string',
			'map' => 'text',
			
			// timestamp
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_tvobject');
	}
}
