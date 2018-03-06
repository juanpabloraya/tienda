<?php
include("../../modelo/usuarios.php");
include("../../modelo/funciones.php");

referer_permit();


$usuarios = new usuarios();
$result = $usuarios->eliminar(security($_GET[id]));
if($result)
{
	echo "Acci&oacute;n completada con &eacute;xito";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>