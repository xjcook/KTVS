<?php

class m131219_011933_add_news extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_news', array('user_id'=>'1'));
            $this->insert('tbl_news', array('sport_id'=>'1'));
            $this->insert('tbl_news', array('title'=>'zrýchlený aerobik '));
            $this->insert('tbl_news', array('content'=>'príď k nám skackať'));
            
            $this->insert('tbl_news', array('user_id'=>'2'));
            $this->insert('tbl_news', array('sport_id'=>'2'));
            $this->insert('tbl_news', array('title'=>'Basketbalové družstvo '));
            $this->insert('tbl_news', array('content'=>'chceš vytvoriť družstvo? príď'));
           
           
	}

	public function safeDown()
	{
		$this->dropTable('tbl_news');
	}
}
