<?php
if(!class_exists("conexion"))
	include ("conexion.php");
class categoria
{
	public $id_categoria;
	public $category_name;
	public $max_reward_points_encash;
	public $parent_category_id;
		
	private $bd;

	function categoria()
	{
		$this->bd = new Conexion();
	}
	function registrar_categoria($category_name, $max_reward_points_encash, $parent_category_id)
	{
		$registros = $this->bd->Consulta("insert into product_category values(null,'$category_name',$max_reward_points_encash, $parent_category_id)");
		if($this->bd->numFila_afectada()>0)
			return true;
		else
			return false;
	}
	function modificar_categoria($id_categoria, $category_name, $max_reward_points_encash, $parent_category_id)
	{
		$registros = $this->bd->Consulta("update product_category set category_name='$category_name',  max_reward_points_encash='$max_reward_points_encash', parent_category_id='$parent_category_id' where id_categoria=$id_categoria");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	
	function eliminar($id_categoria)
	{
		$registros = $this->bd->Consulta("delete from product_category where id_categoria=$id_categoria");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function get_producto($id_categoria)
	{
		$registros = $this->bd->Consulta("select * from product_category where id_categoria=$id_categoria");
		$registro = $this->bd->getFila($registros);

		$this->id_categoria = $registro[id_categoria];
		$this->category_name = $registro[category_name];
		$this->max_reward_points_encash = $registro[max_reward_points_encash];
		$this->parent_category_id = $registro[parent_category_id];
	}
	function get_all($criterio)
	{
		if(empty($criterio)) $where = ""; else $where = " $criterio";
		$registros = $this->bd->Lista("select * from product_category $where");
			return $registros;
	}
	function __destroy()
	{
		$registros = $this->bd->Cerrar();
	}
}
 
?>