<?php
/**
 * ContactForm for CakePHP 2.x
 *
 * Copyright 2012-2013 by Patrick Hafner (http://patrickhafner.de)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 */

App::uses('AppModel', 'Model');

/**
 * Contact Model
 *
 * @property Contact $Contact
 */
class Contactform extends AppModel {

    public $validationDomain = 'contactform';

    public $_schema = array(
        'Name' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '50'),
        'Mail' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '80'),
		'Subject' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '100'),
        'Message' => array('type' => 'text', 'null' => false, 'default' => ''),
    );

    public $useTable = false;
    
    public $validate = array(
        'Name' => array(
            'notblank' => array(
                'rule' => array('notblank'),
                'required' => true,
                'message' => 'please insert your name'
            )
        ),
        'Mail' => array(
            'email' => array(
                'rule' => array('email'),
                'required' => true,
                'message' => 'please insert your email address'
            )
        ),
		'Subject' => array(
            'notblank' => array(
                'rule' => array('notblank'),
                'required' => true,
                'message' => 'please insert your subject'
            )
        ),
        'Message' => array(
            'notblank' => array(
                'rule' => array('notblank'),
                'required' => true,
                'message' => 'please enter your message'
            )
        ),
		
	);
}