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
Durante o planejamento do ciclo de release, primeiramente, a equipe procura identificar o que deve ser entregue na próxima release do sistema, e planejar a divisão dos esforços de desenvolvimento dentro das iterações até a entrega. Propõe-se que o planejamento seja breve, com duração de apenas alguns minutos, com o fim de maximizar o tempo disponível para o desenvolvimento do projeto. 
</p>

<p>
Durante o planejamento, a equipe inicia elaborando o backlog de release, transferindo os itens do backlog do projeto a serem implementados para a próxima entrega. O planejamento procura priorizar a implementação de itens que mais impactam o aprendizado do aluno e o andamento do desenvolvimento do projeto, sendo avaliado pelo professor.
</p>

<p>
A qualquer momento, podendo ser durante o planejamento da release ou da iteração, ou durante o desenvolvimento de uma iteração, os backlogs do projeto e da release podem ser revisados e atualizados conforme necessidades atuais, podendo resultar na adição, remoção ou unificação de itens presentes nas listas.
</p>

<p>
Incentiva-se que a primeira entrega seja dedicada para a fase de inicialização do projeto, com a definição do escopo do projeto, de tecnologias e ferramentas, do levantamento e especificação dos requisitos e casos de uso do sistema, elaboração do documento de visão e do backlog do projeto, bem como a modelagem do projeto.
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
