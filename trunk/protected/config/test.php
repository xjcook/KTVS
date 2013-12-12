<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			// [MySQL] Modify dbname, username and password to your needs
			/*'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=ktvs_test',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
			),*/
		),
	)
);
