<?php
App::uses('AppController', 'Controller');
/**
 * Discounts Controller
 *
 * @property Discount $Discount
 */
class DiscountsController extends AppController {

/**
 * 指定类型，取出该类型的所有分类名称
 * URL：/discount/index.json
 * Method:GET
 * 参数：
 * t	string 0为活动信息，1为优惠信息, 默认为0
 *
 * @return void
 */
	public function index() {
		$this->Discount->recursive = 0;
		$this->set('discounts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Discount->id = $id;
		if (!$this->Discount->exists()) {
			throw new NotFoundException(__('Invalid discount'));
		}
		$this->set('discount', $this->Discount->read(null, $id));
	}

/**
 * 添加优惠打折信息
 * URL：/discount/add.json
 * Method:POST
 * 
 * 参数：
 * c_id	string 分类ID
 * a_id string 区域ID
 * title string 打折标题
 * content string 打折内容
 * start_time string 开始时间
 * end_time string 结果时间
 * address string 结果时间
 *
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Discount->create();
			if ($this->Discount->save($this->request->data)) {
				$this->flash(__('Discount saved.'), array('action' => 'index'));
			} else {
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Discount->id = $id;
		if (!$this->Discount->exists()) {
			throw new NotFoundException(__('Invalid discount'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Discount->save($this->request->data)) {
				$this->flash(__('The discount has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Discount->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Discount->id = $id;
		if (!$this->Discount->exists()) {
			throw new NotFoundException(__('Invalid discount'));
		}
		if ($this->Discount->delete()) {
			$this->flash(__('Discount deleted'), array('action' => 'index'));
		}
		$this->flash(__('Discount was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
