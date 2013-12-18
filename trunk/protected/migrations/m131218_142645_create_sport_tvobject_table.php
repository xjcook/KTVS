<?php

class m131218_142645_create_sport_tvobject_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_sport_tvobject', array(
			// keys
			'sport_id' => 'integer NOT NULL',
			'tvobject_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addPrimaryKey('id', 'tbl_sport_tvobject', 'sport_id, tvobject_id');
		$this->addForeignKey('sport_tvobject_fk1', 'tbl_sport_tvobject', 'sport_id', 'tbl_sport', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('sport_tvobject_fk2', 'tbl_sport_tvobject', 'tvobject_id', 'tbl_tvobject', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_sport_tvobject');
	}
}
