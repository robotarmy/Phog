<?php
/**
 * Short description for file.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.7026
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * @package       cake.tests.fixtures
 */
class DatatypeFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'Datatype'
 * @access public
 */
	public $name = 'Datatype';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null'=> false, 'default'=> 0, 'key' => 'primary'),
		'float_field' => array('type' => 'float', 'length' => '5,2', 'null' => false, 'default' => null),
		'bool' => array('type' => 'boolean', 'null' => false, 'default' => false),
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('id' => 1, 'float_field' => 42.23, 'bool' => false),
	);
}
