<?php
App::uses('AppModel', 'Model');
/**
 * Conflicttype Model
 *
 * @property Realisation $Realisation
 */
class Conflicttype extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'conflicttype';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Realisation' => array(
			'className' => 'Realisation',
			'joinTable' => 'conflicttype_realisations',
			'foreignKey' => 'conflicttype_id',
			'associationForeignKey' => 'realisation_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
