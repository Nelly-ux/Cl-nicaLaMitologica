<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/admin.js"></script>
    
  <body bgcolor="#b2ebf2">
<font face="Georgia">
<nav>
        
  <div class="nav-wrapper #cddc39 lime">
        <a href="#" class="brand-logo center">Complete el formulario</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="home.tpl">Salir</a></li>
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
        <i class="material-icons prefix">adjust</i>
        <input id="adjust" disabled value="" id="disabled" type="text" class="validate">
        <label  for="adjust" for="disabled">Video Consulta</label>
      </div>
      
      <div class="input-field col s12">
        <input  id="disabled" type="text" class="validate">
        <label for="disabled">Unidad Médica</label>
      </div>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Dermatología</span>
          </label>
        </p> 
        
<p>
          <label>
            <input type="checkbox" />
            <span>Médico General</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox"/>
            <span>Pediatria</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" />
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
</html>