<?php
include("../../modelo/usuarios.php");
include("../../modelo/funciones.php");

referer_permit();

$id_usuario = $_POST[id_usuario];
$usuario = ($_POST[usuario]);
$password = ($_POST[password]);

$usuarios = new usuarios();
$result = $usuarios->modificar_datos($id_usuario, $usuario, $password);
if($result)
{
	echo "Datos actualizados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>