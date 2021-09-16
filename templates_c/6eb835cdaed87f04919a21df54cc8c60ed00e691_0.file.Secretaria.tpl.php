<?php
/* Smarty version 3.1.39, created on 2021-09-12 21:41:51
  from 'C:\xampp\htdocs\Cl-nicaLaMitologica\templates\Secretaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613e57ff58e382_97647722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb835cdaed87f04919a21df54cc8c60ed00e691' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cl-nicaLaMitologica\\templates\\Secretaria.tpl',
      1 => 1631281395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_613e57ff58e382_97647722 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

 <font face="Georgia">
<nav>
        
  <div class="nav-wrapper #cddc39 lime">
        <a href="#" class="brand-logo center">AGENDA DE CITAS</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Home.tpl">Salir</a></li>
        <li><a href="Home.tpl">Regresar</a></li>
        </ul>
  </div>
  <div class="col s12 m8 offset-m2 l6 offset-l3">
    <div class="card-panel grey lighten-5 z-depth-1">
      <div class="row valign-wrapper">
        <div class="col s2">
          <img src="img/sirena.png" alt="" class="circle responsive-img">
        </div>
        <div class="col s10">
          <span class="black-text">
    </div>

</nav>

  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  <?php }
}
