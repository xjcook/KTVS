<?php

class m131204_084057_create_auth_item_child_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_auth_item_child', array(
			'parent' => 'VARCHAR(64) NOT NULL',
			'child' => 'VARCHAR(64) NOT NULL',
		));
		
		$this->addPrimaryKey('tbl_auth_item_child_pk',  'tbl_auth_item_child', 'parent, child');
		$this->addForeignKey('tbl_auth_item_child_fk1', 'tbl_auth_item_child', 'parent', 'tbl_auth_item', 'name', 'CASCADE', 'CASCADE');
		$this->addForeignKey('tbl_auth_item_child_fk2', 'tbl_auth_item_child', 'child', 'tbl_auth_item', 'name', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_auth_item_child');
	}
}
