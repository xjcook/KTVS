<?php

class m131219_002638_add_students extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_student', array('name'=>'Jožko Mrkvička'));
            $this->insert('tbl_student', array('email'=>'jozko@jozko.sk'));
            $this->insert('tbl_student', array('class'=>'2'));
            $this->insert('tbl_student', array('phone'=>'0915 000 000'));
            $this->insert('tbl_student', array('skills'=>'žiadne nemám'));
            
            $this->insert('tbl_student', array('name'=>'Zuzanka Hraškovie'));
            $this->insert('tbl_student', array('email'=>'zuzkaa@zuzka.sk'));
            $this->insert('tbl_student', array('class'=>'1'));
            $this->insert('tbl_student', array('phone'=>'0915 111 000'));
            $this->insert('tbl_student', array('skills'=>'profík'));
           
            $this->insert('tbl_student', array('name'=>'Usain Bolt'));
            $this->insert('tbl_student', array('email'=>'usain@usain.sk'));
            $this->insert('tbl_student', array('class'=>'5'));
            $this->insert('tbl_student', array('phone'=>'0915 111 111'));
            $this->insert('tbl_student', array('skills'=>'olympionik'));
            
	}

	public function safeDown()
	{
		$this->dropTable('tbl_student');
	}
}
