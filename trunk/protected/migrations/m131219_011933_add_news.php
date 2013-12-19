<?php

class m131219_011933_add_news extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_news', array(
                'user_id'=>'1',
                'sport_id'=>'1',
                'title'=>'zrýchlený aerobik ',
                'content'=>'príď k nám skackať'));
            
            $this->insert('tbl_news', array(
                'user_id'=>'2',
                'sport_id'=>'2',
                'title'=>'Basketbalové družstvo ',
                'content'=>'chceš vytvoriť družstvo? príď'));
           
           
	}

	public function safeDown()
	{
		$this->delete('tbl_news');
	}
}
