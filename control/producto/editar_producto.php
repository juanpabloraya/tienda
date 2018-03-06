<?php
include("../../modelo/usuario.php");
include("../../modelo/persona.php");
include("../../modelo/funciones.php");

referer_permit();

$id_usuario = $_POST[id_usuario];
$usuario = ($_POST[usuario]);
$password = ($_POST[password]);
$nivel = ($_POST[nivel]);
$nombres = ($_POST[nombres]);
$apellidos = ($_POST[apellidos]);
$email = ($_POST[email]);

$usuarios = new usuario();
$personas = new persona();
$result_u = $usuarios->modificar_usuarios($id_usuario, $usuario, $password, $nivel);
$result_p= $personas->modificar_persona($nombres, $apellidos, $email, $id_usuario);
if($result_u && $result_p)
{
	echo "Datos actualizados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>