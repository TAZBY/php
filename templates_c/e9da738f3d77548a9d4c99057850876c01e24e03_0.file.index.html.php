<?php
/* Smarty version 3.1.30, created on 2018-02-27 17:18:50
  from "C:\xampp\htdocs\mesprojets\MVC_BY_NGOR_SECK_modifier_par_Fatah\view\accueil\accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9584eaced849_59370765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9da738f3d77548a9d4c99057850876c01e24e03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\MVC_BY_NGOR_SECK_modifier_par_Fatah\\view\\accueil\\accueil.html',
      1 => 1518170440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9584eaced849_59370765 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>page d'accueil</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			 function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			 }

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu page test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu page test 2</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu page test liste</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div id="design_js">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.0.1</h1></div>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
