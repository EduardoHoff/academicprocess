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

<center>
	<?= $this->Html->image('principios.png'); ?>
</center></br>

<p>A aplicação da metodologia é guiada por cinco princípios básicos, que definem a base para a interpretação de 
suas atividades, práticas e papéis, e são definidos a partir dos princípios e valores propostos pelo Manifesto Ágil e pelas metodologias ágeis 
Extreme Programming (XP), Scrum, Feature Driven Development (FDD), Agile Unified Process (AUP), 
OpenUP e easYProcess (YP), considerando as características peculiares identificadas no meio acadêmico, com base no curso superior de Tecnologia em 
Análise e Desenvolvimento de Sistemas do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul, campus Bento Gonçalves.</p>

<p>Os princípios são:</p>

<p><b>O aprendizado é a medida primária de sucesso</b> </p>

<p>O foco principal dos projetos práticos de software desenvolvidos em meio acadêmico é o 
aprendizado do aluno, sendo esta a prioridade da metodologia. Enquanto qualidade é importante, de nada ela adianta se o aluno não obter o 
conhecimento para repeti-la.</p>

<b><p>Feedback rápido e frequente </b> </p>
<p>A contínua avaliação e realimentação por parte do professor é essencial para o aprendizado do aluno, e para o andamento dos projetos práticos de software,
considerando o curto tempo disponível para o seu desenvolvimento.</p>

<p><b>Comunicação aberta </b></p>
<p>Todos os membros da equipe, incluindo o professor, precisam manter uma clara e frequente comunicação durante todo o projeto, se sentindo livres para 
oferecer suas sugestões, e serem respeitados por isso.</p>

<p><b>Colaboração</b></p> 
<p>Todo o desenvolvimento é um processo colaborativo entre alunos e o professor, promovendo o entendimento comum do projeto e a motivação de todos 
os envolvidos.</p>

<p><b>Independência de tecnologia e ferramentas</b></p> 
<p>A metodologia pode ser utilizada com qualquer tecnologia ou ferramenta, fornecendo apenas um conjunto de práticas de apoio ao desenvolvimento 
de projetos acadêmicos de software.</p>



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

