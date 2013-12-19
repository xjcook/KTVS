<?php

class m131219_010019_add_sport_tvobjects extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'1','tvobject_id'=>'1'));
            
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'2','tvobject_id'=>'1'));
           
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'3','tvobject_id'=>'1'));
            
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'4','tvobject_id'=>'1'));
            
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'5','tvobject_id'=>'1'));
            
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'6','tvobject_id'=>'2'));
           
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'7','tvobject_id'=>'2'));
            
            $this->insert('tbl_sport_tvobject', array('sport_id'=>'8','tvobject_id'=>'2'));
            
	}

	public function safeDown()
	{
		$this->delete('tbl_sport_tvobject');
	}
}
