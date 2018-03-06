<?php
	$url_actual = $_SERVER["QUERY_STRING"];
    include("modelo/conexion.php");
    include("modelo/funciones.php");

    $bd = new conexion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />	
	<meta name="author" content="pablex" />

    <title>SISTEMA DE ADMINISTRACI&Oacute;N</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"/>
    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery.ui.theme.css"/>
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css"/>
    <link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.min.css"/>
	<!--
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	-->
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	<link rel="stylesheet" href="assets/css/neon-core.css"/>
	<link rel="stylesheet" href="assets/css/neon-theme.css"/>
	<link rel="stylesheet" href="assets/css/neon-forms.css"/>
	
    <link rel="stylesheet" href="assets/css/alerts.css"/>
    <link rel="stylesheet" href="assets/css/custom.css"/>
    <link rel="stylesheet" href="assets/css/skins/white.css"/>

    <script src="assets/js/jquery.js"></script>    
    <!--<script src="assets/js/jquery-1.11.0.min.js"></script>-->
    
	<script> 
        $.noConflict();
    </script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>

</head>
<body class="page-body"><!--page-fade-->

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">
        <?php
	           //include("vista/menu/menu.php");
               
               if($_SESSION[nivel] == 1)
                   include("vista/menu/menu_admin.php");
               
               if($_SESSION[nivel] == 2)
                   include("vista/menu/menu_usuario.php");
                   
               if($_SESSION[nivel] == 'Alumno')
                   include("vista/menu/menu_alumno.php");
               
               if(strtolower($_SESSION[nivel]) == 'coordinador')
                   include("vista/menu/menu_coordinador.php");
               
               if(strtolower($_SESSION[nivel]) == 'secretaria')
                   include("vista/menu/menu_secretaria.php");    
        ?>
	</div>

	<div class="main-content">
		<?php
	           include("vista/paginas/info.php");
        ?>

		<div class="row">
            <div class="col-md-12">
                
                <?php   
                
                        $page = $_GET['pag'];                              
                        $mod = $_GET['mod'];
                        
                        if (isset($_GET['mod']) && isset($_GET['pag'])) {
                            
                        if ($mod != '' && $page !='') {
                            if (file_exists('vista/'.$mod.'/' . $page . '.php')) {
                                include ('vista/'.$mod.'/' . $page . '.php');
                            }else {
                                include ('vista/paginas/error.php');
                            }
                        } else {
                            include ('vista/paginas/inicio.php');                                    
                        }
                             
                        } else {
                            include ('vista/paginas/inicio.php');
                        } 
                ?>
                
            </div>
        </div>
        
		
		
		
		
		
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2018 | <strong>SISTEMA DE ADMINISTRACI&Oacute;N TIENDA VIRTUAL</strong> 
		
		</footer>
	</div>


	
</div>
	<!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">	

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
    
    <script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/datatables/TableTools.min.js"></script>
    
	<script src="assets/js/neon-api.js"></script>
	
    
    <script src="assets/js/ckeditor/ckeditor.js"></script>
	<script src="assets/js/ckeditor/adapters/jquery.js"></script>
    <script src="ckfinder/ckfinder.js"></script>


    <script src="assets/js/alerts.js"></script>
    <script src="assets/js/validation/validation.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    
    <script src="assets/js/jkvalidator.js"></script>
    <script src="assets/js/acciones.js"></script>
    
    <script src="assets/js/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="assets/js/datatables/lodash.min.js"></script>
	<script src="assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
    <script src="assets/js/typeahead.min.js"></script>
    
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/bootstrap-timepicker.min.js"></script>
    
	<!-- JavaScripts initializations and stuff -->
    <script src="assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="assets/js/neon-custom.js"></script>

	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

    <script src="assets/js/myDatatables.js"></script>
    

</body>
</html>
<?php
	$bd->Cerrar();
?>