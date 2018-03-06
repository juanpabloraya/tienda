<?php
include("../../modelo/categoria.php");
include("../../modelo/funciones.php");

referer_permit();

$category_name = ($_POST[category_name]);
$max_reward_points_encash = ($_POST[max_reward_points_encash]);
$parent_category_id = ($_POST[parent_category_id]);

$categoria = new categoria();
$result = $categoria->registrar_categoria($category_name, $max_reward_points_encash, $parent_category_id);
if($result)
{
	echo "Datos registrados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
	echo "registrar_categoria($category_name, $max_reward_points_encash, $parent_category_id)";
}


?>