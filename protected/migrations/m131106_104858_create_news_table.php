<?php

class m131106_104858_create_news_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_news', array(
			// keys
			'id' => 'pk',
			'user_id' => 'integer NOT NULL',
			'sport_id' => 'integer NOT NULL',
			
			// attributes
			'title' => 'string NOT NULL',
			'content' => 'text NOT NULL',
			'valid_to' => 'datetime',
			
			// timestamp
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_news');
	}
}
