<?php

class m131219_012640_add_pages extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_page', array('user_id'=>'1'));
            $this->insert('tbl_page', array('title'=>'nová stránka'));
            $this->insert('tbl_page', array('content'=>'popis stránky'));
            
            $this->insert('tbl_page', array('user_id'=>'2'));
            $this->insert('tbl_page', array('title'=>'stará stránka'));
            $this->insert('tbl_page', array('content'=>'popis stránky'));
	}

	public function safeDown()
	{
		$this->delete('tbl_page');
	}
}
