<?php

class m131219_005811_add_tvobjects extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_tvobject', array(
                'name'=>'Malá telocvičňa',
                'description'=>'miesto pre rôzne športy',
                'image'=>'',
                'map'=>''));
           
            $this->insert('tbl_tvobject', array(
                'name'=>'Veľká telocvičňa',
                'description'=>'miesto pre rôzne športy',
                'image'=>'',
                'map'=>''));
           
            $this->insert('tbl_tvobject', array(
                'name'=>'VPlaváreň',
                'description'=>'miesto na plávanie',
                'image'=>'',
                'map'=>''));
            
	}

	public function safeDown()
	{
		$this->delete('tbl_tvobject');
	}
}
