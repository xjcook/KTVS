<?php

class m131219_002028_add_user_courses extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_user_course', array('user_id'=>'1'));
            $this->insert('tbl_user_course', array('course_id'=>'1'));
             
            $this->insert('tbl_user_course', array('user_id'=>'1'));
            $this->insert('tbl_user_course', array('course_id'=>'2'));
            
            $this->insert('tbl_user_course', array('user_id'=>'2'));
            $this->insert('tbl_user_course', array('course_id'=>'2'));
            
            $this->insert('tbl_user_course', array('user_id'=>'1'));
            $this->insert('tbl_user_course', array('course_id'=>'3'));
            
            $this->insert('tbl_user_course', array('user_id'=>'1'));
            $this->insert('tbl_user_course', array('course_id'=>'4'));
            
            $this->insert('tbl_user_course', array('user_id'=>'2'));
            $this->insert('tbl_user_course', array('course_id'=>'4'));
            
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user_course');
	}
}
