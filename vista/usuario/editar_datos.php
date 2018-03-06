<?php

	include("modelo/usuario.php");
    include("modelo/rol.php");
    
    $id = security($_GET[id]);

    $usuario = new usuario();

    $usuario->get_usuario($id);

?>

        <h2>Editar datos</h2>
                      <br />
                      <div class="panel panel-default panel-shadow" data-collapsed="0">
                      	<div class="panel-heading">
    				  		<div class="panel-title">
    							Usuario
    				  		</div>
    				  	</div>
	<div class="panel-body">
		<form name="frm_usuario" id="frm_usuario" action="control/usuario/editar_datos.php" method="post" role="form" class="validate_edit form-horizontal form-groups-bordered">
			<input type="hidden" name="id_usuario" id="id_usuario" class="form-control required text" value='<?php echo $usuario->id_usuario; ?>'/>
			<div class="form-group">
				<label for="nombre_usuario" class="col-sm-3 control-label">Nombre usuario</label>
				<div class="col-sm-5">
					<input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control required text"  placeholder='' value='<?php echo ($usuario->nombre_usuario); ?>'/>
				</div>
			</div>
			<div class="form-group">
				<label for="correo_usuario" class="col-sm-3 control-label">Correo</label>
				<div class="col-sm-5">
					<input type="text" name="correo_usuario" id="correo_usuario" class="form-control required text"  placeholder='' value='<?php echo ($usuario->correo_usuario); ?>'/>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Contrase&ntilde;a</label>
				<div class="col-sm-5">
					<input type="password" name="password" id="password" class="form-control required text"  placeholder='' value='<?php echo ($usuario->password); ?>'/>
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
