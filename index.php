<?php
	session_start();
	
    if(!isset($_SESSION[id_usuario]))
    {
        include_once("vista/paginas/login.php");
    }  
    else
    {
        include_once("vista/paginas/admin.php");
    }    

?>
