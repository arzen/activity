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
		$HttpSocket = new HttpSocket();
		$results = $HttpSocket->get('http://www.google.com/search', 'q=cakephp');
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
