<?php
    session_start();
    include("../../modelo/funciones.php");
    include("../../modelo/usuario.php"); 
    include("../../config.php");
    
    $usuario = new usuario();
    
    $correo = security($_POST[email]);
    $usuario->get_usuario_correo($correo);

    $resp = array();
    
    if(!empty($usuario->correo_usuario))
    {
        $email = $usuario->correo_usuario;
        $mensaje = "ok";    
        
        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $header .= 'From: ' . $EMAIL_INFO;
        
        $mensaje_correo = "
        <html>
            <body>
                <center>
                <img src='$URL_SERVER/assets/images/universidad pedagocica.png'/>
                </center>
                <br>
                <p>Sus datos de acceso al sistema de UNIVERSIDAD PEDAGOGICA son los siguientes:</p>
                <br/>
                <p>
                    <strong>Cuenta : </strong>".$usuario->nombre_usuario."
                    <br/>
                    <strong>Correo : </strong>".$usuario->correo_usuario."
                    <br/>
                    <strong>Contraseña : </strong>".$usuario->password."
                </p>
            </body>
        </html>
        ";
        /*
        if(mail($email, "Recuperación de Contraseña", $mensaje_correo, $header))
        {
            $mensaje = "ok";
        }
        */
        $mensaje = "ok";
        //enviar correo
    }
    else
    {
        $email = $correo;
        $mensaje = "ko";
    }
    
    $resp['submitted_data'] = array("email" => "$email", "mensaje" => "$mensaje");
    
    echo json_encode($resp);


?>