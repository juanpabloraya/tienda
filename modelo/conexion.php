<?php
    class conexion
    {
        private $servidor = 'localhost';
        private $base_datos = 'tienda';
        private $usuario = 'root';
        private $password = '123456';
        private $enlace;
        
        function conexion()
        {            
            $this->Conectar();            
        }
        //
        function Conectar()
        {
            $this->enlace = mysql_connect($this->servidor,$this->usuario,$this->password);
            if($this->enlace)
            {
                if(mysql_select_db($this->base_datos))
                    return $this->enlace;
                else
                    return false;
            }
            else
                return false;
        }
        //Este metodo ejecuta una consulta sql
        function Consulta($sql)        
        {
            return mysql_query($sql,$this->enlace);
        }
        //Este metodo recorre fila por fila devolviendo los datos como vector 
        function getFila($datos)
        {
            return mysql_fetch_array($datos);
        }
        //
        function getFilaObject($datos)
        {
            return mysql_fetch_object($datos);
        }
        //fcuncion pa obtener el numero de resultados de una consulta
        function numFila($datos)
        {
            return mysql_num_rows($datos);        
        }
        //cuando se usa una consulta de tipo update o delete se verifica el num de filas afectadas
        function numFila_afectada()
        {
            return mysql_affected_rows($this->enlace);            
        }
        //
        function Lista($sql)
        {
        	$result = mysql_query($sql,$this->enlace);
        	$tmp_array = array();
        	$return_array=array();
            
            if(mysql_num_rows($result)>0)			
            	while ($obj = mysql_fetch_array($result)) {        		
                    $return_array[] = $obj;
            	}
                		
        	return $return_array;
        }
        //
        function Cerrar()
        {
            mysql_close($this->enlace);
        }
                    
    }        
        
?>