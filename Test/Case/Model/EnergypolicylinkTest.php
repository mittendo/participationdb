<?php
App::uses('Energypolicylink', 'Model');

/**
 * Energypolicylink Test Case
 *
 */
class EnergypolicylinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.energypolicylink',
		'app.realisation',
		'app.municipality',
		'app.municipalities_realisation',
		'app.processcomponent',
		'app.processcomponents_realisation',
		'app.review',
		'app.realisations_review',
		'app.stakeholder',
		'app.stakeholders_realisation',
		'app.energypolicylinks_realisation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Energypolicylink = ClassRegistry::init('Energypolicylink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Energypolicylink);

		parent::tearDown();
	}

}
