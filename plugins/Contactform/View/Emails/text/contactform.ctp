<?php
echo sprintf(
"%s: %s
%s: %s

%s: %s

%s:
%s
----------------------------
%s %s",
    __d('contactform', 'Nome'), $data['Name'],
    __d('contactform', 'E-mail'), $data['Mail'],
	
	__d('contactform', 'Assunto'), $data['Subject'],

    __d('contactform', 'Mensagem'),
    Sanitize::stripAll($data['Message']),

    __d('contactform', 'sent from'), Router::url('/', true)
);