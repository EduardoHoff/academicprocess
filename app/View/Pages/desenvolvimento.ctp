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
Após a fase de inicialização do projeto, com os requisitos, os casos de uso e a modelagem do sistema definida e validada pelo professor, o software pode começar a ser implementado. Propõe-se que o desenvolvimento ocorra de forma incremental e iterativa, sendo constituído de ciclos de release, que resultam em pequenas e contínuas entregas de incrementos, e são divididos em curtas iterações, promovendo a avaliação do andamento do desenvolvimento.
</p>

<p>
O Manifesto Ágil propõe entregas rápidas e frequentes de software, em curtos intervalos de tempo, preferencialmente contados em poucas semanas. Entregas frequentes permitem o rápido feedback sobre o andamento do projeto e o atendimento dos requisitos esperados pelo sistema. Em se tratando de meio acadêmico, a avaliação frequente do progresso do desenvolvimento permite o aprendizado constante do aluno.
</p>

<p>
Propõe-se, então, entregas, chamadas de releases, a cada quatro semanas. Para a primeira, sendo esta reservada para a etapa de inicialização do projeto, poderá ser atribuído um tempo maior, de até seis semanas, devido ao investimento de tempo para a definição do escopo do sistema, das tecnologias e ferramentas utilizadas durante o desenvolvimento, além do levantamento e especificação dos requisitos definidos pelo cliente e da modelagem do sistema, resultando em um maior tempo para a entrega de um incremento significativo.
</p>

<p>
Visando a avaliação frequente do andamento do projeto e o rápido retorno à equipe de desenvolvimento, propõe-se que os ciclos de release sejam divididos em curtas iterações de duas semanas, resultando em duas iterações para um ciclo de release normal de quatro semanas, ou três iterações para a inicialização do projeto.
</p>

<p>
Durante o desenvolvimento do projeto, em cada um dos ciclos que resultam em uma entrega, a equipe concentra seus esforços no planejamento, por meio da definição do backlog de release. Após, a equipe planeja a próxima iteração de duas semanas, antes de iniciar a implementação e testes dos casos de uso. Ao final de cada iteração, ela é avaliada pelo professor, e revisada pela equipe de desenvolvimento. Durante o encerramento do ciclo de release, além da entrega e sua avaliação, a equipe precisa também realizar duas atividades, chamadas de revisão e retrospectiva da release.
</p>

<p>
Enfatiza-se que o número de entregas e de iterações, bem como suas durações e artefatos gerados, pode ser modificado para melhor se adequar aos objetivos e/ou necessidades da disciplina em questão, ou por preferência do professor, considerando fatores como conteúdos ministrados, maturidade dos alunos e formas de avaliação da disciplina. Porém, sugere-se que, dentro do possível, as entregas sejam frequentes, para permitir a avaliação contínua do projeto, resultando no feedback rápido e constante para o aluno.
</p>

<p>
As tarefas relacionadas ao planejamento e encerramento da iteração e do ciclo de release são:
</p>

<p><b>Planejamento de release</b></p>

<p>
Antes de cada iteração que segue uma entrega, a equipe planeja o que deve ser entregue na próxima release. A equipe define uma meta, que representa os resultados que o desenvolvimento deverá atingir ao final do ciclo.
</p>

<p><b>Definição do backlog de release</b></p>

<p>
Durante o planejamento de release, a equipe define o backlog de release, selecionando itens do backlog do projeto para serem implementados nas próximas iterações até a entrega. 
</p>

<p><b>Planejamento de iteração</b></p>

<p>
Além de planejar o que deve ser entregue na próxima release, a equipe também planeja o que deve ser feito na próxima iteração para atingir a meta definida para a release, visando definir quais itens do backlog de release serão implementados durante a iteração atual.
</p>

<p><b>Encerramento da iteração</b></p>

<p>
Após cada iteração, o andamento do projeto é revisado pelo professor, visando rápido feedback aos alunos. A equipe analisa se os objetivos definidos durante o planejamento da mesma foram atendidos, e se a equipe está no caminho certo com relação a meta definida durante o planejamento de release.
</p>

<p><b>Encerramento da release</b></p>

<p>
Após cada entrega, o andamento do projeto é avaliado pelo professor, fornecendo feedback sobre o projeto e a avaliação da disciplina. A equipe analisa se os objetivos definidos durante o planejamento da release foram atendidos, e se a equipe está no caminho certo com relação a meta do projeto. Se itens do backlog de release não foram implementados, eles devem voltar para o backlog do projeto, para serem implementados futuramente.
</p>

<center>
	<?= $this->Html->image('desenvolvimento.png'); ?>
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
