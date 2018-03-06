<?php
    
    $id = security($_GET[id]);

    $registros = $bd->Consulta("select * from usuario u inner join persona p on u.id_usuario=p.id_usuario where u.id_usuario=$id");
    $registro = $bd->getFila($registros);
    
?>

        <h2>Editar usuario</h2>
                      <br />
                      <div class="panel panel-default panel-shadow" data-collapsed="0">
                      	<div class="panel-heading">
    				  		<div class="panel-title">
    							Usuario
    				  		</div>
    				  	</div>
	<div class="panel-body">
		<form name="frm_usuario" id="frm_usuario" action="control/usuarios/editar_usuario.php" method="post" role="form" class="validate_edit form-horizontal form-groups-bordered">
			<input type="hidden" name="id_usuario" id="id_usuario" class="form-control required text" value='<?php echo $usuario->id_usuario; ?>'/>
			<div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-5">
					<input type="text" name="nombre" id="nombre" class="form-control required text"  placeholder='' value='<?php echo $registro[nombres]; ?>'/>
				</div>
			</div>
			<div class="form-group">
				<label for="apellido" class="col-sm-3 control-label">Apellido</label>
				<div class="col-sm-5">
					<input type="text" name="apellido" id="apellido" class="form-control required text"  placeholder='' value='<?php echo $registro[apellidos]; ?>'/>
				</div>
			</div>
			<div class="form-group">
				<label for="nombre_usuario" class="col-sm-3 control-label">Nombre usuario</label>
				<div class="col-sm-5">
					<input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control required text"  placeholder='' value='<?php echo $registro[usuario]; ?>'/>
				</div>
			</div>
			
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Contrase&ntilde;a</label>
				<div class="col-sm-5">
					<input type="password" name="password" id="password" class="form-control required text"  placeholder='' value='<?php echo $registro[password]; ?>'/>
				</div>
			</div>

			<div class="form-group">
				<label for="correo_usuario" class="col-sm-3 control-label">Correo</label>
				<div class="col-sm-5">
					<input type="text" name="correo_usuario" id="correo_usuario" class="form-control required text"  placeholder='' value='<?php echo $registro[email]; ?>'/>
				</div>
			</div>
			
			<div class="form-group">
				<label for="fk_id_rol" class="col-sm-3 control-label">Nivel</label>
				<div class="col-sm-5">					
                    <select name="fk_id_rol" id="fk_id_rol" class="form-control required">
                        <option value="">- Seleccione -</option>
                        <?php
	                        if($registro[nivel] == 1)
                                echo "<option selected value='$registro[nivel]'>Administrador</option>";
                            else
                            	echo "<option value='$registro[nivel]'>Cliente</option>";
                        ?>
                    </select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-5">
					<button type="submit" class="btn btn-info">Guardar</button> <button type="reset" class="btn btn-default cancelar">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>
