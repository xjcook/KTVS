<?php

class m131219_013125_add_schedules extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_schedule', array('class'=>'1','content'=>'rozvrh1','tvobject_id'=>'2'));
            
            $this->insert('tbl_schedule', array('class'=>'2','content'=>'rozvrh2','tvobject_id'=>'1'));
            $this->insert('tbl_schedule', array('class'=>'2','content'=>'rozvrh3','tvobject_id'=>'2'));
            
            $this->insert('tbl_schedule', array('class'=>'3','content'=>'rozvrh4','tvobject_id'=>'3'));
            
            $this->insert('tbl_schedule', array('class'=>'4','content'=>'rozvrh5','tvobject_id'=>'2'));
            
            $this->insert('tbl_schedule', array('class'=>'5','content'=>'rozvrh6','tvobject_id'=>'1'));
            
	}

	public function safeDown()
	{
		$this->delete('tbl_schedule');
	}
}
