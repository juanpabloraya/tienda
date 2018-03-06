  <?php include("modelo/producto_precio.php");    
            $producto_precio = new producto_precio();
            $registros = $producto_precio->get_all(" pp inner join product p on pp.product_id=p.id_producto");    
        ?>
        <h2>Precios del producto
            <a href="?mod=producto_precio&pag=form_producto_precio" class="btn btn-green btn-icon" style="float: right;">
            	Asignar precio al producto <i class="entypo-plus"></i>
            </a>
        </h2>
        <br />
<div class="table-responsive">
<table class="table table-bordered datatable" id="table-1">
           <thead>
             <tr>	
                <th>No</th> 
                <th>Producto</th>                             
            	<th>Precio base</th>
            	<th>Fecha de creaci&oacute;n</th>        	
            	<th>Fecha de expiraci&oacute;n</th>
                <th>Estado</th>
             <th width="160">Acciones</th>
      </tr>
   </thead>
   <tbody>    
   <?php
        $n = 0;
        foreach($registros as $key => $registro) 
        {
            $n++;
            echo "<tr>";        
            
            echo "<td>$n</td><td>$registro[product_name]</td><td>$registro[base_price]</td><td>$registro[date_created]</td><td>$registro[date_expiry]</td><td>$registro[in_active]</td>";
            echo "<td>
            	       <a href='?mod=producto_precio&pag=editar_producto_precio&id=$registro[id_precio]' class='btn btn-info btn-icon btn-xs'>Editar <i class='entypo-pencil'></i></a>
                       $estado
                       <!--<a href='control/producto/eliminar.php?id=$registro[id_producto]' class='accion btn btn-red btn-icon btn-xs'>Eliminar <i class='entypo-cancel'></i></a>-->
          		  </td>";
            echo "</tr>";
        }	
    ?>
        </tbody>
    	<tfoot>                            		
    	</tfoot>
    </table>
    </div>
    
    <?php
    	$producto_precio->__destroy();
    ?>