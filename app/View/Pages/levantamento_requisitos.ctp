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
Primeiramente, a equipe levanta e especifica todos os requisitos, tanto funcionais 
como não funcionais, além das regras de negócio do projeto. 
Conforme o andamento do desenvolvimento, na medida em que o cliente e a equipe otimizam sua percepção quanto ao projeto, requisitos podem ser adicionados, 
modificados e excluídos, considerando o seu impacto com relação ao aprendizado do aluno.
</p>

<p>
Após, a equipe de desenvolvimento elabora o documento de visão, contendo todos os requisitos funcionais e não funcionais do sistema, 
além das regras de negócio do projeto identificadas até então. Caso necessário, incentiva-se que o professor esteja sempre a disposição 
para sanar dúvidas da equipe quanto as necessidades que o sistema deverá atender. Propõe-se que o documento de visão seja analisado e 
validado pelo cliente, podendo ele adicionar, modificar e excluir requisitos, desde que comunicada a equipe.
</p>

<p>
É proposto que todo o processo seja guiado por casos de uso. Assim, a equipe traduz os requisitos identificados em casos de uso, especificando
suas descrições, atores, precondições, fluxo básico, fluxos alternativos, relacionamentos e pós condições.
</p>

<p>
Após, a equipe de desenvolvimento precisa focar seus esforços na criação do backlog do projeto, contendo todos os requisitos identificados e
 especificados no documento de visão, similar ao product backlog, proposto pelo método Scrum. Esta lista deverá facilitar a visualização e o 
 entendimento dos requisitos, além de sua priorização e estimativas de tempo de desenvolvimento, levando em conta o nível de dificuldade de 
 implementação e importância em relação ao escopo do projeto.
</p>

<p>
No backlog do projeto, os requisitos devem conter, além de sua especificação, uma estimativa de tempo para sua implementação e um atributo de 
estado, podendo este ser: estimado, planejado, em desenvolvimento ou concluído. Eles também são priorizados de acordo com sua dificuldade de implementação 
e/ou importância com relação ao escopo do projeto, levando em conta o que mais impacta para o aprendizado do aluno.
</p>

<p>
O backlog do projeto contem todos os requisitos identificados e entendidos até o momento, podendo ser atualizado com o andamento do projeto.
</p>

<p>
Propõe-se que todos, independente de seus papéis, sejam responsáveis pelo levantamento e especificação dos requisitos, 
pela elaboração dos casos de uso e do documento de visão, além da definição e manutenção do backlog do projeto. É importante que todos os 
membros da equipe, incluindo o professor, compartilhem um entendimento comum e claro sobre o que deve ser desenvolvido.
</p>

<p>
As atividades da etapa de levantamento e especificação de requisitos são:
</p>

<p><b>Definição do documento de visão do projeto</b></p>

<p>
Documento de visão é criado, contendo os requisitos funcionais e não funcionais, além das regras de negócio.
</p>

<p><b>Desenvolvimento dos casos de uso</b></p>

<p>
Os casos de uso são especificados, contendo suas descrições, atores, precondições, fluxo básico, fluxos alternativos, relacionamentos e pós condições.
</p>

<p><b>Validação do documento de visão do projeto</b></p>

<p>
O documento de visão do projeto é revisado e aprovado pelo cliente, podendo ele requisitar a adição, remoção e modificação de requisitos.
</p>

<p><b>Validação dos documentos de caso de uso</b></p>

<p>
Os casos de uso definidos também são revisados e aprovados pelo cliente, devendo ele avaliar suas especificações e a interação entre o sistema e seus atores.
</p>

<p><b>Definição do backlog do projeto</b></p>

<p>
O backlog do projeto é criado, contendo os requisitos e suas estimativas de tempo para a implementação dos casos de uso, bem como suas prioridades.
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
