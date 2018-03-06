<?php
    include("../../modelo/conexion.php");
	include("../../modelo/rol.php");
    include("../../modelo/funciones.php");
    $bd = new conexion(); 
    $id = security($_POST[id_rol]);
    
    if(empty($id))
    {
        exit();    
    }
    
    $rol = new rol();
    $rol->get_rol($id);
    if ($rol->nombre_rol == 'Docente')
        $registros = $bd->Consulta("select * from persona p inner join docente d on p.id_persona=d.id_persona order by p.nombres");
    else
        if ($rol->nombre_rol == 'Alumno')
            $registros = $bd->Consulta("select * from persona p inner join alumno a on p.id_persona=a.id_persona order by p.nombres");
        else
            $registros = $bd->Consulta("select * from persona p inner join trabajador t on p.id_persona=t.id_persona order by p.nombres");
    
?>
<select name="fk_id_persona" id="fk_id_persona" class="form-control required text">
    <option value="">- Seleccione -</option>
    <?php
        while($registro = $bd->getFila($registros))
        {
            echo "<option value='$registro[id_persona]'>$registro[nombres] $registro[apellido_paterno] $registro[apellido_materno]</option>";
        }
    ?>
</select>