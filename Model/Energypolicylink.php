<?php
App::uses('AppModel', 'Model');
/**
 * Energypolicylink Model
 *
 * @property Realisation $Realisation
 */
class Energypolicylink extends AppModel {

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
			'joinTable' => 'energypolicylinks_realisations',
			'foreignKey' => 'energypolicylink_id',
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
