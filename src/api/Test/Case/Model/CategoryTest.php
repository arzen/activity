<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
// 	public $fixtures = array(
// 		'app.category'
// 	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
// 	public function tearDown() {
// 		unset($this->Category);

// 		parent::tearDown();
// 	}

	function testAdd() {
		$this->markTestSkipped("ddd");
		$data = array(
				'name' => '服装',
				'pid' => 0,
				'type' => 0,
		);
		$this->Category->save($data);
	}
	
	function testGetCatogoryByType() {
		$type = 0;
		$data = $this->Category->getCategoryByType($type);
		pr($data);
	}

}
