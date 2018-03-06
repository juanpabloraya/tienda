<div class="row" id="top-datos">		
    <!-- Profile Info and Notifications -->
	<div class="col-md-12 clearfix">

		<ul class="list-inline links-list pull-left">

			<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">							
                    <i class="entypo-user"></i>
					<?php echo $_SESSION[usuario];  ?> <i class="entypo-down-open"></i>
				</a>

				<ul class="dropdown-menu">

					<!-- Reverse Caret -->
					<li class="caret"></li>

					<!-- Profile sub-links -->
					<li>
						<a href="?mod=usuarios&pag=editar_datos&id=<?php echo $_SESSION[id_usuario];  ?>">									
							Modificar Datos
						</a>
					</li>
				</ul>
			</li>
            <li class="sep"></li>
            <li>
                <span><?php echo $_SESSION[nombre_nivel];  ?></span>
            </li>
		</ul>
        
        <ul class="list-inline links-list pull-right">		
			<li>
				<a href="control/sesion/cerrar_sesion.php" class="salir">
					Salir <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>		
	</div>		
	<!-- Raw Links -->
	
    
</div>
