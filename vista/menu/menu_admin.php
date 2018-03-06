<?php
	
?>
<div class="sidebar-menu-inner">			
	<header class="logo-env">
		<div class="logo">
			<a href="index.php">
				<img src="assets/images/logo@2x.png" width="170" alt="" />
			</a>
		</div>
		<div class="sidebar-collapse">
			<a href="#" class="sidebar-collapse-icon menu-icon">
				<i class="entypo-menu"></i>
			</a>
		</div>
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation menu-icon">
				<i class="entypo-menu"></i>
			</a>
		</div>
	</header>
					
	<ul id="main-menu" class="main-menu">		
		<li class="">
			<a href="#">						
                <i class="entypo-cog"></i>
				<span class="title">ADMINISTRACI&Oacute;N</span>
			</a>
			<ul>  
                
				<li class="">
					<a href="?mod=usuario&pag=lista">
                        <i class="fa fa-user"></i>
						<span class="title">Usuarios</span>
					</a>
				</li>
				<li class="">
					<a href="?mod=categoria&pag=lista">
                        <i class="fa fa-user"></i>
						<span class="title">Categorias de producto</span>
					</a>
				</li>
				<li class="">
					<a href="?mod=producto&pag=lista">
                        <i class="fa fa-user"></i>
						<span class="title">Productos</span>
					</a>
				</li>
				<li class="">
					<a href="?mod=producto_precio&pag=lista">
                        <i class="fa fa-user"></i>
						<span class="title">Precios de productos</span>
					</a>
				</li>
				<li class="">
					<a href="?mod=categoria_descuento&pag=lista">
                        <i class="fa fa-user"></i>
						<span class="title">Configuraci&oacute;n de descuento por categoria</span>
					</a>
				</li>
				<li class="">
					<a href="?mod=producto_descuento&pag=lista">
                        <i class="fa fa-user"></i>
						<span class="title">Configuraci&oacute;n de descuento por productos</span>
					</a>
				</li>
				                
			</ul>
		</li>
		
		
		<li class="">
			<a href="#">						
                <i class="entypo-cog"></i>
				<span class="title">REPORTES</span>
			</a>
			<ul>
				<li>
					<a href="?mod=pago_cuotas&pag=buscar_coop_reporte">
                        <i class="fa fa-book"></i>
						<span class="title">Productos vendidos con descuento</span>
					</a>
				</li>
                <li>
					<a href="?mod=ingresos&pag=entre_fechas">
                        <i class="fa fa-book"></i>
						<span class="title">Ventas entre fechas</span>
					</a>
				</li>
				               
			</ul>
		</li>
        
	</ul>	
</div>