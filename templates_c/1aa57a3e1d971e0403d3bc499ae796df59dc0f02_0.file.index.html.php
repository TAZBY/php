<?php
/* Smarty version 3.1.30, created on 2018-03-01 14:06:10
  from "C:\xampp\htdocs\mesprojets\Barry Thierno Aliou Zainoul SEN_FORAGE\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a97fac28d6640_69410966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa57a3e1d971e0403d3bc499ae796df59dc0f02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\Barry Thierno Aliou Zainoul SEN_FORAGE\\view\\accueil\\index.html',
      1 => 1519909567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a97fac28d6640_69410966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/sty.css">
</head>
<body>
<div class="container">
    <div class="profile">
        <button class="profile__avatar" id="toggleProfile">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/log.jpg" alt="Avatar" />
        </button>
        <div class="profile__form">
            <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Connexion/conn" method="POST">
                <div class="profile__fields">
                    <div class="field">
                        <input type="text" id="fieldUser" class="input" name="mail" required pattern=.*\S.* />
                        <label for="fieldUser" class="label">Nom d'Utilisateur</label>
                    </div>
                    <div class="field">
                        <input type="password" id="fieldPassword" class="input" name="mdp" required pattern=.*\S.* />
                        <label for="fieldPassword" class="label">Mot de passe</label>
                    </div>

                    <div class="profile_footer">
                        <button type="submit" class="button raised blue" name="conn">Se connecter</button>
                    </div>
                    <!-- <div class="profile__footer">
                      <div class="button raised blue">
                       <button type="submit" class="center" value="login" fit>LOGIN</button>
                       <paper-ripple fit></paper-ripple>
                     </div>
                   </div> -->
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
