<?php
/* Smarty version 3.1.39, created on 2021-09-15 22:20:33
  from 'C:\xampp\htdocs\Cl-nicaLaMitologica\templates\usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61425591f05fc3_83744322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc4946afb542068b26dbf428631fc99a53d8805' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cl-nicaLaMitologica\\templates\\usuario.tpl',
      1 => 1631555454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61425591f05fc3_83744322 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio sesion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/admin.js"><?php echo '</script'; ?>
>
  <body bgcolor="#b2ebf2">
<font face="Georgia">
<nav>
        
    <div class="nav-wrapper  deep-purple lighten-3">
          <a href="#" class="brand-logo">Bienvenido</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.html">Salir</a></li>
          <li><a href="trabajador.html">Inicio</a></li>
          </ul>
    </div>
     </nav>
    <div class="container section" align ="left">
 
      <a href="#" class="sidenav-trigger" data-target="menu"><i class="material-icons">menu_open</i></a>
 
      <ul class="sidenav" id="menu">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="img/lamito.png" alt="" width="100%">
            </div>
            <a href="#"><img src="img/user1.png" alt="" class="circle"></a>
            <a href="#"><span class="name white-text">Usuario</span></a>
            <a href="#"><span class="email white-text">usuario@gmail.com</span></a>
          </div>
        </li>
        <li>
          <a href=""><i class="material-icons">account_box</i>Ver Citas</a>
        </li>
        <li>
          <a href="templates/Tipo.tpl"><i class="material-icons">assignment</i>Crear Cita</a>
        </li>
        <li>
          <a href=""><i class="material-icons">clear</i>Cancelar Cita</a>
        </li>
      </ul>
 
    </div>
 
    
                 
  </font>
  </body>
</html><?php }
}
