<?php
App::uses('CategoriesController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

/**
 * CategoriesController Test Case
 *
 */
class CategoriesControllerTest extends CakeTestCase {

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
		$this->markTestSkipped();
		
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
		$this->markTestSkipped();
		
		$data = array(
// 					'pid'=>1,
// 					'name'=>"鞋子",
		);
		$results = $this->socket->post('http://localhost/arzen/activity/src/api/categories/add.json', $data);
		pr($results);
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestSkipped();
		
		$params = array(
					'name'=>"鞋鞋子",
		);
		$results = $this->socket->post('http://localhost/arzen/activity/src/api/categories/edit/2.json', $params);
		$data = json_decode($results);
// 		$this->assertEquals('208002', $data->data->err_code);
		pr($results);
		
		$params = array(
					'name'=>"鞋鞋子",
		);
		$results = $this->socket->post('http://localhost/arzen/activity/src/api/categories/edit/99999.json', $params);
		$data = json_decode($results);
// 		$this->assertEquals('208003', $data->data->err_code);
		
		pr($data->data);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
// 		$this->markTestSkipped();
		
		$params = array(
		);
		$results = $this->socket->post('http://localhost/arzen/activity/src/api/categories/delete/5.json', $params);
		$data = json_decode($results);
// 		$this->assertEquals('208002', $data->data->err_code);
		pr($results);
	}

}
