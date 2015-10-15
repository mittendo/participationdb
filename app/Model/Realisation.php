<?php
App::uses('AppModel', 'Model');
/**
 * Realisation Model
 *
 * @property Municipality $Municipality
 * @property Processcomponent $Processcomponent
 * @property Review $Review
 */
class Realisation extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Municipality' => array(
			'className' => 'Municipality',
			'joinTable' => 'municipalities_realisations',
			'foreignKey' => 'realisation_id',
			'associationForeignKey' => 'municipality_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Processcomponent' => array(
			'className' => 'Processcomponent',
			'joinTable' => 'processcomponents_realisations',
			'foreignKey' => 'realisation_id',
			'associationForeignKey' => 'processcomponent_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Review' => array(
			'className' => 'Review',
			'joinTable' => 'realisations_reviews',
			'foreignKey' => 'realisation_id',
			'associationForeignKey' => 'review_id',
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
