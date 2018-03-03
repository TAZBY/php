<?php
/* Smarty version 3.1.30, created on 2018-03-02 20:46:14
  from "C:\xampp\htdocs\mesprojets\Barry Thierno Aliou Zainoul SEN_FORAGE\view\client\client.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a99aa06ebed29_76786534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74adae7da6383c66ed5b609a47c26c9b7a4f9d51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\Barry Thierno Aliou Zainoul SEN_FORAGE\\view\\client\\client.html',
      1 => 1520019966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a99aa06ebed29_76786534 (Smarty_Internal_Template $_smarty_tpl) {
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
        margin-top: 20px;
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
<?php echo '<script'; ?>
 language="JavaScript">
    function verif(){
        return confirm("Voulez vous reelement supprimer ce Client?");

    }
<?php echo '</script'; ?>
>
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
            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
            <div class="panel-body" style="color: green; background-color: #afd9ee">
            Client ajouté avec succes!
            </div>
            <?php } else { ?>
            Erreur d'insertion!
            <?php }?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add">
                <div class="form-group col-md-6">
                    <label class="control-label">Nom Du Client</label>
                    <input class="form-control" type="text" name="nc" id="nc"/>

                    <label class="control-label">Prenom Client</label>
                    <input class="form-control" type="text" name="pc" id="pc"/>
                </div>
                <div class="form-group col-md-6 ">
                    <label class="control-label">Telephone</label>
                    <input class="form-control" type="text" name="tel" id="tel"/>
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
                <div class="form-group col-md-12">
                    <label class="control-label">Adresse</label>
                    <input class="form-control" type="text" name="adresse" id="adresse"/>

                </div>
                <div class="form-group col-md-12">
                    <input class="btn btn-success" type="submit" name="valider" value="Valider"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:50px; ">
    <div class="panel panel-info">
        <div class="panel-heading">Gestion Des Clients</div>
        <?php if (isset($_smarty_tpl->tpl_vars['okk']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['okk']->value != 0) {?>
        <div class="panel-body" style="color: green; background-color:#afd9ee">
            Client Modifié avec succes!
        </div>
        <?php } else { ?>
        <div class="panel-body" style="color: green; background-color:#afd9ee; ">
            Aucun changement
        </div>
        <?php }?>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['okkk']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['okkk']->value != 0) {?>
        <div class="panel-body" style="color: green; background-color:#afd9ee">
            Client Supperimé avec succes!
        </div>
        <?php } else { ?>
        <div class="panel-body" style="color: green; background-color:#afd9ee; ">
            Aucune suppression Effectuée
        </div>
        <?php }?>
        <?php }?>
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['tests']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['tests']->value != null) {?>
            <table class="table table-bordered table-stripped" style="background-color: #a6e1ec; font-family: sans-serif; font-size: 14px ">
                <tr>

                    <th>id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Village</th>
                    <th>Nom et Prenom chef du village</th>
                    <th>Editer</th>
                    <th>Supprimer</th>


                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['nom_client'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['prenom_client'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['adresse'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['num_telephone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['nom_village'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['np'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/edit&id=<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/icon/modifier.png"></a> </td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/delete&id=<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
"onclick='verif()'><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/icon/supprimer.png"></a> </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <?php } else { ?>
            Liste vide
            <?php }?>
            <?php }?>
            </table>
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
