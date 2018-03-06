<?php
include("../../modelo/usuario.php");
include("../../modelo/persona.php");
include("../../modelo/funciones.php");

referer_permit();

$nombres = ($_POST[nombres]);
$apellidos = ($_POST[apellidos]);
$email = ($_POST[email]);
$usuario = ($_POST[usuario]);
$password = ($_POST[password]);
$nivel = ($_POST[nivel]);
$fk_id_coopropietario = ($_POST[fk_id_coopropietario]);

$bd = new conexion();
$usuarios = new usuarios();
$persona = new persona();
$result = $usuarios->registrar_usuarios($usuario, $password, $nivel, $fk_id_coopropietario);
$registros = $bd->Consulta("select max(id_usuario) from usuario");
while($registro = $bd->getFila($registros))
{
	$id_usuario = $registro[0];
}
$result1 = $persona->registrar_persona($nombres, $apellidos, $email, $id_usuario);
if($result && $result1)
{
	echo "Datos registrados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>