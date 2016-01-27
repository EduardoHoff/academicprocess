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
Durante as iterações, a equipe foca-se na implementação do sistema, desenvolvendo os itens presentes no backlog de release.
</p>

<p>
Práticas de refatoração e padrões de codificação são incentivadas, considerando a importância de seu aprendizado por parte dos alunos, porém dependerá do professor considerar se as suas utilizações farão parte da avaliação. Como projetos acadêmicos costumam não ser continuados, e também levando em conta o curto espaço de tempo para o desenvolvimento dos projetos, entende-se que práticas relacionadas à manutenção podem não ser consideradas necessárias. 
</p>

<p>
Com relação à propriedade do código, incentiva-se que ela seja coletiva, possibilitando que todos possam contribuir e melhorar a codificação, se identificado como necessário, desde que comunicado a todos os membros da equipe.
</p>

<p>
Finalmente, é incentivado o controle de versionamento de software durante o projeto, utilizando um repositório de código. Além do controle de versionamento, também se incentiva construções regulares e integração contínua do código, acontecendo o mais rápido possível. Propõe-se que todo novo código desenvolvido seja integrado com o sistema executável, disponível em repositório de código, possibilitando o gerenciamento do projeto e a identificação prematura de erros de integração.

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
