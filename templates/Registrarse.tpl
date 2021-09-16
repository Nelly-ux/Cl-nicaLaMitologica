{include file="Cabeceras/Header.tpl"}  
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
                <label for="user">User</label>
              
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
   </form>
   

 {include file="Cabeceras/Footer.tpl"}  
 