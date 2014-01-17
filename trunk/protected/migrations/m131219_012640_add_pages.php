<?php

class m131219_012640_add_pages extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_page', array(
                'user_id'=>'1',
                'title'=>'Basketbal',
                'content'=>'popis stránky'));
            
            $this->insert('tbl_page', array(
                'user_id'=>'2',
                'title'=>'Volejbal',
                'content'=>'popis stránky'));
            
            $this->insert('tbl_page', array(
            	'user_id'=>'2',
            	'title'=>'Futbal',
            	'content'=>'popis stránky'));
            
            $this->insert('tbl_page', array(
            	'user_id'=>'2',
            	'title'=>'Florbal',
            	'content'=>'popis stránky'));
	}

	public function safeDown()
	{
		$this->delete('tbl_page');
	}
}
