  <?php include("modelo/producto.php");    
                            $producto = new producto();
                            $registros = $producto->get_all(" p inner join product_category c on c.id_categoria=p.product_category_id");    
                        ?>
                        <h2>Productos
                            <a href="?mod=producto&pag=form_producto" class="btn btn-green btn-icon" style="float: right;">
                            	Crear producto <i class="entypo-plus"></i>
                            </a>
                        </h2>
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
                            	       <a href='?mod=producto&pag=editar_producto&id=$registro[id_producto]' class='btn btn-info btn-icon btn-xs'>Editar <i class='entypo-pencil'></i></a>
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
                    	$producto->__destroy();
                    ?>