<?php
App::uses('EnergySector', 'Model');

/**
 * EnergySector Test Case
 *
 */
class EnergySectorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.energy_sector',
		'app.realisations'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EnergySector = ClassRegistry::init('EnergySector');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EnergySector);

		parent::tearDown();
	}

}
