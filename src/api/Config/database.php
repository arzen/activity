<?php
class DATABASE_CONFIG {

	public $default = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'root',
			'password' => '',
			'database' => 'dev_activity',
			'encoding' => 'utf8',
				
	);
	
	public $test = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'root',
			'password' => '',
			'database' => 'test_dev_activity',
			'encoding' => 'utf8',
	);
	
}
