 <?php include("modelo/producto_descuento.php");    
            $producto_descuento = new producto_descuento();
            $registros = $producto_descuento->get_all(" pd inner join product p on pd.product_id=p.id_producto");    
        ?>
        <h2>Descuentos por producto
            <a href="?mod=producto_descuento&pag=form_producto_descuento" class="btn btn-green btn-icon" style="float: right;">
              Asignar descuento al producto <i class="entypo-plus"></i>
            </a>
        </h2>
        <br />
<div class="table-responsive">
<table class="table table-bordered datatable" id="table-1">
           <thead>
             <tr> 
              <th>No</th> 
              <th>Producto</th>                             
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
            
            echo "<td>$n</td><td>$registro[product_name]</td><td>$registro[discount_value]</td><td>$registro[discount_unit]</td><td>$registro[date_created]</td><td>$registro[valid_until]</td><td>$registro[coupon_code]</td><td>$registro[minimum_order_value]</td><td>$registro[maximum_discount_amount]</td><td>$registro[is_redeem_allowed]</td>";
            echo "<td>
                     <a href='?mod=producto_descuento&pag=editar_producto_descuento&id=$registro[id_producto_descuento]' class='btn btn-info btn-icon btn-xs'>Editar <i class='entypo-pencil'></i></a>
                      
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
      $producto_descuento->__destroy();
    ?>