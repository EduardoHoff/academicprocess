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
A estrutura da metodologia proposta leva em conta as características peculiares de projetos desenvolvidos em meio acadêmico, e segue os valores 
propostos pelo Manifesto Ágil, promovendo e valorizando software em funcionamento, colaboração e interação entre todos os envolvidos, aceitação a mudanças 
e, principalmente, o aprendizado do aluno, por meio da maximização do aproveitamento de seus esforços e do tempo disponível, no desenvolvimento de 
projetos acadêmicos de software.
</p>

<p>O método incentiva um desenvolvimento incremental de software, visando o maior aproveitamento do tempo limitado de 
um projeto acadêmico e o aprendizado de todos os envolvidos.
</p>

<p>Em se tratando de uma metodologia proposta para o meio acadêmico, o desenvolvimento incremental permite a maximização do tempo limitado de 
apenas um semestre, ou ainda menos, para o desenvolvimento de um projeto prático. O rápido feedback permite a avaliação constante por parte do 
professor, promovendo a comunicação e o aprendizado do aluno e, assim, evita que, ao final do prazo de entrega, o sistema apresente um comportamento 
diferente do que foi proposto inicialmente, resultando em uma avaliação negativa por parte do docente.
</p>

<p>
Cada uma das atividades foi definida conforme o que é proposto pelo projeto pedagógico do 
curso superior de Tecnologia em 
Análise e Desenvolvimento de Sistemas do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul, campus Bento Gonçalves, com base na análise dos planos de ensino das 
disciplinas e de estudo de campo com seus professores e alunos, e pelas metodologias ágeis Extreme Programming (XP), Scrum, Feature Driven Development (FDD), Agile Unified Process (AUP), 
OpenUP e easYProcess (YP), 
com o objetivo de identificar quais práticas mais se adéquam aos projetos de desenvolvimento de software propostos em ambientes acadêmicos.
</p>

<p>
Após a sua proposta, o projeto entra na fase de <a href="inicializacao"></i> inicialização</a>. Nela, é definido o escopo, levantados e especificados os requisitos, além 
da modelagem. Após, o projeto entra em <a href="desenvolvimento"></i> desenvolvimento</a>, onde o sistema é implementado em ciclos de release, sendo um processo repetitivo. 
Finalmente, o projeto é <a href="encerramento"></i> encerrado</a> e avaliado durante sua entrega final.
</p>

<?= $this->Html->image('AcademicProcessFull.png'); ?>

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
