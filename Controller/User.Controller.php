<?php
  Class User 
  {
      public $usuario;
      public $smarty;
      public function __construct()
      {
        $this->usuario=new Usuario();
        $this->smarty=new Smarty();
      }

      public function BuscarUsuario()
      {
        $user=$_POST['user']; 
        $pass=$_POST['pass']; 
        
        $u=$this->usuario->BuscarUsuario($user,$pass);
        
        if ($u->num_rows==1)
        {
          var_dump($u);
          $arr=array();

          while($fila=mysqli_fetch_assoc($u))
          {
            array_push($arr,$fila);
          }
          
          if($arr[0]['Rol_idRol']==1)
          {
            $this->smarty->assign('title','doctor');
            /* $this->smarty->display('Usuario.tpl'); HACE FALTA VISTA DE DOCTOR*/
             echo "en rol DOCTOR";
          }
          if($arr[0]['Rol_idRol']==2)
          {
             echo "en rol USUARIO";
             $this->smarty->assign('title','usuario');
             $this->smarty->display('Usuario.tpl');

          }
          if($arr[0]['Rol_idRol']==3)
          {
             echo "en rol SECRETARIA";
             $this->smarty->assign('title','secretaria');
            $this->smarty->display('Secretaria.tpl');
          }
          else
          {
            echo "aun no existe rol";
          }
        } 
        else if($u->num_rows>1)
        {
          $this->smarty->assign('title','Home');
          $this->smarty->display('Home.tpl');
          echo "usuario duplicado intentelo de nuevo";

        }
        else
        {
          $this->smarty->assign('title','Home');
          $this->smarty->display('Home.tpl');
          echo "usuario inexistente intentelo de nuevo";
        }     
      }
  }
?>