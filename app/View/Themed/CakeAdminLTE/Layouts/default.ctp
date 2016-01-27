<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'AcademicProcess');

if ($title_for_layout == "Home"){ 
	$title_for_layout = "Introdução";
}
if ($title_for_layout == "Principios"){ 
	$title_for_layout = "Princípios";
}
if ($title_for_layout == "Praticas"){ 
	$title_for_layout = "Práticas";
}
if ($title_for_layout == "Papeis"){ 
	$title_for_layout = "Papéis";
}
if ($title_for_layout == "Definicao Escopo"){ 
	$title_for_layout = "Definição do Escopo";
}
if ($title_for_layout == "Tecnologias Ferramentas"){ 
	$title_for_layout = "Definição de Tecnologias e Ferramentas";
}
if ($title_for_layout == "Levantamento Requisitos"){ 
	$title_for_layout = "Levantamento e Especificação de Requisitos";
}
if ($title_for_layout == "Processo Academico"){ 
	$title_for_layout = "Processo Acadêmico";
}
if ($title_for_layout == "contact form"){ 
	$title_for_layout = "Feedback";
}
if ($title_for_layout == "Inicializacao"){ 
	$title_for_layout = "Inicialização do Projeto";
}
if ($title_for_layout == "Desenvolvimento"){ 
	$title_for_layout = "Desenvolvimento do Projeto";
}

if ($title_for_layout == "Planejamento Release"){ 
	$title_for_layout = "Planejamento de Release";
}
if ($title_for_layout == "Planejamento Iteracao"){ 
	$title_for_layout = "Planejamento de Iteração";
}
if ($title_for_layout == "Encerramento Iteracao"){ 
	$title_for_layout = "Encerramento da Iteração";
}
if ($title_for_layout == "Encerramento Release"){ 
	$title_for_layout = "Encerramento da Release";
}
if ($title_for_layout == "Implementacao"){ 
	$title_for_layout = "Implementação";
}		

?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>

		<title>
			<?php echo $cakeDescription ?>
			<?php //echo $title_for_layout; ?>
		</title>
		<?php 
			echo $this->Html->meta('icon');
			echo $this->Html->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no']);
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min.css');
			echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css');
			echo $this->Html->css('ionicons.min.css');
			echo $this->Html->css('//fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic');
			echo $this->Html->css('CakeAdminLTE');
			echo $this->fetch('css');
			//echo $this->Html->script('libs/jquery-1.10.2.min');
			//echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
	</head>

	<body class="skin-blue fixed">

		<?php echo $this->element('menu/top_menu'); ?>
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<?php echo $this->element('menu/left_sidebar'); ?>
		
			<!-- Right side column. Contains the navbar and content of the page -->
		    <aside class="right-side">  
		    	<section class="content-header">
				    <h2>
				        <?php echo $title_for_layout; ?>
				    </h2>
				    <ol class="breadcrumb">
				        <li><a href=""><i class="fa fa-home"></i> <?php echo $this->Html->getCrumbs(' > ','AcademicProcess');?> </a></li>
				        <li class="active"><?php echo $title_for_layout; ?></li>
						
				    </ol>
				</section> 
				<section class="content"> 
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
				</section>
			</aside><!-- /.right-side -->
			
			
		</div><!-- ./wrapper -->
			
		
		
		<?php
			echo $this->Html->script('jquery.min');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('CakeAdminLTE/app');
			echo $this->fetch('script');
		?>
		
	</body>

</html>