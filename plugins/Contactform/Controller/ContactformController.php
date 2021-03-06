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

App::uses('CakeEmail', 'Network/Email');
App::uses('Sanitize', 'Utility');

class ContactformController extends AppController {

    public $helpers = array('Form');
    public $components = array('Email', 'Auth', 'Session');
    public $uses = array('Contactform.Contactform');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('show');
        $this->cacheAction = false;
    }

    public function show() {

        if ($this->request->is('post')) {
            $email = new CakeEmail();
            try {
                $email->config('contactform');
            } catch (Exception $e) {
                Throw new ConfigureException('Config in email.php not found. ' . $e->getMessage());
            }

            $this->Contactform->set($this->request->data['Contactform']);

            if ($this->Contactform->validates()) {
                $data = $this->request->data['Contactform'];

                $email->template('Contactform.contactform', 'Contactform.cflayout')
                      ->emailFormat('text')
                      ->viewVars(array('data' => $data))
                      ->to('ap.academicprocess@gmail.com')
                      ->subject(__d('contactform', 'contact form request'))
                      ->send();

				
                $this->Session->setFlash(__('O seu contato foi submetido com sucesso. Agradecemos seu feedback, e em breve retornaremos sua mensagem.'), 'default', array('class' => 'alert alert-success'));
				$this->redirect('/');
            }
        }

        $this->set('title_for_layout', __d('contactform', 'contact form'));
    }

}