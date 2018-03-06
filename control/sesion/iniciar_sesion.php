<?php
    session_start();
    include("../../modelo/funciones.php");
    include("../../modelo/sesion.php");  
    
    referer_permit();
    
        $sesion = new Sesion();
        
        $usuario = security($_POST[username]);
        $pass = security($_POST[password]);

             
        $resp = array();        
        $resp['submitted_data'] = $_POST;
        
        $login_status = 'invalid';
        
        if($sesion->Iniciar($usuario,$pass))
        {   
            $_SESSION['id_usuario'] = $sesion->id_usuario;
            $_SESSION['nivel'] = $sesion->nivel;
            
            $login_status = 'success';
        }
            
        $resp['login_status'] = $login_status;
        
        if($login_status == 'success')
        {
        	$resp['redirect_url'] = '';
        }
        
        echo json_encode($resp);
            
?>