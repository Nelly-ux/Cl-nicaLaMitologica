<!--<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio sesion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/admin.js"></script>
  <body bgcolor="#b2ebf2">-->

{include file="Cabeceras/Header.tpl"}
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
</html>