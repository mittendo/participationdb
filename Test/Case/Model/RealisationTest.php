<?php
App::uses('Realisation', 'Model');

/**
 * Realisation Test Case
 *
 */
class RealisationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.realisation',
		'app.stakeholder',
		'app.stakeholders_realisation',
		'app.energy_sector',
		'app.energy_sectors_realisation',
		'app.energypolicylink',
		'app.energypolicylinks_realisation',
		'app.municipality',
		'app.municipalities_realisation',
		'app.processcomponent',
		'app.processcomponents_realisation',
		'app.review',
		'app.realisations_review'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Realisation = ClassRegistry::init('Realisation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Realisation);

		parent::tearDown();
	}

}
