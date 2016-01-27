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
Durante a fase de inicialização, a equipe de desenvolvimento procura obter, por meio do professor da disciplina, as informações relacionadas ao <a href="definicao_escopo">escopo do projeto</a>, levantando e especificando as características e resultados esperados pelo sistema.
</p>

<p>
A equipe também precisa decidir sobre as <a href="tecnologias_ferramentas">tecnologias e ferramentas</a> a serem utilizadas durante o projeto, possibilitando, assim, a preparação do ambiente de desenvolvimento, de acordo com as atividades propostas e a linguagem de programação adotada, além de quaisquer outras tecnologias aplicadas durante o projeto.
</p>

<p>
Após, a equipe parte para o <a href="levantamento_requisitos">levantamento e especificação de requisitos</a>, definindo e especificando os casos de uso e o documento de visão do projeto, além do backlog do projeto, contendo todas as funcionalidades a serem desenvolvidas. Finalmente, a equipe inicia a <a href="modelagem">modelagem</a> do sistema, especificando o comportamento e interação do sistema em diagramas antes da implementação.
</p>

<center>
	<?= $this->Html->image('inicializacao.png'); ?>
</center>

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
