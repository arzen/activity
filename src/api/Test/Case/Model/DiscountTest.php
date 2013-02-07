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
		$data = array(
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
				
		);
		$this->Discount->save($data);
	}

}
