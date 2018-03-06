  <?php include("modelo/categoria_descuento.php");    
            $categoria_descuento = new categoria_descuento();
            $registros = $categoria_descuento->get_all(" c inner join product_category p on c.product_category_id=p.id_categoria");    
        ?>
        <h2>Descuentos por categoria
            <a href="?mod=categoria_descuento&pag=form_categoria_descuento" class="btn btn-green btn-icon" style="float: right;">
            	Asignar descuento a la categoria <i class="entypo-plus"></i>
            </a>
        </h2>
        <br />
<div class="table-responsive">
<table class="table table-bordered datatable" id="table-1">
           <thead>
             <tr>	
              <th>No</th> 
              <th>Categoria</th>                             
            	<th>Valor de descuento</th>
            	<th>Descuento por unidad</th>        	
            	<th>Fecha de creaci&oacute;n</th>
              <th>Valido hasta</th>
              <th>Codigo del cupon</th>
              <th>Valor minimo para ordenar</th>
              <th>Cantidad maxima de descuento</th>
              <th>Estado para canjear</th>
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
            
            echo "<td>$n</td><td>$registro[category_name]</td><td>$registro[discount_value]</td><td>$registro[discount_unit]</td><td>$registro[date_created]</td><td>$registro[valid_until]</td><td>$registro[coupon_code]</td><td>$registro[minimum_order_value]</td><td>$registro[maximum_discount_amount]</td><td>$registro[is_redeem_allowed]</td>";
            echo "<td>
            	       <a href='?mod=categoria_descuento&pag=editar_categoria_descuento&id=$registro[id_categoria_descuento]' class='btn btn-info btn-icon btn-xs'>Editar <i class='entypo-pencil'></i></a>
                       $estado
                       <!--<a href='control/categoria_descuento/eliminar.php?id=$registro[id_categoria_descuento]' class='accion btn btn-red btn-icon btn-xs'>Eliminar <i class='entypo-cancel'></i></a>-->
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
    	$categoria_descuento->__destroy();
    ?>