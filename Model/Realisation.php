<?php
App::uses('AppModel', 'Model');
/**
 * Realisation Model
 *
 * @property Stakeholder $Stakeholder
 * @property Conflicttype $Conflicttype
 * @property EnergySector $EnergySector
 * @property Energypolicylink $Energypolicylink
 * @property Municipality $Municipality
 * @property Processcomponent $Processcomponent
 * @property Review $Review
 * @property Stakeholder $Stakeholder
 */
class Realisation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Stakeholder' => array(
			'className' => 'Stakeholder',
			'foreignKey' => 'stakeholder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Conflicttype' => array(
			'className' => 'Conflicttype',
			'joinTable' => 'conflicttype_realisations',
			'foreignKey' => 'realisation_id',
			'associationForeignKey' => 'conflicttype_id',
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
		'EnergySector' => array(
			'className' => 'EnergySector',
			'joinTable' => 'energy_sectors_realisations',
			'foreignKey' => 'realisation_id',
			'associationForeignKey' => 'energy_sector_id',
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
		'Energypolicylink' => array(
			'className' => 'Energypolicylink',
			'joinTable' => 'energypolicylinks_realisations',
			'foreignKey' => 'realisation_id',
			'associationForeignKey' => 'energypolicylink_id',
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
		),
		'Stakeholder' => array(
			'className' => 'Stakeholder',
			'joinTable' => 'stakeholders_realisations',
			'foreignKey' => 'realisation_id',
			'associationForeignKey' => 'stakeholder_id',
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
