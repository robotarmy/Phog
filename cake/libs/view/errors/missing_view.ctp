<?php
/**
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
 * @package       cake.libs.view.templates.errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<h2><?php echo __('Missing View'); ?></h2>
<p class="error">
	<strong><?php echo __('Error'); ?>: </strong>
	<?php echo __('The view for %1$s%2$s was not found.', '<em>' . Inflector::camelize($this->request->controller) . 'Controller::</em>', '<em>' . $this->request->action . '()</em>'); ?>
</p>
<p class="error">
	<strong><?php echo __('Error'); ?>: </strong>
	<?php echo __('Confirm you have created the file: %s', $file); ?>
</p>
<p class="notice">
	<strong><?php echo __('Notice'); ?>: </strong>
	<?php echo __('If you want to customize this error message, create %s', APP_DIR . DS . 'views' . DS . 'errors' . DS . 'missing_view.ctp'); ?>
</p>

<?php echo $this->element('exception_stack_trace'); ?>