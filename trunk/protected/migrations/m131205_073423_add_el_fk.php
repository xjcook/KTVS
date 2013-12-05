<?php

class m131205_073423_add_el_fk extends CDbMigration
{
	public function safeUp()
	{
		$this->addForeignKey('el_fk1', 'tbl_el', 'user_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropForeignKey('el_fk1', 'tbl_el');
	}
}
