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
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$HttpSocket = new HttpSocket();
		$data = array(
					'name'=>'bbcc',
				);
		$results = $HttpSocket->post('http://localhost/arzen/activity/src/api/areas/edit/100.json', $data);
		pr($results);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
