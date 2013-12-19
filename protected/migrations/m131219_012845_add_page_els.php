<?php

class m131219_012845_add_page_els extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_page_el', array('page_id'=>'1'));
            $this->insert('tbl_page_el', array('el_id'=>'1'));
            
            $this->insert('tbl_page_el', array('page_id'=>'1'));
            $this->insert('tbl_page_el', array('el_id'=>'2'));
            
            $this->insert('tbl_page_el', array('page_id'=>'1'));
            $this->insert('tbl_page_el', array('el_id'=>'3'));
            
            $this->insert('tbl_page_el', array('page_id'=>'2'));
            $this->insert('tbl_page_el', array('el_id'=>'1'));
            
            $this->insert('tbl_page_el', array('page_id'=>'2'));
            $this->insert('tbl_page_el', array('el_id'=>'4'));
            
	}

	public function safeDown()
	{
		$this->delete('tbl_page_el');
	}
}
