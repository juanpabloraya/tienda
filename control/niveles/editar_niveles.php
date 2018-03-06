<?php
include("../../modelo/niveles.php");
include("../../modelo/funciones.php");

referer_permit();

$id_nivel = $_POST[id_nivel];
$nombre_nivel = ($_POST[nombre_nivel]);
$descripcion_nivel = ($_POST[descripcion_nivel]);
$fecha_creacion = ($_POST[fecha_creacion]);
$fk_id_usuario = ($_POST[fk_id_usuario]);

$niveles = new niveles();
$result = $niveles->modificar_niveles($id_nivel, $nombre_nivel, $descripcion_nivel, $fecha_creacion, $fk_id_usuario);
if($result)
{
	echo "Datos actualizados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>