<?php
/**
 * AreaFixture
 *
 */
class AreaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'area';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'created' => array('type' => 'integer', 'null' => false, 'default' => null),
		'updated' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1,
			'updated' => 1
		),
	);

}
