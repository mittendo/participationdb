<?php
App::uses('Conflicttype', 'Model');

/**
 * Conflicttype Test Case
 *
 */
class ConflicttypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conflicttype',
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
		'app.realisations_review',
		'app.conflicttype_realisation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Conflicttype = ClassRegistry::init('Conflicttype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conflicttype);

		parent::tearDown();
	}

}
