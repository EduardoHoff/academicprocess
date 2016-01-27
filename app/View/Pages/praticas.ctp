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
	<?= $this->Html->image('praticasAP.png'); ?>
</center></br>

<p>Enquanto os princípios são importantes para guiar os esforços da equipe de desenvolvimento durante suas atividades, as práticas devem ser consideradas 
o coração da metodologia, e são elas que realmente são aplicadas no desenvolvimento do projeto. </p>
<p>As práticas são definidas com base nas práticas propostas pelas metodologias ágeis Extreme Programming (XP), Scrum, Feature Driven Development (FDD), Agile Unified Process (AUP), 
OpenUP e easYProcess (YP), considerando as características peculiares identificadas no meio acadêmico, com base no curso superior de Tecnologia em 
Análise e Desenvolvimento de Sistemas do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul, campus Bento Gonçalves.</p>

<p>As práticas são:</p>

<p><b>Desenvolvimento iterativo</b></p>

<p>
O projeto é divido em curtas iterações, de duas a três semanas, possibilitando a revisão da equipe e do professor quanto ao andamento do projeto e os objetivos definidos para a próxima entrega.
</p>

<p><b>Entregas frequentes</b></p>

<p>
O desenvolvimento acontece de forma incremental, e novas releases do projeto são entregues em ciclos curtos, de quatro a seis semanas, possibilitando a avaliação contínua do professor quanto ao desenvolvimento do projeto, resultando no rápido feedback para o aluno.
</p>

<p><b>Professor presente</b></p>

<p>
O professor está sempre disponível para esclarecimento de dúvidas da equipe quanto ao negócio do projeto em horário de aula.
</p>

<p><b>Priorização de requisitos</b></p>

<p>
A implementação dos requisitos é priorizada de acordo a sua importância com relação ao aprendizado do aluno.
</p>

<p><b>Rotatividade de papéis</b></p>

<p>
Os membros da equipe desempenham todos os papéis, visando o aprendizado do aluno com relação a todas as etapas do desenvolvimento de software.
</p>

<p><b>Visão compartilhada</b></p>

<p>
Todos os envolvidos compartilham de um entendimento comum sobre o projeto em desenvolvimento, evitando a possibilidade de riscos com relação a aceitação do projeto.
</p>

<p><b>Desenvolvimento dirigido por casos de uso</b></p>

<p>
Os esforços do desenvolvimento são guiados pela definição de casos de uso, expressando o comportamento esperado pelo sistema, e a interação com seus atores.
</p>

<p><b>Modelagem olhando para frente</b></p>

<p>
Requisitos complexos, com um alto nível de prioridade, são modelados logo no início do projeto,  visando reduzir o risco geral dos esforços da equipe de desenvolvimento.
</p>

<p><b>Projeto com um objetivo</b></p>

<p>
Identificar um objetivo válido para a criação de um artefato, além de quem o utilizará, ajuda no reconhecimento de qual notação deve ser utilizada e qual é o nível de detalhamento necessário. Se tal tarefa se mostrar difícil, pode ser preciso um maior entendimento sobre o sistema.
</p>

<p><b>Modelagem dos objetos de domínio</b></p>

<p>
Utilização de diagramas UML de classe, para descrever os objetos relacionados com a solução do problema e seus relacionamentos, de sequência, para destacar a interação dos objetos e suas responsabilidades, e de casos de uso, para demonstrar a comunicação entre o sistema e seus atores.
</p>

<p><b>Iterar para outro artefato</b></p>

<p>
Quando dificuldades em desenvolver algum artefato surgir, uma mudança de foco pode ser a melhor solução, possibilitando um diferente ponto de vista, enquanto mantendo o progresso do desenvolvimento.
</p>

<p><b>Controle de versões e integração contínua</b></p>

<p>
 O desenvolvimento de software conta com um controle de versionamento em repositório de código, com o objetivo de gerenciar as alterações realizadas no projeto, e novas versões são integradas o mais frequentemente possível, assegurando que o sistema esteja sempre atualizado, possibilitando, também, que erros de integração sejam identificados prematuramente.
</p>

<p><b>Propriedade coletiva</b></p>

<p>
Todos os membros da equipe são livres para modificar qualquer artefato gerado durante o desenvolvimento, incluindo código, independentemente de quem o tenha desenvolvido, a qualquer momento, se identificado necessário, e desde que comunicado e de acordo com o restante da equipe.
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

