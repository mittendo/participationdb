<?php
/**
 * ProcesscomponentsRealisationFixture
 *
 */
class ProcesscomponentsRealisationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'realisation_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'processcomponent_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'legal_base' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'invitiation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'realisation_id' => 1,
			'processcomponent_id' => 1,
			'created' => '2016-02-03 10:00:56',
			'modified' => '2016-02-03 10:00:56',
			'legal_base' => 'Lorem ipsum dolor sit amet',
			'invitiation' => 'Lorem ipsum dolor sit amet'
		),
	);

}
