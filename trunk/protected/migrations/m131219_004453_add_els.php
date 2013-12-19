<?php

class m131219_004453_add_els extends CDbMigration
{
	public function safeUp()
	{
           $this->insert('tbl_el', array('user_id'=>'1'));
            $this->insert('tbl_el', array('name'=>'Večerná liga - florbal'));
            $this->insert('tbl_el', array('description'=>'Zabav sa po večeroch s hokejkou v ruke'));
            $this->insert('tbl_el', array('type'=>'1'));
            
            $this->insert('tbl_el', array('user_id'=>'1'));
            $this->insert('tbl_el', array('name'=>'Večerná liga - volejbal'));
            $this->insert('tbl_el', array('description'=>'Zabav sa po večeroch s loptou'));
            $this->insert('tbl_el', array('type'=>'1'));
           
            $this->insert('tbl_el', array('user_id'=>'2'));
            $this->insert('tbl_el', array('name'=>'Večerná liga - basketbal'));
            $this->insert('tbl_el', array('description'=>'Zabav sa po večeroch s loptou'));
            $this->insert('tbl_el', array('type'=>'1'));
           
            $this->insert('tbl_el', array('user_id'=>'1'));
            $this->insert('tbl_el', array('name'=>'Vianočný turnaj - florbal'));
            $this->insert('tbl_el', array('description'=>'Jedinečná akcia zmerať si sily s inými.'));
            $this->insert('tbl_el', array('type'=>'0'));
            
            $this->insert('tbl_el', array('user_id'=>'1'));
            $this->insert('tbl_el', array('name'=>'Mikulášsky turnaj - florbal'));
            $this->insert('tbl_el', array('description'=>'Jedinečná akcia zmerať si sily s inými.'));
            $this->insert('tbl_el', array('type'=>'0'));
            
	}

	public function safeDown()
	{
		$this->delete('tbl_el');
	}
}
