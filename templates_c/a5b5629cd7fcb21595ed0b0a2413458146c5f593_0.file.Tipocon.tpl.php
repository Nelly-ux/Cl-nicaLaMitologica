<?php
/* Smarty version 3.1.39, created on 2021-09-08 18:48:56
  from 'C:\xampp\htdocs\Cl-nicaLaMitologica\templates\Tipocon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138e97831ee05_51758379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5b5629cd7fcb21595ed0b0a2413458146c5f593' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cl-nicaLaMitologica\\templates\\Tipocon.tpl',
      1 => 1631119686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6138e97831ee05_51758379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<nav>
        <div class="nav-wrapper amber lighten-1">
          <a href="#" class="brand-logo center">LA MITOLOGICA/modalidad de consulta</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="sass.html">Clinicas</a></li>
            <li><a href="badges.html">Doctores</a></li>
            <li><a href="Index.html">Casa</a></li>
          </ul>
        </div>
      </nav>
      
        <center>
        <br>
        <div>
          <a class="btn waves-effect waves-light pink">   VIDEO CONSULTA   </a>
        </div>
        <br>
        <div>
          <a class="btn waves-effect waves-light pink"> CONSULTA PRESENCIAL </a>
        </div>
        </center>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
