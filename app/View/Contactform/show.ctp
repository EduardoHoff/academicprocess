
<?php
echo $this->Html->css(array(
    '/Contactform/css/Contactform.css'
));
echo $this->Form->create('Contactform.Contactform');

echo $this->Form->input('Contactform.Name', array('label' => __d('contactform', 'Nome')));
echo $this->Form->input('Contactform.Mail', array('label' => __d('contactform', 'E-mail')));
echo $this->Form->input('Contactform.Subject', array('label' => __d('contactform', 'Assunto')));
echo $this->Form->input('Contactform.Message', array('type' => 'textarea', 'label' => __d('contactform', 'Mensagem')));

echo $this->Form->submit('Enviar', array('label' => __d('contactform', 'submit')));

echo $this->Form->end();