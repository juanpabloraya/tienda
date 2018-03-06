<?php
if(!class_exists("conexion"))
	include ("conexion.php");
class producto_precio
{
	public $id_precio;
	public $product_id;
	public $base_price;
	public $date_created;
	public $date_expiry;
	public $in_active;
	private $bd;

	function producto_precio()
	{
		$this->bd = new Conexion();
	}
	function registrar_producto_precio($product_id, $base_price, $date_created, $date_expiry, $in_active)
	{
		$registros = $this->bd->Consulta("insert into product_pricing values(null, '$product_id', '$base_price', '$date_created', '$date_expiry', '$in_active')");
		if($this->bd->numFila_afectada()>0)
			return true;
		else
			return false;
	}
	function modificar_producto($id_precio,$product_id, $base_price, $date_created, $date_expiry, $in_active)
	{
		$registros = $this->bd->Consulta("update product_pricing set product_id='$product_id', base_price='$base_price', date_created='$date_created', date_expiry='$date_expiry', in_active='$in_active' where id_precio=$id_precio");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	
	function eliminar($id_precio)
	{
		$registros = $this->bd->Consulta("delete from product_pricing where id_precio=$id_precio ");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function get_producto($id_precio)
	{
		$registros = $this->bd->Consulta("select * from product_pricing where id_precio=$id_precio");
		$registro = $this->bd->getFila($registros);

		$this->id_precio = $registro[id_precio];
		$this->product_id = $registro[product_id];
		$this->base_price = $registro[base_price];
		$this->date_created = $registro[date_created];
		$this->date_expiry = $registro[date_expiry];
		$this->in_active = $registro[in_active];
	}
	function get_all($criterio)
	{
		if(empty($criterio)) $where = ""; else $where = " $criterio";
		$registros = $this->bd->Lista("select * from product_pricing $where");
			return $registros;
	}
	function __destroy()
	{
		$registros = $this->bd->Cerrar();
	}
}
 
?>