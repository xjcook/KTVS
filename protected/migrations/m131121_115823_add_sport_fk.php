<?php

class m131121_115823_add_sport_fk extends CDbMigration
{
	public function safeUp()
	{
		$this->addForeignKey('sport_schedule_fk', 'tbl_sport', 'schedule_id', 'tbl_schedule', 'id');
	}

	public function safeDown()
	{
		$this->dropForeignKey('sport_schedule_fk', 'tbl_sport');
	}
}
