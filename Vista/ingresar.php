<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Recursos/Css/bootstrap.css">
    <link rel="stylesheet" href="../Recursos/Css/style.css">  
</head>
<body>
<!--168A45-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5eb319;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index.php">            
            <img src="../Recursos/Img/todo.png" width="190" height="65">
        </a>
        <h3 style="padding-right: 80px;">SEN<span style="color: #fff;">PROYECTS</span></h3>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><b>Inicio</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="proyectos.php"><b>Proyectos</b></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a href="ingresar.php" class="btn btn-light my-2 my-sm-0" type="submit"><i class="fa fa-user-circle-o"></i>  INGRESAR</a>
        </form>
    </div>
    </nav>
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../Recursos/Img/logo.png" class="brand_logo" width="180" height="150">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form autocomplete="off" id="formLogin">  
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="correo" class="form-control input_user" value="" placeholder="Correo" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="pass" class="form-control input_pass" value="" placeholder="Contraseña" required>
						</div>
						<!---<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
            </div>-->
            <br>
						<div class="d-flex justify-content-center mt-3 login_container">
               <input type="submit"  name="button" class="btn login_btn" value="Ingresar">
				    </div>
					</form>
				</div>		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="#" class="ml-2">¿Olvidaste Tu Contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	    <!-- Footer -->
		<footer class="page-footer font-small indigo" style="background-color: #F5F5F5;">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-md-4 mx-auto">
				<br><b>¿Necesita más información?</b> <br><br> <i class="fa fa-phone"></i>Bogotá: <b>3430111</b> <br> <i class="fa fa-phone"></i>Resto del país: <b>018000910270</b>
			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none">

			<!-- Grid column -->
			<div class="col-md-2 mx-auto">
			<br><b>Encuentranos en:</b> <br><br>
			<a href="https://www.facebook.com/SENA"> <i class="fa fa-facebook" style="font-size: 30px;"></i> </a> 
			<a href="https://twitter.com/SENAComunica"> <i class="fa fa-twitter" style="font-size: 30px;"></i> </a> 
			<a href="https://www.youtube.com/user/SENATV"> <i class="fa fa-youtube" style="font-size: 30px;"></i> </a> 
			<a href="https://www.instagram.com/senacomunica/"> <i class="fa fa-instagram" style="font-size: 30px;"></i> </a> 
			</div>
			<hr class="clearfix w-100 d-md-none">
			<div class="col-md-6 mx-auto">
			<br><b>Horario de atención: </b><br><br> Lunes a Viernes 7:00 am a 7:00 pm - Sábados 8:00 am a 1:00 pm <br> Todos los derechos reservados - 2006 / 2014
			</div>
			<!-- Grid column -->

		</div>
		</div>
		<br>
		<div class="footer-copyright text-center py-3"  style="background-color: #BDBDBD;">© 2020 Copyright:
		<a href="https://www.sena.edu.co/es-co/Paginas/default.aspx"> SENA</a>
		</div>
		<!-- Copyright -->

		</footer>
	<script src="../Recursos/Js/jquery.js"></script>  	
  
	<script src="../Recursos/Js/bootstrap.js"></script> 
	<script src="Ajax/login.js"></script> 
</body>
</html>