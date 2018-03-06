<div class="sidebar-menu-inner">			
	<header class="logo-env">
		<!-- logo -->
		<div class="logo">
			<a href="index.php">
				<img src="assets/images/logo@2x.png" width="120" alt="" />
			</a>
		</div>
		<!-- logo collapse icon -->
		<div class="sidebar-collapse">
			<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
				<i class="entypo-menu"></i>
			</a>
		</div>
		<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
				<i class="entypo-menu"></i>
			</a>
		</div>
	</header>
					
	<ul id="main-menu" class="main-menu">
		<!-- add class "multiple-expanded" to allow multiple submenus to open -->
		<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
		<li>
			<a href="#">						
                <i class="entypo-cog"></i>
				<span class="title">Administraci&oacute;n</span>
			</a>
			<ul>
                <!--
                <li class="">
					<a href="?mod=empresa&pag=form_empresa">
                        <i class="entypo-vcard"></i>
						<span class="title">Datos Web</span>
					</a>
				</li>
				-->                
                <li class="">
					<a href="?mod=persona&pag=lista">
                        <i class="fa fa-users"></i>
						<span class="title">Trabajadores</span>
					</a>
				</li>
                
                <li>
					<a href="?mod=usuario&pag=lista">
                        <i class="fa fa-user"></i>
						<span class="title">Usuarios</span>
					</a>
				</li>
				<li>
					<a href="?mod=proveedor&pag=lista">
                        <i class="fa fa-suitcase"></i>
						<span class="title">Proveedores</span>
					</a>
				</li>
                <li>
					<a href="?mod=almacen&pag=lista">
                        <i class="fa fa-home"></i>
						<span class="title">Almacenes</span>
					</a>
				</li>
                <li>
					<a href="?mod=ruta&pag=lista">
                        <i class="fa fa-road"></i>
						<span class="title">Rutas</span>
					</a>
				</li>
                <li>
					<a href="?mod=gasto&pag=lista">
                        <i class="fa fa-money"></i>
						<span class="title">Gastos</span>
					</a>
				</li>
			</ul>
		</li>
		
		<li>
			<a href="#" >
				<i class="entypo-doc-text-inv"></i>
				<span class="title">Productos</span>
			</a>
            <ul>
                <li class="">
					<a href="?mod=presentacion&pag=lista">
                        <i class="entypo-cup"></i>
						<span class="title">Presentaci&oacute;n</span>
					</a>
				</li>
				<li class="">
					<a href="?mod=producto&pag=lista">
                        <i class="entypo-doc-text"></i>
						<span class="title">Producto</span>
					</a>
				</li>
				
			</ul>
		</li>
		
        <li>
			<a href="#" >
				<i class="entypo-home"></i>
				<span class="title">Almac&eacute;n</span>
			</a>
            <ul>
                <li class="">
					<a href="?mod=ingreso_almacen&pag=form_ingreso_almacen">
                        <i class="entypo-download"></i>
						<span class="title">Registrar Entrada</span>
					</a>
				</li>
                <li class="">
					<a href="?mod=salida_almacen&pag=form_salida_almacen">
                        <i class="entypo-upload"></i>
						<span class="title">Registrar Salida</span>
					</a>
				</li>
                <li class="">
					<a href="?mod=producto_almacen&pag=lista">
                        <i class="entypo-doc-text"></i>
						<span class="title">Stock de Productos</span>
					</a>
				</li>                
			</ul>
		</li>
        
        <li>
		    <a href="#" >
				<i class="entypo-bag"></i>
				<span class="title">Activos</span>
			</a>    
            <ul>
                <li>
                    <a href="?mod=activo&pag=lista">
                        <i class="entypo-bag"></i>
        				<span class="title">Propios</span>
        			</a>    
                </li>
                <li>
                    <a href="?mod=activo_proveedor&pag=lista">
                        <i class="entypo-bag"></i>
        				<span class="title">Prestados de proveedores</span>
        			</a>    
                </li>
            </ul>
		</li>
        
		<li>
			<a href="#" >
				<i class="entypo-monitor"></i>
				<span class="title">Pedidos</span>
			</a>
            <ul>
                <li class="">
					<a href="?mod=pedido&pag=form_pedido">
                        <i class="entypo-keyboard"></i>
						<span class="title">Registrar Pedido</span>
					</a>
				</li>
				<li class="">
					<a href="?mod=pedido&pag=lista">
                        <i class="entypo-doc-text"></i>
						<span class="title">Lista Pedidos</span>
					</a>
				</li>
				
			</ul>
		</li>	
        
        <li>
			<a href="?mod=gasto_ruta&pag=lista" >
				<i class="entypo-window"></i>
				<span class="title">Gastos</span>
			</a>            
		</li>
        		
	</ul>	
</div>