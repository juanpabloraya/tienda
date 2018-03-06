
<h2>Crear usuario</h2>
                      <br />
                      <div class="panel panel-default panel-shadow" data-collapsed="0">
                      	<div class="panel-heading">
    				  		<div class="panel-title">
    							usuario
    				  		</div>
    				  	</div>
	<div class="panel-body">
		<form name="frm_usuario" id="frm_usuario" action="control/usuarios/insertar_usuarios.php" method="post" role="form" class="validate form-horizontal form-groups-bordered">
			
		    <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-5">
					<input type="text" name="nombres" id="nombres" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="apellido" class="col-sm-3 control-label">Apellidos</label>
				<div class="col-sm-5">
					<input type="text" name="apellidos" id="apellidos" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="correo_usuario" class="col-sm-3 control-label">Correo</label>
				<div class="col-sm-5">
					<input type="text" name="email" id="email" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="usuario" class="col-sm-3 control-label">Usuario</label>
				<div class="col-sm-5">
					<input type="text" name="usuario" id="usuario" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Contrase&ntilde;a</label>
				<div class="col-sm-5">
					<input type="text" name="password" id="password" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="nivel" class="col-sm-3 control-label">Nivel</label>
				<div class="col-sm-5">
					<select name="nivel" id="nivel" class="form-control required">
                        <option value="">- Seleccione -</option>
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                    </select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-5">
					<button type="submit" class="btn btn-info">Registrar</button> <button type="reset" class="btn btn-default cancelar">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>
