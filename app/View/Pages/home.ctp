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

<p><h4><b>O que é o AcademicProcess?</b></h4></p></br>

<center>
	<?= $this->Html->image('apLogo.png'); ?>
</center> </br>

<p>Em se tratando de análise e desenvolvimento de sistemas, o meio acadêmico se mostra o ambiente ideal para unir a teoria com a prática, por meio da abordagem de conceitos e sua aplicação em projetos experimentais, com o objetivo de preparar o aluno para o mercado de trabalho. Entretanto, identifica-se uma dificuldade de adaptação entre projetos práticos propostos em ambientes acadêmicos e metodologias de desenvolvimento de software disponíveis no mercado. Projetos desenvolvidos na academia tendem a ter um menor escopo, devido a curta duração de um semestre, além de serem avaliados de uma forma foma diferente, e ter suas tecnologias definidas de acordo com a grade do curso. Ainda, o processo deve se preocupar com o aprendizado dos alunos, sendo de fácil entendimento e simples de implantar, mas completo o bastante para gerar um produto de software de qualidade. </p>


<p>Neste contexto, entende-se que a utilização de um processo, especificamente elaborado para atender as características e necessidades encontradas na academia, pode possibilitar um melhor aproveitamento dos conteúdos abordados e aplicados em disciplinas práticas, contribuindo, assim, com o aprendizado do aluno e sua preparação para o meio profissional.</p>

<p>O Academic Process é uma metodologia de desenvolvimento ágil de software, definida a partir da relação entre práticas propostas pelas métodos ágeis Extreme Programming (XP), Scrum, Feature Driven Development (FDD), Unified Agile Process (AUP), Open Unified Process (OpenUP) e easYProcess (YP) e características identificadas no meio acadêmico, por meio da análise do projeto pedagógico do curso superior de Tecnologia em Análise e Desenvolvimento de Sistemas, do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul, campus Bento Gonçalves e dos planos de ensino de suas disciplinas de formação específica, e de estudo de campo com seus professores e alunos. </p>

<p>O principal objetivo da metodologia é auxiliar na formação acadêmica do aluno, promovendo um melhor aproveitamento de disciplinas que envolvem projetos de desenvolvimento de software. 
O método incentiva um desenvolvimento incremental de software, visando o maior aproveitamento do tempo limitado de um projeto acadêmico e o aprendizado de todos os envolvidos durante todo o processo.
</p>

<p>A escolha por uma metodologia ágil deve-se pela proximidade de suas características com as encontradas no meio acadêmico.
Métodos ágeis são aplicados em projetos não muito complexos, utilizando ciclos iterativos curtos e planejamento guiado por funcionalidades e com tolerância a mudanças, possibilitando um rápido e contínuo aprendizado. 
Também identifica-se o constante crescimento na incorporação de metodologias ágeis em matrizes curriculares acadêmicas.
</p>
</br>
<center>
	<?= $this->Html->image('arcabouco.png'); ?>
	<p><b>Arcabouço do AcademicProcess</b></p>
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
