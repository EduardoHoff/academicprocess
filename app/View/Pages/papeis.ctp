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

<p>Durante cada planejamento de iteração, a equipe define os papéis dentro do time de desenvolvimento, procurando modificar a 
distribuição de funções da última iteração, assegurando, assim, que todos seus membros participem durante todo o andamento do projeto.</p>

<p>Em se tratando de projetos desenvolvidos em meio acadêmico, os papéis podem já ser explícitos. O professor normalmente representa o cliente, 
ou seja, quem define os requisitos e o escopo do sistema, e a equipe de desenvolvimento consiste de um ou mais alunos, que trabalham para executar 
as atividades propostas e obter a aprovação na disciplina. O Manifesto Ágil propõe que 
pessoas relacionadas ao negócio, seja o tutor ou outro aluno, e desenvolvedores trabalhem em conjunto, durante todo o curso do projeto. </p>

<p>Projetos acadêmicos podem ser individuais ou em grupos. No caso de vários colaboradores, como um dos objetivos da metodologia é a 
aprendizagem do aluno, e a aplicação de todos os conceitos de engenharia de software, é importante que todos participem de todas as etapas do 
processo, desempenhando vários papeis durante o desenvolvimento do projeto. </p>

<p>Também se mostra importante possibilitar ao aluno a visualização de uma equipe em um processo de desenvolvimento como utilizado no meio profissional. 
Assim, são propostos os papeis de líder de projeto, analista e desenvolvedor, compondo a equipe de desenvolvimento, e de cliente, que deve ser 
considerado parte do time. Os papéis são rotativos, e todos os membros participam de todas as atividades do processo. 
O gerente de projeto assegura que isto aconteça, e este mantém um registro das responsabilidades atribuídas e desempenhadas dentro da equipe 
de desenvolvimento, garantindo a colaboração entre todos os membros do time. </p>

<p>Todos os membros são responsáveis pelas atividades de levantamento e especificação de requisitos, projeto, modelagem e definição de tecnologias. 
Todos decidm juntos, também, o planejamento de iterações e entregas. O objetivo é que todos os membros do time possam contribuir durante todo o 
desenvolvimento do projeto, adquirindo conhecimento sobre todas as atividades do processo.</p>

<center>
	<?= $this->Html->image('papeisAP.png'); ?>
</center>

<p><h3>Cliente</h3> </p>

<p>Responsável por definir o escopo e os requisitos do sistema. O cliente é considerado parte do time, auxiliando a equipe durante o desenvolvimento do sistema, respondendo questões acerca do negócio que o sistema deve atender.</p>

<p><h3>Equipe de Desenvolvimento</h3></p>

<b><p>Desenvolvedor </b> </p>
<p>Responsável por analisar, projetar, codificar e testar o software, bem como manter uma boa comunicação com o restante da equipe.</p>

<p><b>Analista </b></p>
<p>Responsável por representar as necessidades do cliente, levantando informações quanto ao negócio e traduzindo-as para atividades de desenvolvimento. É quem levanta, especifica e modela os requisitos do sistema.</p>

<p><b>Líder de Projeto</b></p> 
<p>Responsável por liderar o planejamento do projeto, e assegurar que todos estejam focados em atingir os objetivos estabelecidos, além de garantir a boa comunicação entre todos os membros da equipe. Também fornece feedback quanto a estimativas e ter uma visão global do andamento do projeto, determinando se ele está conforme o cronograma. E, finalmente, é responsável por garantir que todos os membros da equipe participem durante todo o projeto, desempenhando todas os papéis propostos na metodologia.</p>

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

