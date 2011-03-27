<?php
/* Atom Fixture generated on: 2011-03-26 23:56:19 : 1301183779 */

/**
 * AtomFixture
 *
 */
class AtomFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'ip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'string' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'value' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 24, 'collate' => NULL, 'comment' => ''),
		'data' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'ip' => '127.0.0.1',
			'string' => 'Doug',
			'value' => 1,
			'created' => '2011-03-26 23:56:19',
			'modified' => '2011-03-26 23:56:19'
		),
		array(
			'id' => 2,
			'ip' => '127.0.0.1',
			'string' => 'Johnny',
			'value' => 24,
			'created' => '2011-03-26 23:56:19',
			'modified' => '2011-03-26 23:56:19'
		),
	);
}
