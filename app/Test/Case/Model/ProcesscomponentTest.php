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
		'app.processcomponent'
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
