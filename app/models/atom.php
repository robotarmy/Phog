<?php
/**
 * Atom Model
 *
 */
class Atom extends AppModel {
 var $validate = array(
 'string' => array('rule' => 'notEmpty'),
 'value' => array('rule' => 'numeric',
                  'message' => 'enter number of guests')
 );
 
}
