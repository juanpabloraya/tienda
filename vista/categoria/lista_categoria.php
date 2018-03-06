  <?php include("modelo/categoria.php");    
        $categoria = new categoria();
        $registros = $categoria->get_all("");    
        ?>
        <h2>Categorias</h2>
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
        <a href='?mod=producto&pag=lista_categoria&id=$registro[id_categoria]' class='btn btn-info btn-icon btn-xs'>Lista Categoria <i class='entypo-pencil'></i></a>
     
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