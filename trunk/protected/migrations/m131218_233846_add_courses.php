<?php

class m131218_233846_add_courses extends CDbMigration
{
	public function safeUp()
	{
            $this->insert('tbl_course', array(
            	'name'=>'Lyžiarský kurz I.',
            	'description'=>'Kurz je určený pre začiatočníkov. Naučíte sa základy lyžovania a snowboardingu. Cena je 190e/pobyt.',
				'type'=>'0',
            ));
            
            $this->insert('tbl_course', array(
            	'name'=>'Lyžiarský kurz II.',
				'description'=>'Kurz je určený pre mierne pokročilých. Zdokonalíte svoje techniky a naučíte sa nove finty. Cena je 180e/pobyt.',
				'type'=>'0',
            ));
            
            $this->insert('tbl_course', array(
            	'name'=>'Plavecký kurz I.',
				'description'=>'Kurz je určený pre neplavcov. Naučíme vás základné štýly plávania. Cena je 90e/pobyt.',
            	'type'=>'1',
            ));
            
            $this->insert('tbl_course', array(
            	'name'=>'Plavecký kurz II.',
            	'description'=>'Kurz je určený pre mierne pokročilých plavcov. Zdokonalíte svoje techniky a naučíte sa nove finty. Cena je 100e/pobyt.',
            	'type'=>'1',
            ));
	}

	public function safeDown()
	{
		$this->delete('tbl_course');
	}
}
