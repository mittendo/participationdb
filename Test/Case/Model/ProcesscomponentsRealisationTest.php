<?php
App::uses('ProcesscomponentsRealisation', 'Model');

/**
 * ProcesscomponentsRealisation Test Case
 *
 */
class ProcesscomponentsRealisationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.processcomponents_realisation',
		'app.realisation',
		'app.stakeholder',
		'app.stakeholders_realisation',
		'app.conflicttype',
		'app.conflicttype_realisation',
		'app.energy_sector',
		'app.energy_sectors_realisation',
		'app.energypolicylink',
		'app.energypolicylinks_realisation',
		'app.municipality',
		'app.municipalities_realisation',
		'app.processcomponent',
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
		$this->ProcesscomponentsRealisation = ClassRegistry::init('ProcesscomponentsRealisation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProcesscomponentsRealisation);

		parent::tearDown();
	}

}
