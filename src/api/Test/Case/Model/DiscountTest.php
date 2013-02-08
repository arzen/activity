<?php
App::uses('Discount', 'Model');

/**
 * Discount Test Case
 *
 */
class DiscountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
// 	public $fixtures = array(
// 		'app.discount',
// 		'app.c',
// 		'app.a'
// 	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Discount = ClassRegistry::init('Discount');
	}

/**
 * tearDown method
 *
 * @return void
 */
// 	public function tearDown() {
// 		unset($this->Discount);

// 		parent::tearDown();
// 	}

	function testAdd() {
		$this->markTestSkipped();
		$data = array(
				'c_id' => 1,
				'a_id' => 1,
				'title' => '服装打折',
				'content' => '东门童装打折.',
				'start_time' => strtotime("2013-02-01 22:20"),
				'end_time' => strtotime("2013-03-01 22:20"),
				'address' => '罗湖区东门11号',
				'public' => 1,
				'gps' => '23.5533,94.234',
				'state' => 1,
				
		);
		$this->Discount->save($data);
	}
	
	function testGetByACID() {
// 		$this->markTestSkipped();
		$fields=array('id', 'title', 'content','start_time', 'end_time');
		$data = $this->Discount->getByACID($fields);
		pr($data);
	}
}
