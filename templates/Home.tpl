  {include file="Cabeceras/Header.tpl"}  
      <nav>
        <div class="nav-wrapper amber lighten-1">
          <a href="#" class="brand-logo center">LOGIN</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="sass.html">Clinicas</a></li>
            <li><a href="badges.html">Doctores</a></li>
            <li><a href="Index.html">Casa</a></li>
          </ul>
        </div>
      </nav>

     
       <form method="post" action="?controller=User&method=BuscarUsuario" class="col s4">
      
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
              <input id="password" type="password" class="validate" required="" name="pass"/>
              <label for="password">Password</label>
            </div>
          </div>
          </div>
          
          <div class="row">
          <div class="col s12">   
            <div class="input-field col s4"> 
                <button class="btn waves-effect waves-light pink" type="submit" name="action"><font face="Georgia">Ingresar</font>
                <a href="templates/usuario.tpl" i class="material-icons right">login</a></i>
                </button>
                <button class="btn waves-effect waves-light pink" type="submit" name="action"><font face="Georgia">Registrarse</font>
                  <i class="material-icons right">login</i>
                </button>
          </div>
          </div>
          </div>
       </form>
     </div>
 
      
  {include file="Cabeceras/Footer.tpl"}  
 
        