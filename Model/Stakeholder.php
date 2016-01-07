<?php
App::uses('AppModel', 'Model');
/**
 * Stakeholder Model
 *
 * @property Realisation $Realisation
 */
class Stakeholder extends AppModel {

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
			'joinTable' => 'stakeholders_realisations',
			'foreignKey' => 'stakeholder_id',
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
