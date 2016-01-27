<?php
echo $this->Html->css(array(
    '/Contactform/css/Contactform.css'
));

echo "Utilize os campos abaixo para deixar a sua mensagem conosco. Seu feedback é muito importante para o projeto. Retornaremos o seu contato assim que possível.";
echo "<br>Os campos marcados com * são obrigatórios.";

echo $this->Form->create('Contactform.Contactform');

echo $this->Form->input('Contactform.Name', array('label' => __d('contactform', 'Nome:')));
echo $this->Form->input('Contactform.Mail', array('label' => __d('contactform', 'E-mail:')));
echo $this->Form->input('Contactform.Subject', array('label' => __d('contactform', 'Assunto:')));
echo $this->Form->input('Contactform.Message', array('type' => 'textarea', 'label' => __d('contactform', 'Mensagem:')));
echo "<br>";
echo $this->Form->button('Enviar', array('label' => __d('contactform', 'submit')));

echo $this->Form->end();