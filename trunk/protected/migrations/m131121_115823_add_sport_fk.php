<?php

class m131121_115823_add_sport_fk extends CDbMigration
{
	public function safeUp()
	{
		$this->addForeignKey('sport_fk1', 'tbl_sport', 'schedule_id', 'tbl_schedule', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropForeignKey('sport_fk1', 'tbl_sport');
	}
}
