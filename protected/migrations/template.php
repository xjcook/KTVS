<?php

class {ClassName} extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_', array(
			// keys
			'id' => 'pk',

			// attributes		
			
			// timestamps
			'created_at' => 'timestamp',
			'updated_at' => 'timestamp',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_');
	}
}
