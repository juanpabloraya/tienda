<?php
	include ("modelo/producto.php");

    

    $producto = new producto();
    $productos = $producto->get_all("");
?>
<h2>Asignar precio al producto</h2>
                      <br />
                      <div class="panel panel-default panel-shadow" data-collapsed="0">
                      	<div class="panel-heading">
    				  		<div class="panel-title">
    							precios del producto
    				  		</div>
    				  	</div>
	<div class="panel-body">
		<form name="frm_producto_precio" id="frm_producto_precio" action="control/producto_precio/insertar_producto_precio.php" method="post" role="form" class="validate form-horizontal form-groups-bordered">
			
			<div class="form-group">
				<label for="producto" class="col-sm-3 control-label">Producto</label>
				<div class="col-sm-5">					
                    <select name="product_id" id="product_id" class="form-control required">
                        <option value="">- Seleccione -</option>
                        <?php
	                       foreach($productos as $key => $registro)
                           {
                                echo "<option value='$registro[id_producto]'>$registro[product_name]</option>";
                           }
                        ?>
                    </select>
				</div>
			</div>

			<div class="form-group">
				<label for="precio_base" class="col-sm-3 control-label">Precio Base</label>
				<div class="col-sm-5">
					<input type="text" name="base_price" id="base_price" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="fecha_creacion" class="col-sm-3 control-label">Fecha de creaci&oacute;n</label>
				<div class="col-sm-5">
					<input type="text" name="date_created" id="date_created" class="form-control required datepicker"/>
				</div>
			</div>
			<div class="form-group">
				<label for="fecha_expiracion" class="col-sm-3 control-label">Fecha de expiraci&oacute;n</label>
				<div class="col-sm-5">
					<input type="text" name="date_expiry" id="date_expiry" class="form-control required datepicker"/>
				</div>
			</div>
			<div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-5">
					 <select name="in_active" id="in_active" class="form-control required">
                        <option value="">- Seleccione -</option>
                        <option value="1">Activo</option>
                        <option value="0">Desactivo</option>
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
