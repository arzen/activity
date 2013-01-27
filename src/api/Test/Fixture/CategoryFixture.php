<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '????', 'charset' => 'utf8'),
		'pid' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '?ID?0???????????????'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index', 'comment' => '0??????1?????'),
		'created' => array('type' => 'integer', 'null' => false, 'default' => null),
		'updated' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'type' => array('column' => 'type', 'unique' => 0)
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
			'pid' => 1,
			'type' => 1,
			'created' => 1,
			'updated' => 1,
			'indexes' => 1
		),
	);

}
