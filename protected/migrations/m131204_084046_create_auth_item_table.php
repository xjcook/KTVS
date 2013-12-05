<?php

class m131204_084046_create_auth_item_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_auth_item', array(
			'name' => 'VARCHAR(64) NOT NULL',
			'type' => 'integer NOT NULL',
			'description' => 'text',
			'bizrule' => 'text',
			'data' => 'text',
		));
		
		$this->addPrimaryKey('id', 'tbl_auth_item', 'name');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_auth_item');
	}
}
