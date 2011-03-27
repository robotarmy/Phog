<?php
/* Atom Test cases generated on: 2011-03-26 23:56:19 : 1301183779*/
App::import('Model', 'Atom');

/**
 * Atom Test Case
 *
 */
class AtomTestCase extends CakeTestCase {
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
  }


  public function testFixtureSanity() {
    $result = $this->Atom->find('all',array('fields' => array('id','ip')));
    $expected = array(
      array('Atom' => array( 'id' => 1, 'ip' => '127.0.0.1')),
      array('Atom' => array( 'id' => 2, 'ip' => '127.0.0.1')),
    );
    $this->assertEqual($result, $expected);

    $result = $this->Atom->find('all',array('fields' => array('id','string')));
    $expected = array(
      array('Atom' => array( 'id' => 2, 'ip' => '127.0.0.1')),
    );

    $this->assertNotEqual($result, $expected);
  }

  /**
   * tearDown method
   *
   * @return void
   */
  public function tearDown() {
    unset($this->Atom);
    ClassRegistry::flush();

    parent::tearDown();
  }

}
