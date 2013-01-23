<?php
App::uses('AppModel', 'Model');
/**
 * Area Model
 *
 */
class Area extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'area';

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
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	function getAreas() {
		$data = $this->find('all',array( 'fields' => array('id', 'name') ) );
		$pattern = '{n}.'.$this->alias;
		$data = Set::classicExtract($data,$pattern);
		return $data;
	}
}
