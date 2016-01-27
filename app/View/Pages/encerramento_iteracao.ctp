<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');

?>

<p>
Ao final de cada iteração, propõe-se que o desenvolvimento seja avaliado pelo professor, com o objetivo apenas de fornecer feedback sobre o andamento do projeto, possibilitando a identificação de problemas rapidamente, e sua correção sem um grande desperdício de tempo, já que uma iteração consiste apenas de duas semanas de trabalho. 
</p>

<p>
A avaliação da iteração acontece individualmente com a equipe de desenvolvimento, permitindo que as outras equipes possam continuar trabalhando, sem distração. O objetivo de iterações curtas é a avaliação frequente do projeto, permitindo o rápido feedback por parte do cliente, e maior tolerância a mudanças. Assim, se o professor identificar falhas no andamento do desenvolvimento do projeto, o mesmo pode ser ajustado, com um menor gasto de esforço e tempo de, no máximo, duas semanas de trabalho.
</p>

<p>
Após a avaliação, a equipe revisa suas atividades desempenhadas e analisa se os objetivos definidos para o ciclo foram atingidos, e se a equipe conseguirá atingir a meta definida para a release. Se não, todos procuram aprender com a análise, para melhor planejar as próximas iterações.
</p>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?> 
<?php /* if (file_exists(WWW_ROOT . 'css' . DS . 'cake.generic.css')): ?>
	<p id="url-rewriting-warning" style="background-color:#e32; color:#fff;">
		<?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?>
		1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/url-rewriting.html" style="color:#fff;">Help me configure it</a>
		2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
	</p>
<?php endif; */ ?>
