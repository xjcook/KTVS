<?php

class m131205_112149_add_sports extends CDbMigration
{
	public function safeUp()
	{
		$this->insert('tbl_sport', array('name'=>'Aerobik'));
		$this->insert('tbl_sport', array('name'=>'Basketbal'));
		$this->insert('tbl_sport', array('name'=>'Bedminton'));
		$this->insert('tbl_sport', array('name'=>'Crossfit'));
		$this->insert('tbl_sport', array('name'=>'Florbal'));
		$this->insert('tbl_sport', array('name'=>'Futsal'));
		$this->insert('tbl_sport', array('name'=>'Horolezectvo'));
		$this->insert('tbl_sport', array('name'=>'Kondičné posilňovanie'));
		$this->insert('tbl_sport', array('name'=>'Lesný beh'));
		$this->insert('tbl_sport', array('name'=>'Plávanie'));
		$this->insert('tbl_sport', array('name'=>'Skoky na trampolínach'));
		$this->insert('tbl_sport', array('name'=>'Stolný tenis'));
		$this->insert('tbl_sport', array('name'=>'Tenis'));
		$this->insert('tbl_sport', array('name'=>'Vodná a pešia turistika'));
		$this->insert('tbl_sport', array('name'=>'Volejbal'));
	}

	public function safeDown()
	{
		$this->delete('tbl_sport');
	}
}
