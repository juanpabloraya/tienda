  <?php include("modelo/usuario.php");    
                            $usuario = new usuarios();
                            $registros = $usuario->get_all(" u inner join persona p on u.id_usuario=p.id_usuario");    
                        ?>
                        <h2>Usuarios
                            <a href="?mod=usuario&pag=form_usuario" class="btn btn-green btn-icon" style="float: right;">
                            	Crear usuario <i class="entypo-plus"></i>
                            </a>
                        </h2>
                        <br />
                <div class="table-responsive">
                <table class="table table-bordered datatable" id="table-1">
	                       <thead>
		                     <tr>	
                                <th>No</th> 
                                <th>Apellidos y Nombres</th>                             
                            	<th>Nombre de usuario</th>
                            	<th>Email</th>                            	
                            	<th>Nivel</th>	
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
                            
                            echo "<td>$n</td><td>$registro[apellidos] $registro[nombres]</td><td>$registro[usuario]</td><td>$registro[email]</td>";
                            if($registro[nivel] == 1)
                                echo "<td>Administrador</td>";
                            else
                                echo "<td>Cliente</td>";
                            echo "<td>
                            	       <a href='?mod=usuario&pag=editar_usuario&id=$registro[id_usuario]' class='btn btn-info btn-icon btn-xs'>Editar <i class='entypo-pencil'></i></a>
                                       $estado
                                       <!--<a href='control/usuario/eliminar.php?id=$registro[id_usuario]' class='accion btn btn-red btn-icon btn-xs'>Eliminar <i class='entypo-cancel'></i></a>-->
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
                    	$usuario->__destroy();
                    ?>