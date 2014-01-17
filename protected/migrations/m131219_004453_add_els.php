<?php

class m131219_004453_add_els extends CDbMigration
{
	public function safeUp()
	{
           	$this->insert('tbl_el', array(
                'name'=>'Večerná liga',
                'description'=>'Zabav sa po večeroch s hokejkou v ruke',
                'type'=>'0'));
            
            $this->insert('tbl_el', array(
                'name'=>'Futbalová liga',
                'description'=>'Zabav sa po večeroch s loptou',
                'type'=>'0'));
           
            $this->insert('tbl_el', array(
                'name'=>'Volejbalová liga',
                'description'=>'Zabav sa po večeroch s loptou',
                'type'=>'0'));
           
            $this->insert('tbl_el', array(
                'name'=>'Vianočný turnaj',
                'description'=>'Jedinečná akcia zmerať si sily s inými.',
                'type'=>'0'));
            
            $this->insert('tbl_el', array(
                'name'=>'Mikulášsky turnaj',
                'description'=>'Jedinečná akcia zmerať si sily s inými.',
                'type'=>'0'));
            
	}

	public function safeDown()
	{
		$this->delete('tbl_el');
	}
}
