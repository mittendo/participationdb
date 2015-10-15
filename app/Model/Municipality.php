<?php
App::uses('AppModel', 'Model');
/**
 * Municipality Model
 *
 * @property Realisation $Realisation
 */
class Municipality extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Realisation' => array(
			'className' => 'Realisation',
			'joinTable' => 'municipalities_realisations',
			'foreignKey' => 'municipality_id',
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
