  <?php include("modelo/producto.php"); 

        $id_categoria = security($_GET[id]);

            $producto = new producto();
            $registros = $producto->get_all(" p inner join product_category c on c.id_categoria=p.product_category_id where c.id_categoria = $id_categoria");    
        ?>
        <a href="#" class="cancelar btn btn-green btn-icon">
        Volver <i class="entypo-back"></i>
        </a>
        <h2>Productos</h2>
        <br />
<div class="table-responsive">
<table class="table table-bordered datatable" id="table-1">
           <thead>
             <tr>	
                <th>No</th> 
                <th>Nombre del producto</th>                             
            	<th>Descripci&oacute;n del producto</th>
            	<th>Unidades en stock</th>                            	
            	<th>Categoria</th>
                <th>Puntos para canjear</th>
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
            
            echo "<td>$n</td><td>$registro[product_name]</td><td>$registro[product_description]</td><td>$registro[units_in_stock]</td><td>$registro[category_name]</td><td>$registro[reward_points_credit]</td>";
            echo "<td>
            	       <a href='?mod=producto&pag=comprar_producto&id=$registro[id_producto]' class='btn btn-info btn-icon btn-xs'>Comprar<i class='entypo-pencil'></i></a>
                
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
    	$producto->__destroy();
    ?>