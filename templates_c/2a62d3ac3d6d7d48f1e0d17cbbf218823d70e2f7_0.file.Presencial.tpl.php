<?php
/* Smarty version 3.1.39, created on 2021-09-13 14:40:43
  from 'C:\xampp\htdocs\Cl-nicaLaMitologica\templates\Presencial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f46cb47f807_18703758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a62d3ac3d6d7d48f1e0d17cbbf218823d70e2f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cl-nicaLaMitologica\\templates\\Presencial.tpl',
      1 => 1631536839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613f46cb47f807_18703758 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulario</title>
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
        
  <div class="nav-wrapper #cddc39 lime">
        <a href="#" class="brand-logo center">Complete el formulario</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Home.tpl">Salir</a></li>
        <li><a href="tipo.tpl">Regresar</a></li>
        </ul>
  </div>
  
  <div class="col s12 m8 offset-m2 l6 offset-l3">
    <div class="card-panel grey lighten-5 z-depth-1">
      <div class="row valign-wrapper">
        <div class="col s2">
          <img src="img/duende.png" alt="" class="circle responsive-img">
        </div>
        <div class="col s10">
          <span class="black-text">
           
  <div class="row">
    <form class="col s12">
      <div class="row">
        
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombres</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Apellidos</label>
        </div>
      </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">face</i>
        <input id="face" disabled value="" id="disabled" type="text" class="validate">
        <label  for="face" for="disabled">Consulta Presencial</label>
      </div>
      
      <div class="input-field col s12">
        <input  id="disabled" type="text" class="validate">
        <label for="disabled">Unidad Médica</label>
      </div>
      <form action="#">
        
        <p>
      <label>
        <input name="group1" type="radio" />
        <span>Dermatología</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Médico General</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio"  />
        <span>Pediatría</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Odontología</span>
      </label>
    </p>
        
      </form>
 
  
      <div class="input-field col s6">
        <i class="material-icons prefix">phone</i>
        <input id="icon_telephone" type="tel" class="validate">
        <label for="icon_telephone">Telefono</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">access_time</i>
        <input id="access_time" type="datetime-local" class="validate">
        <label for="access_time"></label>
      </div>
        </div>
      </div>
    </div>
  </div>
  </font>
  </body>
</html><?php }
}
