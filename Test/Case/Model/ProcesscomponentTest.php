<?php
App::uses('Processcomponent', 'Model');

/**
 * Processcomponent Test Case
 *
 */
class ProcesscomponentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.processcomponent',
		'app.realisation',
		'app.municipality',
		'app.municipalities_realisation',
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
		$this->Processcomponent = ClassRegistry::init('Processcomponent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Processcomponent);

		parent::tearDown();
	}

}
