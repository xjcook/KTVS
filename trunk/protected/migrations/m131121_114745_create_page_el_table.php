<?php

class m131121_114745_create_page_el_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_page_el', array(
			// keys
			'page_id' => 'integer NOT NULL',
			'el_id' => 'integer NOT NULL',

			// attributes		
			
			// timestamp
			'updated_at' => 'timestamp',
		));
		
		$this->addPrimaryKey('id', 'tbl_page_el', 'page_id, el_id');
		$this->addForeignKey('el_page_fk', 'tbl_page_el', 'page_id', 'tbl_page', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('page_el_fk', 'tbl_page_el', 'el_id', 'tbl_el', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_page_el');
	}
}
