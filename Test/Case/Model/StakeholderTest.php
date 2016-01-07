<?php
App::uses('Stakeholder', 'Model');

/**
 * Stakeholder Test Case
 *
 */
class StakeholderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stakeholder',
		'app.realisation',
		'app.municipality',
		'app.municipalities_realisation',
		'app.processcomponent',
		'app.processcomponents_realisation',
		'app.review',
		'app.realisations_review',
		'app.stakeholders_realisation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stakeholder = ClassRegistry::init('Stakeholder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stakeholder);

		parent::tearDown();
	}

}
