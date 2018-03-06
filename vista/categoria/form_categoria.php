<?php
	include ("modelo/producto.php");
	include ("modelo/categoria.php");

    

    $categoria = new categoria();
    $categorias = $categoria->get_all("");
?>
<h2>Crear categoria</h2>
                      <br />
                      <div class="panel panel-default panel-shadow" data-collapsed="0">
                      	<div class="panel-heading">
    				  		<div class="panel-title">
    							categoria
    				  		</div>
    				  	</div>
	<div class="panel-body">
		<form name="frm_categoria" id="frm_categoria" action="control/categoria/insertar_categoria.php" method="post" role="form" class="validate form-horizontal form-groups-bordered">
			
			<div class="form-group">
				<label for="nombre_categoria" class="col-sm-3 control-label">Nombre de categoria</label>
				<div class="col-sm-5">
					<input type="text" name="category_name" id="category_name" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="puntos_canjeo" class="col-sm-3 control-label">Maxima recompensa de puntos</label>
				<div class="col-sm-5">
					<input type="text" name="max_reward_points_encash" id="max_reward_points_encash" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="hijo" class="col-sm-3 control-label">Hijo de la categoria</label>
				<div class="col-sm-5">
					<input type="text" name="parent_category_id" id="parent_category_id" class="form-control required text"/>
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
