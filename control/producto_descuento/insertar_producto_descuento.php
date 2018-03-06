<?php
include("../../modelo/producto_descuento.php");
include("../../modelo/funciones.php");

referer_permit();

$product_id = ($_POST[product_id]);
$discount_value = ($_POST[discount_value]);
$discount_unit = ($_POST[discount_unit]);
$date_created = ($_POST[date_created]);
$valid_until = $_POST[valid_until];
$coupun_code = $_POST[coupon_code];
$minimum_order_value = $_POST[minimum_order_value];
$maximum_discount_amount = $_POST[maximum_discount_amount];
$is_redeem_allowed = $_POST[is_redeem_allowed];


$producto_descuento = new producto_descuento();
$result = $producto_descuento->registrar_producto_descuento($product_id, $discount_value, $discount_unit, $date_created, $valid_until, $coupun_code, $minimum_order_value, $maximum_discount_amount, $is_redeem_allowed);
if($result)
{
	echo "Datos registrados.";
}
else
{
	echo "Ocuri&oacute; un Error.";
}


?>