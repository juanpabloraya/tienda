<?php
if(!class_exists("conexion"))
	include ("conexion.php");
class producto_descuento
{
	public $id_producto_descuento;
	public $product_id;
	public $discount_value;
	public $discount_unit;
	public $date_created;
	public $valid_until;
	public $coupun_code;
	public $minimun_order_value;
	public $maximun_discount_amount;
	public $is_redeem_allowed;
		
	private $bd;

	function producto_descuento()
	{
		$this->bd = new Conexion();
	}
	function registrar_producto_descuento($product_id, $discount_value, $discount_unit, $date_created, $valid_until, $coupun_code, $minimun_order_value, $maximun_discount_amount, $is_redeem_allowed)
	{
		$registros = $this->bd->Consulta("insert into product_discount values(null,'$product_id', '$discount_value', '$discount_unit', '$date_created', '$valid_until', '$coupun_code', '$minimun_order_value', '$maximun_discount_amount', '$is_redeem_allowed')");
		if($this->bd->numFila_afectada()>0)
			return true;
		else
			return false;
	}
	function modificar_producto_descuento($id_producto_descuento, $product_id, $discount_value, $discount_unit, $date_created, $valid_until, $coupun_code, $minimun_order_value, $maximun_discount_amount, $is_redeem_allowed)
	{
		$registros = $this->bd->Consulta("update product_discount set product_id='$product_id', discount_value='$discount_value', discount_unit='$discount_unit', date_created='$date_created', valid_until='$valid_until', coupun_code='$coupun_code', minimun_order_value='$minimun_order_value', maximun_discount_amount='$maximun_discount_amount', is_redeem_allowed='$is_redeem_allowed' where id_producto_descuento=$id_producto_descuento");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	
	function eliminar($id_categoria)
	{
		$registros = $this->bd->Consulta("delete from product_discount where id_categoria=$id_categoria");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function get_producto_descuento($id_producto_descuento)
	{
		$registros = $this->bd->Consulta("select * from product_discount where id_categoria_descuento=$id_categoria_descuento");
		$registro = $this->bd->getFila($registros);

		$this->id_producto_descuento = $registro[id_producto_descuento];
		$this->product_id = $registro[product_id];
		$this->discount_value = $registro[discount_value];
		$this->discount_unit = $registro[discount_unit];
		$this->date_created = $registro[date_created];
		$this->valid_until = $registro[valid_until];
		$this->coupun_code = $registro[coupun_code];
		$this->minimun_order_value = $regsitro[minimun_order_value];
		$this->maximun_discount_amount = $regsitro[maximun_discount_amount];
		$this->is_redeem_allowed = $registro[is_redeem_allowed];
	}
	function get_all($criterio)
	{
		if(empty($criterio)) $where = ""; else $where = " $criterio";
		$registros = $this->bd->Lista("select * from product_discount $where");
			return $registros;
	}
	function __destroy()
	{
		$registros = $this->bd->Cerrar();
	}
}
 
?>