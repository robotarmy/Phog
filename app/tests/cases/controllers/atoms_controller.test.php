<?php
/* Atoms Test cases generated on: 2011-03-27 00:32:12 : 1301185932*/
App::import('Controller', 'Atoms','Atom');

/**
 * TestAtomsController 
 *
 */
class TestAtomsController extends AtomsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * AtomsController Test Case
 *
 */
class AtomsControllerTestCase extends ControllerTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.atom');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

    $this->Atom = ClassRegistry::init('Atom');
		$this->Atoms = new TestAtomsController();
		$this->Atoms->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Atoms);
		ClassRegistry::flush();

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
  public function testIndex() {
    $result = $this->testAction('/atoms/index',array('method' => 'GET','return' => 'vars')); 
    $this->assertNotEmpty($result);
  }


/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

}
