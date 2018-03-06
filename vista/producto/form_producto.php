<?php
	include ("modelo/producto.php");
	include ("modelo/categoria.php");

    

    $categoria = new categoria();
    $categorias = $categoria->get_all("");
?>
<h2>Crear producto</h2>
                      <br />
                      <div class="panel panel-default panel-shadow" data-collapsed="0">
                      	<div class="panel-heading">
    				  		<div class="panel-title">
    							producto
    				  		</div>
    				  	</div>
	<div class="panel-body">
		<form name="frm_producto" id="frm_producto" action="control/producto/insertar_producto.php" method="post" role="form" class="validate form-horizontal form-groups-bordered">
			
			<div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Categoria</label>
				<div class="col-sm-5">					
                    <select name="product_category_id" id="product_category_id" class="form-control required">
                        <option value="">- Seleccione -</option>
                        <?php
	                       foreach($categorias as $key => $registro)
                           {
                                echo "<option value='$registro[id_categoria]'>$registro[category_name]</option>";
                           }
                        ?>
                    </select>
				</div>
			</div>

			<div class="form-group">
				<label for="nombre_producto" class="col-sm-3 control-label">Nombre del producto</label>
				<div class="col-sm-5">
					<input type="text" name="product_name" id="product_name" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="descripcion_producto" class="col-sm-3 control-label">Descripci&oacute;n del producto</label>
				<div class="col-sm-5">
					<input type="text" name="product_description" id="product_description" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="stock" class="col-sm-3 control-label">Unidades en stock</label>
				<div class="col-sm-5">
					<input type="text" name="units_in_stock" id="units_in_stock" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="puntos" class="col-sm-3 control-label">Puntos para canjear</label>
				<div class="col-sm-5">
					<input type="text" name="reward_points_credit" id="reward_points_credit" class="form-control required text"/>
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
