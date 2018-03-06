<?php
	include ("modelo/producto.php");

    

    $producto = new producto();
    $productos = $producto->get_all("");
?>
<h2>Asignar descuento al producto</h2>
                      <br />
                      <div class="panel panel-default panel-shadow" data-collapsed="0">
                      	<div class="panel-heading">
    				  		<div class="panel-title">
    							descuento por producto
    				  		</div>
    				  	</div>
	<div class="panel-body">
		<form name="frm_producto_descuento" id="frm_categoria_descuento" action="control/producto_descuento/insertar_producto_descuento.php" method="post" role="form" class="validate form-horizontal form-groups-bordered">
			
			<div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Producto</label>
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
				<label for="valor_descuento" class="col-sm-3 control-label">Valor de descuento</label>
				<div class="col-sm-5">
					<input type="text" name="discount_value" id="discount_value" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="descuento_unidad" class="col-sm-3 control-label">Descuento por unidad</label>
				<div class="col-sm-5">
					<input type="text" name="discount_unit" id="discount_unit" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="fecha_creacion" class="col-sm-3 control-label">Fecha de creaci&oacute;n</label>
				<div class="col-sm-5">
					<input type="text" name="date_created" id="date_created" class="form-control required datepicker"/>
				</div>
			</div>
			<div class="form-group">
				<label for="valido_hasta" class="col-sm-3 control-label">Valido hasta</label>
				<div class="col-sm-5">
					<input type="text" name="valid_until" id="valid_until" class="form-control required datepicker"/>
				</div>
			</div>
			<div class="form-group">
				<label for="codigo_cupon" class="col-sm-3 control-label">Codigo del cupon</label>
				<div class="col-sm-5">
					<input type="text" name="coupon_code" id="coupon_code" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="minimo_orden" class="col-sm-3 control-label">Valor minimo a ordenar</label>
				<div class="col-sm-5">
					<input type="text" name="minimum_order_value" id="minimum_order_value" class="form-control required text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="maximo_orden" class="col-sm-3 control-label">Cantidad maxima a descontar</label>
				<div class="col-sm-5">
					<input type="text" name="maximum_discount_amount" id="maximum_discount_amount" class="form-control required text"/>
				</div>
			</div>

			<div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado para canjear</label>
				<div class="col-sm-5">
					 <select name="is_redeem_allowed" id="is_redeem_allowed" class="form-control required">
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
