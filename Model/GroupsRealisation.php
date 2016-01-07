<?php
App::uses('AppModel', 'Model');
/**
 * GroupsRealisation Model
 *
 * @property Group $Group
 * @property Realisations $Realisations
 */
class GroupsRealisation extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Realisations' => array(
			'className' => 'Realisations',
			'foreignKey' => 'realisations_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
