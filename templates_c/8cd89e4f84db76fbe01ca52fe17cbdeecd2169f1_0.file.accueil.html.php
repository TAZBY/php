<?php
/* Smarty version 3.1.30, created on 2018-03-01 13:24:49
  from "C:\xampp\htdocs\mesprojets\Barry Thierno Aliou Zainoul SEN_FORAGE\view\accueil\accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a97f1112a5dd0_61041156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd89e4f84db76fbe01ca52fe17cbdeecd2169f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\Barry Thierno Aliou Zainoul SEN_FORAGE\\view\\accueil\\accueil.html',
      1 => 1519907085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a97f1112a5dd0_61041156 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>page d'accueil</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap-cerulean.min.css"/>
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
    <style>
        .tabul{
            text-indent:700px;
        }
        .footer {
            margin-top: auto;
            left: 0;
            bottom: 0;
            width: 100%;
            height:60px;
            background-color:#011d37;
            color: white;
            text-align:center;

        }
        a{
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 18px;


        }
    </style>
	<body onload="load_design()">
		<div class="nav navbar-inverse">
            <div class="container-fluid">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
accueil/accueil"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.png" width="50" height="40"></a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
client/liste">Clients</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Abonnements</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Facturation</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Reglement de Factures</a></li>
                <li class="tabul"><a href="#">Deconnexion <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logout.jpg" width="40" height="40"></a></li>

            </ul>
                </div>
		</div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/eaupotable.png" width="100%"/>
		<!--<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div id="design_js">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.0.1</h1></div>
				</div>
			</div>
		</div>-->
        <div class="footer">
            <br/>
            <p>@2018 copyright all rights reserved Sen Forage</p>
            <br/>
            </div>
	</body>
</html><?php }
}
