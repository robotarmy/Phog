<?php
/**
 * Error Handling Controller
 *
 * Controller used by ErrorHandler to render error views.
 *
 * @package       cake.libs
 */
class CakeErrorController extends AppController {
	public $name = 'CakeError';

/**
 * Uses Property
 *
 * @var array
 */
	public $uses = array();

/**
 * __construct
 *
 * @access public
 * @return void
 */
	function __construct($request = null) {
		parent::__construct($request);
		$this->constructClasses();
		$this->Components->trigger('initialize', array(&$this));
		$this->_set(array('cacheAction' => false, 'viewPath' => 'errors'));
	}

/**
 * Escapes the viewVars.
 *
 * @return void
 */
	function beforeRender() {
		parent::beforeRender();
		foreach ($this->viewVars as $key => $value) {
			if (!is_object($value)){ 
				$this->viewVars[$key] = h($value);
			}
		}
	}
}