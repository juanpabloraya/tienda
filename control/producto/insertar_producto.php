<?php
include("../../modelo/producto.php");
include("../../modelo/funciones.php");

referer_permit();

$product_name = ($_POST[product_name]);
$product_description = ($_POST[product_description]);
$units_in_stock = ($_POST[units_in_stock]);
$product_category_id = ($_POST[product_category_id]);
$reward_points_credit = $_POST[reward_points_credit];

$producto = new producto();
$result = $producto->registrar_producto($product_name, $product_description, $units_in_stock, $product_category_id, $reward_points_credit);
if($result)
{
	echo "Datos registrados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>