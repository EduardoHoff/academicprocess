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

<p>Definido o escopo do projeto, o professor e a equipe direcionam seus esforços para a definição das tecnologias e ferramentas utilizadas durante o desenvolvimento da aplicação. Cabe ao professor decidir, com base nos interesses ou necessidades da disciplina, do curso ou dos alunos, quais tecnologias serão aplicadas e como, podendo ele delegar a decisão à equipe de desenvolvimento, se o mesmo considerar os alunos prontos para tal decisão.
</p>

<p>O professor e a equipe decidem sobre a linguagem de programação, ambiente de desenvolvimento, sistema de controle de versão de software, ferramenta para modelagem, sistema de gerenciamento de banco de dados e, se necessário, ferramentas de gerenciamento de projetos e quaisquer outras ferramentas de testes ou de implantação, se compatível com os objetivos e limitações da disciplina e do projeto.
</p>

<p>
Enfatiza-se que a metodologia possui, como um de seus princípios, a independência de tecnologia e ferramentas, fornecendo apenas práticas para direcionar os esforços de desenvolvimento de projetos práticos de software em ambientes acadêmicos.
</p>

<p>Definidas as tecnologias e ferramentas a serem utilizadas durante o desenvolvimento do projeto, a equipe prepara seu ambiente de trabalho, devendo assegurar que todos os itens necessários estão disponíveis nas máquinas presentes nos laboratórios da instituição ou pessoais, se utilizadas. Incentiva-se a utilização apenas de tecnologias e ferramentas suportadas pela infraestrutura da instituição e, preferencialmente, já instaladas e em perfeito estado de funcionamento.
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
