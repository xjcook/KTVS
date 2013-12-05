<?php

class m131121_115817_add_news_fk extends CDbMigration
{
	public function safeUp()
	{
		$this->addForeignKey('news_fk1', 'tbl_news', 'user_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('news_fk2', 'tbl_news', 'sport_id', 'tbl_sport', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropForeignKey('news_fk1', 'tbl_news');
		$this->dropForeignKey('news_fk2', 'tbl_news');
	}
}
