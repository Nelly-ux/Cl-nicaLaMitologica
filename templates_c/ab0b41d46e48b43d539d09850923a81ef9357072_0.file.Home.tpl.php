<?php
/* Smarty version 3.1.39, created on 2021-09-08 10:18:20
  from 'C:\xampp\htdocs\Cl-nicaLaMitologica\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613871cc79a084_68837766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab0b41d46e48b43d539d09850923a81ef9357072' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cl-nicaLaMitologica\\templates\\Home.tpl',
      1 => 1631088246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_613871cc79a084_68837766 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
      <nav>
        <div class="nav-wrapper amber lighten-1">
          <a href="#" class="brand-logo center">Registrarse</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="sass.html">Clinicas</a></li>
            <li><a href="badges.html">Doctores</a></li>
            <li><a href="Index.html">Casa</a></li>
          </ul>
        </div>
      </nav>
      

      <div class="row">
        <div class="col s12">
          <div class="input-field col s4">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <div class="valign-wrapper">
     
            <button class="btn waves-effect waves-light pink" type="submit" name="action"><font face="Georgia">Ingresar</font>
             <i class="material-icons right">login</i>
            </button>
            <button class="btn waves-effect waves-light pink" type="submit" name="action"><font face="Georgia">Registrarse</font>
              <i class="material-icons right">login</i>
             </button>
      </div>



  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
 
        <?php }
}