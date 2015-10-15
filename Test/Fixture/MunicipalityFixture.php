<?php
/**
 * MunicipalityFixture
 *
 */
class MunicipalityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'land_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
		'land' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type_of_set' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2),
		'text_signature' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type_of_municipality' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'region_number' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 11),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'seat_of_authority' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'street' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 38, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PLZ' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'location' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'area' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'inhabitants' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7),
		'male' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7),
		'female' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7),
		'density_of_inhabitants' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
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
			'ID' => 1,
			'land_number' => 1,
			'land' => 'Lorem ipsum dolo',
			'type_of_set' => 1,
			'text_signature' => '',
			'type_of_municipality' => 'Lorem ipsum dolor sit a',
			'region_number' => '',
			'name' => 'Lorem ipsum dolor sit amet',
			'seat_of_authority' => 'Lorem ipsum dolor sit amet',
			'street' => 'Lorem ipsum dolor sit amet',
			'PLZ' => 1,
			'location' => 'Lorem ipsum ',
			'area' => 'Lorem ',
			'date' => 'Lorem ip',
			'inhabitants' => 1,
			'male' => 1,
			'female' => 1,
			'density_of_inhabitants' => 1
		),
	);

}
