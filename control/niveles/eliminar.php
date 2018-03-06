<?php
include("../../modelo/niveles.php");
include("../../modelo/funciones.php");

referer_permit();


$niveles = new niveles();
$result = $niveles->eliminar(security($_GET[id]));
if($result)
{
	echo "Acci&oacute;n completada con &eacute;xito";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>