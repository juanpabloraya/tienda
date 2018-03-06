<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />    
	<meta name="description" content=""/>
	<meta name="author" content="xavie2" />

	<title>INGRESAR - SISTEMA DE ADMINISTRACI&Oacute;N</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/skins/white.css">

	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.php" class="logo">
				<img src="assets/images/ulogo.png" width="300" alt="" />
			</a>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>100%</h3>
				<span>Procesando...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content" id="login">			
			<div class="form-login-error">
				<h3>Inicio de Sesi&oacute;n err&oacute;neo</h3>
				<p><strong>Datos</strong> incorrectos.</p>
			</div>
			<form method="post" role="form" id="form_login" action="" class="validate">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Usuario" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Iniciar Sessi&oacute;n
					</button>
				</div>
				
			</form>
			<div class="login-bottom-links">				
				<a href="#" class="link recuperar-pass">Recuperar contrase&ntilde;a</a>				
			</div>
		</div>
		
        <div class="login-content" id="recuperar" style="display: none;">            
            <form method="post" role="form" id="form_forgot_password">
				<div class="form-forgotpassword-success">					
					<h3>Su contrase&ntilde;a fu&eacute; enviada.</h3>
					<p>Por favor revise su correo.</p>
				</div>
				<div class="form-login-error form-forgotpassword-failed">
    				<h3>Correo inv&aacute;lido</h3>
    				<p>El correo no est&aacute; registrado.</p>
    			</div>
				<div class="form-steps">
					
					<div class="step current" id="step-1">
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-mail"></i>
								</div>
								
								<input type="text" class="form-control" name="email" id="email" placeholder="Correo" data-mask="email" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block btn-login">								
								<i class="entypo-right-open-mini"></i>
                                Enviar solicitud de recuperaci&oacute;n
							</button>
						</div>
					
					</div>
					
				</div>
				
			</form>
            <div class="login-bottom-links">				
				<a href="#" class="link volver-inicio">Volver a Inicio de Sesi&oacute;n</a>				
			</div>
        </div>
	</div>
	
</div>


	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	
    <script src="assets/js/neon-forgotpassword.js"></script>
    <script src="assets/js/neon-login.js"></script>
    

	<!-- 
	<script src="assets/js/neon-custom.js"></script>

	<script src="assets/js/neon-demo.js"></script>
    -->
     
</body>
</html>