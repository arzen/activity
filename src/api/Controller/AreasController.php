<?php
App::uses('AppController', 'Controller');
/**
 * Areas Controller
 *
 * @property Area $Area
 */
class AreasController extends AppController {

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
 * 修改区域名称
 *
 * URL：/areas/edit/{id}.json
 * Method:POST
 * 参数：
 * name	string 区域名称
 * 
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Area->id = $id;
		if (!$this->Area->exists()) {
			$data = $this->formatErrorData(207004, __("edit record not exist.") );
			$this->jsonOutput($this->code_error, $data );
		}else if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Area->save($this->request->data)) {
				$data = __("modify area name success");
				$this->jsonOutput($this->code_success, $data );
				
			} else {
				$errors = $this->Area->validationErrors;
				$data = $this->formatErrorData(207002, $errors['name'][0] );
				$this->jsonOutput($this->code_error, $data );
				
			}
		} else {
			$data = $this->formatErrorData(207003, __("http method unsupport") );
			$this->jsonOutput($this->code_error, $data );
		}
	}

/**
 * 删除区域名称
 *
 * URL：/areas/delete/{id}.json
 * Method:POST
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			$data = $this->formatErrorData(207005, __("http post method unsupport") );
			$this->jsonOutput($this->code_error, $data );
		}else{
			$this->Area->id = $id;
			if (!$this->Area->exists()) {
				$data = $this->formatErrorData(207006, __("delete record not exist.") );
				$this->jsonOutput($this->code_error, $data );
			}else if ( $this->Area->delete() ) {
				$data = __("delete area name success");
				$this->jsonOutput($this->code_success, $data );
			}
			else{
				$data = $this->formatErrorData(207007, __("area was not deleted.") );
				$this->jsonOutput($this->code_error, $data );
				
			}
				
		}
	}
}
