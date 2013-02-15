<?php
App::uses('DiscountsController', 'Controller');

/**
 * DiscountsController Test Case
 *
 */
class DiscountsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
// 	public $fixtures = array(
// 		'app.discount'
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
		$data = array(
				'pid'=>1,
				'name'=>"鞋子",
		);
		$results = $this->socket->post('http://localhost/arzen/activity/src/api/discount/add.json', $data);
		pr($results);
		
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
