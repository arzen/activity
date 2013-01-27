<?php
App::uses('CategoriesController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

/**
 * CategoriesController Test Case
 *
 */
class CategoriesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
// 	public $fixtures = array(
// 		'app.category'
// 	);
	
	private $socket;

	function setup() {
		$this->socket = new HttpSocket();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$data = array(
					't'=>'1',
				);
		$results = $this->socket->post('http://localhost/arzen/activity/src/api/categories/get_category_by_type.json', $data);
		pr($results);
		
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
