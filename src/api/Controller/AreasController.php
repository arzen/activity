<?php
App::uses('AppController', 'Controller');
/**
 * Areas Controller
 *
 * @property Area $Area
 */
class AreasController extends AppController {

	public $components = array('RequestHandler');
/**
 * 取出所有区域列表
 * URL：/areas/get_all_areas.json
 * Method:GET
 * 
 * @return void
 */
	public function getAllAreas() {
		$this->Area->recursive = 0;
		$this->jsonOutput($this->code_success, $this->Area->getAreas() );
	}

/**
 * 新建区域名称
 * URL：/areas/add.json
 * Method:POST
 * 参数：
 * name	string 区域名称
 * 
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Area->create();
			if ($this->Area->save($this->request->data, array('validate' => true) )) {
				$data = __("create area success");
				$this->jsonOutput($this->code_success, $data );
			} else {
				$errors = $this->Area->validationErrors;
				$data = $this->formatErrorData(207001, $errors['name'][0] );
				$this->jsonOutput($this->code_error, $data );
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
		$this->Area->id = $id;
		if (!$this->Area->exists()) {
			throw new NotFoundException(__('Invalid area'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Area->save($this->request->data)) {
				$this->Session->setFlash(__('The area has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Area->read(null, $id);
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
		$this->Area->id = $id;
		if (!$this->Area->exists()) {
			throw new NotFoundException(__('Invalid area'));
		}
		if ($this->Area->delete()) {
			$this->Session->setFlash(__('Area deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Area was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
