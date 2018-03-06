<?php

if(!class_exists("conexion"))
    include ("conexion.php");

class Sesion 
{
      private $bd;
      public $id_usuario;
      public $cuenta;
      public $correo;
      public $nombre_ap;
      public $nivel;
      
    function Sesion()
    {
        $this->bd = new conexion();                
    }
    function Iniciar($usuario, $pass)
    {
        //$pass = md5($pass);                
        //$datos = $this->bd->Consulta("select * from usuario u inner join persona p on u.fk_id_persona=p.id_persona inner join rol r on u.fk_id_rol=r.id_rol inner join alumno a on p.id_persona=a.id_persona where (u.correo_usuario='$usuario' or u.nombre_usuario='$usuario') and u.password='$pass' and u.estado_usuario=1");
        $datos = $this->bd->Consulta("select * from usuario where usuario='$usuario' and password='$pass'");        
        if ($this->bd->numFila($datos)>0)
        {            
            $dato = $this->bd->getFila($datos);
            $this->Crear_Sesion($dato);
            $_SESSION[usuario] = $dato[usuario];
            if($dato[nivel]==1)
            {
                $_SESSION[nombre_nivel]='Administrador';
            }
            else
            {
                $_SESSION[nombre_nivel]='Cliente';
            }                  
            return true;            
        } 
        else
        {
            return false;
        }
          
    }
    
    function Crear_Sesion($dato)
    {
        $this->id_usuario = $dato[id_usuario];
        $this->cuenta = $dato[usuario];    
        $this->nivel = $dato[nivel];
    }

     function Cerrar($id_usuario)
    {
            $ip = $_SERVER["REMOTE_ADDR"];
           
    }
}
?>