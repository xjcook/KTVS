<?php

class m131219_002638_add_students extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_student', array(
            	'name'=>'Jožko Mrkvička',
            	'email'=>'jozko@jozko.sk',
            	'class'=>'2',
            	'phone'=>'0915 000 000',
            	'skills'=>'žiadne nemám',
            ));
            
            $this->insert('tbl_student', array(
            	'name'=>'Zuzanka Hraškovie',
            	'email'=>'zuzkaa@zuzka.sk',
            	'class'=>'1',
            	'phone'=>'0915 111 000',
            	'skills'=>'profík',
            ));
           
            $this->insert('tbl_student', array(
            	'name'=>'Usain Bolt',
            	'email'=>'usain@usain.sk',
            	'class'=>'5',
            	'phone'=>'0915 111 111',
            	'skills'=>'olympionik',
            ));
	}

	public function safeDown()
	{
		$this->delete('tbl_student');
	}
}
