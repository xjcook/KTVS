<?php

class m131219_011309_add_user_sports extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_user_sport', array('user_id'=>'1'));
            $this->insert('tbl_user_sport', array('sport_id'=>'1'));
            
            $this->insert('tbl_user_sport', array('user_id'=>'1'));
            $this->insert('tbl_user_sport', array('sport_id'=>'2'));
            
            $this->insert('tbl_user_sport', array('user_id'=>'1'));
            $this->insert('tbl_user_sport', array('sport_id'=>'3'));
            
            $this->insert('tbl_user_sport', array('user_id'=>'1'));
            $this->insert('tbl_user_sport', array('sport_id'=>'4'));
            
            $this->insert('tbl_user_sport', array('user_id'=>'2'));
            $this->insert('tbl_user_sport', array('sport_id'=>'1'));
            
            $this->insert('tbl_user_sport', array('user_id'=>'2'));
            $this->insert('tbl_user_sport', array('sport_id'=>'5'));
            
            $this->insert('tbl_user_sport', array('user_id'=>'2'));
            $this->insert('tbl_user_sport', array('sport_id'=>'6'));
            
                        
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_sport');
	}
}
