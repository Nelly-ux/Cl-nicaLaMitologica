<?php
/* Smarty version 3.1.39, created on 2021-09-13 14:48:09
  from 'C:\xampp\htdocs\Cl-nicaLaMitologica\templates\Registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f48891e5144_05167947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c449fab5febd72117c6dc730c63abd37fe4649b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cl-nicaLaMitologica\\templates\\Registrarse.tpl',
      1 => 1631537287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_613f48891e5144_05167947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<nav>
        <div class="nav-wrapper amber lighten-1">
          <a href="#" class="brand-logo center">LA MITOLOGICA/ingreso nuevo</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="sass.html">Clinicas</a></li>
            <li><a href="badges.html">Doctores</a></li>
            <li><a href="Index.html">Casa</a></li>
          </ul>
        </div>
</nav>
 
    
    <div class="row">
    <form class="col s12">
      
      <div class="row">
        <div class="col s12">
          <div class="input-field col s4">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
       </div>
      </div>

      <div class="row">
       <div class="col s12">
        <div class="input-field col s4">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
       </div>
      </div>

      <div class="row">
        <div class="col s12">
          <div class="input-field col s4">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
          
          </div>
        </div>
      </div>

      <div class="row">
            <div class="col s12">
              <div class="input-field col s4">
                <input id="user" type="text" class="validate" required="" name="user"/>
                <label for="email_inline">User</label>
              
              </div>
            </div>
          </div>
      
      <div class="row">
       <div class="col s12">
        <div class="input-field col s4">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      </div>

      <div class="valign-wrapper">
     
            <button class="btn waves-effect waves-light pink" type="submit" name="action"><font face="Georgia">Registrarse</font>
              <i class="material-icons right">login</i>
             </button>
  

    </div>

   

 <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
 <?php }
}
