<?php
include("../../modelo/niveles.php");
include("../../modelo/funciones.php");

referer_permit();

$nombre_nivel = ($_POST[nombre_nivel]);
$descripcion_nivel = ($_POST[descripcion_nivel]);
$fecha_creacion = ($_POST[fecha_creacion]);
$fk_id_usuario = ($_POST[fk_id_usuario]);

$niveles = new niveles();
$result = $niveles->registrar_niveles($nombre_nivel, $descripcion_nivel, $fecha_creacion, $fk_id_usuario);
if($result)
{
	echo "Datos registrados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>