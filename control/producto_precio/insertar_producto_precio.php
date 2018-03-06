<?php
include("../../modelo/producto_precio.php");
include("../../modelo/funciones.php");

referer_permit();

$product_id = ($_POST[product_id]);
$base_price = ($_POST[base_price]);
$date_created = ($_POST[date_created]);
$date_expiry = ($_POST[date_expiry]);
$in_active = $_POST[in_active];

$producto_precio = new producto_precio();
$result = $producto_precio->registrar_producto_precio($product_id, $base_price, $date_created, $date_expiry, $in_active);
if($result)
{
	echo "Datos registrados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>