<?php

class m131121_115817_add_news_fk extends CDbMigration
{
	public function safeUp()
	{
		$this->addForeignKey('news_user_fk', 'tbl_news', 'user_id', 'tbl_user', 'id');
		$this->addForeignKey('news_sport_fk', 'tbl_news', 'sport_id', 'tbl_sport', 'id');
	}

	public function safeDown()
	{
		$this->dropForeignKey('news_user_fk', 'tbl_news');
		$this->dropForeignKey('news_sport_fk', 'tbl_news');
	}
}
