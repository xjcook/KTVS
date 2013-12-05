<?php

class m131204_084109_create_auth_assignment_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_auth_assignment', array(
			'itemname' => 'VARCHAR(64) NOT NULL',
			'userid' => 'VARCHAR(64) NOT NULL',
			'bizrule' => 'text',
			'data' => 'text',
		));
		
		$this->addPrimaryKey('id',  'tbl_auth_assignment', 'itemname, userid');
		$this->addForeignKey('auth_assignment_fk1', 'tbl_auth_assignment', 'itemname', 'tbl_auth_item', 'name', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_auth_assignment');
	}
}
