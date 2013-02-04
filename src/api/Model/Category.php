<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Must be fill up name',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pid' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'type' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	/**
	 * 指定类型取出所有的分类
	 * 
	 * @param	$type	0为活动信息，1为优惠信息
	 * @return array
	 * @author John.Meng
	 * @date 2013-1-27
	 */
	function getCategoryByType($type=0) {
		$cond = array(
					'fields' => array('id', 'name', 'pid') ,
					'conditions'=>array('type'=>$type),
				
				);
		$data = $this->find('all', $cond );
		$pattern = '{n}.'.$this->alias;
		$data = Set::classicExtract($data,$pattern);
		return $data;
	}
}
