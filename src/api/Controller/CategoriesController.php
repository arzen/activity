<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {

/**
 * 指定类型，取出该类型的所有分类名称
 * URL：/categories/get_category_by_type.json
 * 参数：
 * t	string 0为活动信息，1为优惠信息, 默认为0
 *
 * @return void
 */
	public function getCategoryByType() {
		$this->Category->recursive = 0;
		$params = $this->request->data;
		$type = isset($params['t']) ? $params['t'] : 0 ;
		$this->jsonOutput($this->code_success,  $this->Category->getCategoryByType($type) );
		
	}

/**
 * 指定类型，取出该类型的所有分类名称
 * URL：/categories/add.json
 * Method:POST
 * 
 * 参数：
 * pid	string 0为活动信息，1为优惠信息, 默认为0
 * name string 分类名称
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$data = __("The category has been saved");
				$this->jsonOutput($this->code_success, $data );
			} else {
				$errors = $this->Category->validationErrors;
				$data = $this->formatErrorData(208001, $errors );
				$this->jsonOutput($this->code_error, $data );
			}
		}
	}

/**
 * 修改分类名称
 *
 * URL：/categories/edit/{id}.json
 * Method:POST | PUT
 * 参数：
 * name	string 分类名称
 *
 * @param string $id	要编辑 的分类ID
 * @return void
 */
	public function edit($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			$data = $this->formatErrorData(208004, __("Invalid category.") );
			$this->jsonOutput($this->code_error, $data );
		}else if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Category->save($this->request->data)) {
				$data = __("The category has been saved");
				$this->jsonOutput($this->code_success, $data );
			} else {
				$errors = $this->Category->validationErrors;
				$data = $this->formatErrorData(208002, $errors['name'][0] );
				$this->jsonOutput($this->code_error, $data );
			}
		}else{
			$data = $this->formatErrorData(208003, __("http method unsupport") );
			$this->jsonOutput($this->code_error, $data );
				
		}
				
	}

/**
 * 删除区域名称
 *
 * URL：/categories/delete/{id}.json
 * Method:POST
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			$data = $this->formatErrorData(208005, __("http post method unsupport") );
			$this->jsonOutput($this->code_error, $data );
		}
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			$data = $this->formatErrorData(208006, __("Invalid category") );
			$this->jsonOutput($this->code_error, $data );
		}
		if ($this->Category->delete()) {
			$data = __("Category deleted");
			$this->jsonOutput($this->code_success, $data );
		}
		$data = $this->formatErrorData(208007, __("Category was not deleted") );
		$this->jsonOutput($this->code_error, $data );
	}
}
