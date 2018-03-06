<?php
if(!class_exists("conexion"))
	include ("conexion.php");
class usuarios
{
	public $id_usuario;
	public $usuario;
	public $password;
	public $nivel;
	private $bd;

	function usuarios()
	{
		$this->bd = new Conexion();
	}
	function registrar_usuarios($usuario, $password, $nivel)
	{
		$registros = $this->bd->Consulta("insert into usuario values(null, '$usuario', '$password', '$nivel')");
		if($this->bd->numFila_afectada()>0)
			return true;
		else
			return false;
	}
	function modificar_usuarios($id_usuario, $usuario, $password, $nivel)
	{
		$registros = $this->bd->Consulta("update usuario set usuario='$usuario', password='$password', nivel='$nivel' where id_usuario=$id_usuario");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function modificar_datos($id_usuario, $usuario, $password)
	{
		$registros = $this->bd->Consulta("update usuario set usuario='$usuario', password='$password' where id_usuario=$id_usuario");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function eliminar($id_usuario)
	{
		$registros = $this->bd->Consulta("delete from usuario where id_usuario=$id_usuario ");
		if($this->bd->numFila_afectada($registros)>0)
			return true;
		else
			return false;
	}
	function get_usuarios($id_usuario)
	{
		$registros = $this->bd->Consulta("select * from usuario where id_usuario=$id_usuario");
		$registro = $this->bd->getFila($registros);

		$this->id_usuario = $registro[id_usuario];
		$this->usuario = $registro[usuario];
		$this->password = $registro[password];
		$this->nivel = $registro[nivel];
	}
	function get_all($criterio)
	{
		if(empty($criterio)) $where = ""; else $where = " $criterio";
		$registros = $this->bd->Lista("select * from usuario $where");
			return $registros;
	}
	function __destroy()
	{
		$registros = $this->bd->Cerrar();
	}
}
 
?>