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
Após a validação, por parte do professor, dos requisitos e casos de uso levantados e especificados, a equipe pode partir para a modelagem do sistema, 
antes de iniciar a implementação.
</p>

<p>
Em se tratando de meio acadêmico, a modelagem precisa ser bem elaborada já inicialmente, com o objetivo de facilitar a visão geral do sistema, já que os alunos ainda não possuem a maturidade para visualizar todo o processo.
</p>

<p>
Considerando a necessidade de avaliações de desempenho presente no meio acadêmico, a modelagem precisa ser documentada, entregue e avaliada pelo professor, assegurando que a mesma foi desenvolvida da forma correta, validando o aprendizado do aluno. A entrega dos modelos também possibilita ao aluno receber feedback quanto ao andamento do projeto, permitindo a correção de falhas antes da implementação.
</p>

<p>
Cabe ao professor a escolha de quais diagramas são necessários para atender as necessidades do projeto e dos alunos, além das características da disciplina. É incentivada a utilização dos diagramas UML de classe, modelando os objetos relevantes para a solução do problema e seus relacionamentos, e de sequência, mostrando a interação entre os objetos no cumprimento de suas responsabilidades, além do diagrama de casos de uso, destacando a interação do usuário com o sistema, sendo esta documentada juntamente com a especificação dos casos de uso. Entretanto, pode se fazer necessária a utilização de outros diagramas para solidificar a modelagem antes da implementação. Cabe ao professor também decidir como os modelos são desenvolvidos.

</p>

<p>
Após seu desenvolvimento, incentiva-se que a modelagem seja analisada e validada pelo professor, podendo ele requisitar a adição, exclusão ou modificação de artefatos, desde que justificado com a equipe de desenvolvimento.

</p>

<p>
É importante que todos comuniquem, discutam e concordem sobre o desenvolvimento dos modelos. Além disso, todos os modelos devem estar acessíveis a todos os membros da equipe, incluindo o cliente, permitindo uma comunicação aberta e honesta, além do feedback.

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
