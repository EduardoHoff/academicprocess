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
Ao final do ciclo de release, a equipe deve estar pronta para entregar um incremento significativo do sistema, sendo toda a documentação resultante do levantamento e especificação de requisitos e casos de uso, além da modelagem, no caso da inicialização do projeto, ou incrementos funcionais de software, durante a fase de desenvolvimento do sistema.
</p>

<p>
Propõe-se que a entrega de releases seja a principal forma de avaliação do projeto. A forma de entrega é escolhida pelo professor, podendo ser uma apresentação para todos os alunos, para que todos possam visualizar o andamento dos outros projetos, ou apenas a demonstração para o professor, possibilitando que outras equipes continuem trabalhando durante a avaliação, visando o melhor aproveitamento do tempo.

</p>

<p>
Após a entrega, a equipe avalia se os objetivos foram alcançados e reflete sobre o desenvolvimento durante o ciclo de release, resultando em duas atividades diferentes: revisão e retrospectiva do ciclo.

</p>

<p>
Durante a revisão do ciclo de release, a equipe de desenvolvimento procura focar-se em inspecionar o incremento entregue e, se necessário, atualizar o backlog do projeto. Todos colaboraram e compartilham a sua opinião sobre o desenvolvimento durante o ciclo. Se itens do backlog de release planejados para serem entregues não foram concluídos, ou foram apenas parcialmente, os mesmos devem voltar para o backlog do projeto, devendo ser implementados futuramente.
</p>

<p>
Durante a retrospectiva do ciclo de release, a equipe discute o que foi bem, o que resultou em problemas, e como estes problemas foram resolvidos. Todos os membros da equipe de desenvolvimento participam, relatando as lições aprendidas durante o ciclo, contextualizando-as com relação ao problema e sua resolução.
</p>

<p>
As duas reuniões são informais, podendo ser unificadas em apenas uma discussão. Seu principal objetivo é promover a colaboração, comunicação e a motivação da equipe de desenvolvimento.
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
