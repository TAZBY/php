<?php
/* Smarty version 3.1.30, created on 2018-03-01 21:41:18
  from "C:\xampp\htdocs\mesprojets\Barry Thierno Aliou Zainoul SEN_FORAGE\view\client\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98656e144806_42124540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b16ab0e71cd979d81f35dcc509da01629bf37dcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\Barry Thierno Aliou Zainoul SEN_FORAGE\\view\\client\\edit.html',
      1 => 1519936871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98656e144806_42124540 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>

    <meta charset="UTF-8">
    <title>page liste</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap-cerulean.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <style>
        h1{
            color: #40007d;
        }
    </style>
</head>
<style>
    .tabul{
        text-indent:700px;
    }
    .footer {
        margin-top: 100px;
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
    ;

    }
</style>
<body>

<div class="nav navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
accueil/accueil"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.png" width="50" height="40"></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Clients</a></li>
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
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:50px;">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire D'ajout Des Nouveaux Clients</div>
        <div class="panel-body">

            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/update">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modif']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                <div class="form-group ">
                    <label class="control-label">Nom Du Client</label>
                    <input class="form-control" type="HIDDEN" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
"/>
                    <input class="form-control" type="text" name="nc" id="nc" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['nom_client'];?>
"/>
</div>
                <div class="form-group ">
                    <label class="control-label">Prenom Client</label>
                    <input class="form-control" type="text" name="pc" id="pc" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['prenom_client'];?>
"/>
                </div>
                <div class="form-group ">
                    <label class="control-label">Telephone</label>
                    <input class="form-control" type="text" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['num_telephone'];?>
"/>
                    </div>
                <div class="form-group ">
                    <label class="control-label">Village</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="idvillage">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['village']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value=".<?php echo $_smarty_tpl->tpl_vars['v']->value['id_village'];?>
."><?php echo $_smarty_tpl->tpl_vars['v']->value['nom_village'];?>
</option>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input class="form-control" type="text" name="adresse" id="adresse" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['adresse'];?>
"/>

                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="modifier" value="Valider"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </form>

        </div>
    </div>
</div>

<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/eaupotable.png" width="100%" height="0px;"/>
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
</html>
<?php }
}
