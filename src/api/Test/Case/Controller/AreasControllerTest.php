<?php
App::uses('AreasController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

/**
 * AreasController Test Case
 *
 */
class AreasControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
// 	public $fixtures = array(
// 		'app.area'
// 	);


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
		$HttpSocket = new HttpSocket();
		$data = array(
					'name'=>'fsdd',
				);
		$results = $HttpSocket->post('http://localhost/arzen/activity/src/api/areas/add.json', $data);
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
