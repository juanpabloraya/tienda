<?php
if(!class_exists("conexion"))
	include ("conexion.php");
class compras_descuento
{
	public $product_descuento;
	public $categoria_descuento;
	public $total_producto_descuento;
	public $total_categoria_descuento
	private $bd;

	function producto()
	{
		$this->bd = new Conexion();
	}
	function descontar_producto($id_producto, $coupun_code, $cantidad_comprar)
	{
		
		
	}
	function descontar_categoria($id_categoria, $coupun_code, $cantidad_comprar)
	{
		
	}
	
	function eliminar_compra($id)
	{
		
	}
	function get_compra($id)
	{
		
	}
	function get_all($criterio)
	{
		if(empty($criterio)) $where = ""; else $where = " $criterio";
		$registros = $this->bd->Lista("select * from compra $where");
			return $registros;
	}
	function __destroy()
	{
		$registros = $this->bd->Cerrar();
	}
}
 
?>