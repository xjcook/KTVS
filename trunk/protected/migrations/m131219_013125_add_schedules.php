<?php

class m131219_013125_add_schedules extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_schedule', array('page_id'=>'1','tvobject_id'=>'2'));
            
            $this->insert('tbl_schedule', array('page_id'=>'1','tvobject_id'=>'1'));
            
            $this->insert('tbl_schedule', array('page_id'=>'1','tvobject_id'=>'3'));
            
            $this->insert('tbl_schedule', array('page_id'=>'2','tvobject_id'=>'2'));
            
            $this->insert('tbl_schedule', array('page_id'=>'2','tvobject_id'=>'1'));
            
	}

	public function safeDown()
	{
		$this->delete('tbl_schedule');
	}
}
