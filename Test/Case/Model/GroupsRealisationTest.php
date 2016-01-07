<?php
App::uses('GroupsRealisation', 'Model');

/**
 * GroupsRealisation Test Case
 *
 */
class GroupsRealisationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.groups_realisation',
		'app.group',
		'app.realisations'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupsRealisation = ClassRegistry::init('GroupsRealisation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupsRealisation);

		parent::tearDown();
	}

}
