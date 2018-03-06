<?php
if(!class_exists("conexion"))
	include ("conexion.php");
class persona
{
	public $id_persona;
	public $nombres;
	public $apellidos;
	public $email;
	public $id_usuario;
	private $bd;

	function persona()
	{
		$this->bd = new Conexion();
	}
	function registrar_persona($nombres, $apellidos, $email, $id_usuario)
	{
		$registros = $this->bd->Consulta("insert into persona values(null,'$nombres', '$apellidos', '$email', '$id_usuario')");
		if($this->bd->numFila_afectada()>0)
			return true;
		else
			return false;
	}
	function modificar_persona($nombres, $apellidos, $email, $id_usuario)
	{
		$registros = $this->bd->Consulta("update persona set nombres='$nombres', apellidos='$apellidos', email='$email' where id_usuario=$id_usuario");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	
	function eliminar($id_usuario)
	{
		$registros = $this->bd->Consulta("delete from persona where id_usuario=$id_usuario ");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function get_persona($id_usuario)
	{
		$registros = $this->bd->Consulta("select * from persona where id_usuario=$id_usuario");
		$registro = $this->bd->getFila($registros);

		$this->id_persona = $registro[id_persona];
		$this->nombres = $registro[nombres];
		$this->apellidos = $registro[apellidos];
		$this->email = $registro[email];
		$this->id_usuario = $registro[id_usuario];
	}
	function get_all($criterio)
	{
		if(empty($criterio)) $where = ""; else $where = " $criterio";
		$registros = $this->bd->Lista("select * from persona $where");
			return $registros;
	}
	function __destroy()
	{
		$registros = $this->bd->Cerrar();
	}
}
 
?>