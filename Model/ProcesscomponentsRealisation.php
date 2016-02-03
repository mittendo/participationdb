<?php
App::uses('AppModel', 'Model');
/**
 * ProcesscomponentsRealisation Model
 *
 * @property Realisation $Realisation
 * @property Processcomponent $Processcomponent
 */
class ProcesscomponentsRealisation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'processcomponent_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Realisation' => array(
			'className' => 'Realisation',
			'foreignKey' => 'realisation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Processcomponent' => array(
			'className' => 'Processcomponent',
			'foreignKey' => 'processcomponent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
