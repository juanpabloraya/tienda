<?php
if(!class_exists("conexion"))
	include ("conexion.php");
class producto
{
	public $id_producto;
	public $product_name;
	public $product_description;
	public $units_in_stock;
	public $product_category_id;
	public $reward_points_credit;
	private $bd;

	function producto()
	{
		$this->bd = new Conexion();
	}
	function registrar_producto($product_name, $product_description, $units_in_stock, $product_category_id, $reward_points_credit)
	{
		$registros = $this->bd->Consulta("insert into product values(null, '$product_name', '$product_description', $units_in_stock, $product_category_id, '$reward_points_credit')");
		if($this->bd->numFila_afectada()>0)
			return true;
		else
			return false;
	}
	function modificar_producto($id_producto, $product_name, $product_description, $units_in_stock, $product_category_id, $reward_points_credit)
	{
		$registros = $this->bd->Consulta("update product set product_name='$product_name', product_description='$product_description', units_in_stock='$$units_in_stock', product_category_id='$product_category_id', reward_points_credit='$reward_points_credit'   where id_producto=$id_producto");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	
	function eliminar($id)
	{
		$registros = $this->bd->Consulta("delete from product where id_producto=$id_producto ");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function get_producto($id_producto)
	{
		$registros = $this->bd->Consulta("select * from product where id_producto=$id_producto");
		$registro = $this->bd->getFila($registros);

		$this->id_producto = $registro[id_producto];
		$this->product_name = $registro[product_name];
		$this->product_description = $registro[product_description];
		$this->units_in_stock = $registro[units_in_stock];
		$this->product_category_id = $registro[product_category_id];
		$this->reward_points_credit = $registro[reward_points_credit];
	}
	function get_all($criterio)
	{
		if(empty($criterio)) $where = ""; else $where = " $criterio";
		$registros = $this->bd->Lista("select * from product $where");
			return $registros;
	}
	function __destroy()
	{
		$registros = $this->bd->Cerrar();
	}
}
 
?>