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

<p>No início do projeto, o professor especifica qual é o escopo do sistema a ser desenvolvido durante o trabalho prático da disciplina. O professor e a equipe de desenvolvimento devem compartilhar de um entendimento mútuo e claro do problema que o software deverá solucionar, bem como suas características e resultados esperados, com o objetivo de evitar a necessidade de retrabalho futuro, caso as duas partes seguirem com uma concepção divergente acerca da finalidade do projeto.</p>

<p>Incentiva-se que o escopo do projeto seja definido a partir de seu impacto no aprendizado e na motivação dos alunos, propondo o desenvolvimento de um projeto desafiador, que instigue os mesmos a procurarem a melhor solução, possibilitando resultados positivos com relação a sua formação acadêmica, enquanto também permitindo o desenvolvimento de produtos de software de qualidade.
</p>
<p>Quanto a área de negócio do sistema a ser desenvolvido, incentiva-se, também, que o escopo do projeto permita o desenvolvimento de uma aplicação passível de ter uma utilidade real no futuro, se possível.</p>

<p>Durante esta fase, o professor e a equipe decidem também sobre o número de entregas e avaliações formais do andamento do projeto, de acordo com o espaço de tempo disponível para o desenvolvimento do trabalho, além de suas datas. Incentiva-se entregas a cada quatro ou seis semanas, sendo estas divididas por iterações de duas semanas.</p>
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
