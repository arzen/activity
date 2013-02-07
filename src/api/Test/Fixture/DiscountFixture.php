<?php
/**
 * DiscountFixture
 *
 */
class DiscountFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'c_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '类别'),
		'a_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '区域'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'comment' => '标题', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '介绍', 'charset' => 'utf8'),
		'start_time' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '时间'),
		'end_time' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '结束时间'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'comment' => '地点', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '公开/私有'),
		'gps' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '地图标示', 'charset' => 'utf8'),
		'state' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0待审核，1已审核，2已下架'),
		'created' => array('type' => 'integer', 'null' => false, 'default' => null),
		'updated' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'c_id' => array('column' => array('c_id', 'a_id', 'state'), 'unique' => 0),
			'end_time' => array('column' => 'end_time', 'unique' => 0)
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
			'c_id' => 1,
			'a_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_time' => 1,
			'end_time' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'public' => 1,
			'gps' => 'Lorem ipsum dolor sit amet',
			'state' => 1,
			'created' => 1,
			'updated' => 1
		),
	);

}
