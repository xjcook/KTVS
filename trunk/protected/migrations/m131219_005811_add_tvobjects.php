<?php

class m131219_005811_add_tvobjects extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_tvobject', array('name'=>'Malá telocvičňa'));
            $this->insert('tbl_tvobject', array('description'=>'miesto pre rôzne športy'));
            $this->insert('tbl_tvobject', array('image'=>''));
            $this->insert('tbl_tvobject', array('map'=>''));
           
            $this->insert('tbl_tvobject', array('name'=>'Veľká telocvičňa'));
            $this->insert('tbl_tvobject', array('description'=>'miesto pre rôzne športy'));
            $this->insert('tbl_tvobject', array('image'=>''));
            $this->insert('tbl_tvobject', array('map'=>''));
           
            $this->insert('tbl_tvobject', array('name'=>'VPlaváreň'));
            $this->insert('tbl_tvobject', array('description'=>'miesto na plávanie'));
            $this->insert('tbl_tvobject', array('image'=>''));
            $this->insert('tbl_tvobject', array('map'=>''));
            
	}

	public function safeDown()
	{
		$this->dropTable('tbl_tvobject');
	}
}
