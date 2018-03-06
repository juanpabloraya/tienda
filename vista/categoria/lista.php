  <?php include("modelo/categoria.php");    
        $categoria = new categoria();
        $registros = $categoria->get_all("");    
        ?>
        <h2>Categorias
        <a href="?mod=categoria&pag=form_categoria" class="btn btn-green btn-icon" style="float: right;">
        Crear categoria <i class="entypo-plus"></i>
        </a>
        </h2>
        <br />
        <div class="table-responsive">
        <table class="table table-bordered datatable" id="table-1">
        <thead>
        <tr>	
        <th>No</th> 
        <th>Nombre de la categoria</th>                             
        <th>Maximo recompensa de puntos</th>
        <th>Categoria hijo</th>                           	
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

        echo "<td>$n</td><td>$registro[category_name]</td><td>$registro[max_reward_points_encash]</td><td>$registro[parent_category_id]</td>";
        echo "<td>
        <a href='?mod=categoria&pag=editar_categoria&id=$registro[id_categoria]' class='btn btn-info btn-icon btn-xs'>Editar <i class='entypo-pencil'></i></a>
        $estado
        <!--<a href='control/categoria/eliminar.php?id=$registro[id_categoria]' class='accion btn btn-red btn-icon btn-xs'>Eliminar <i class='entypo-cancel'></i></a>-->
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
        $categoria->__destroy();
        ?>