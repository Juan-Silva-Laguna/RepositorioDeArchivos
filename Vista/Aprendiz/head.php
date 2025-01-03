<?php
session_start();

if ($_SESSION['rol'] != 'aprendiz') {
    header('Location: ../ingresar.php');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../Recursos/Css/bootstrap.css">
    <link rel="stylesheet" href="../../Recursos/Css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../Recursos/Css/style.css">
</head>
<body>
<!--168A45-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5eb319;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index.php">            
            <img src="../../Recursos/Img/todo.png" width="190" height="65">
        </a>
        <h3 style="padding-right: 80px;">SEN<span style="color: #fff;">PROYECTS</span></h3>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="proyectos.php"><b>Proyectos</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hacerPropuesta.php"><b>Hacer Propuesta</b></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-right: 30px;"><i class="fa fa-key"></i> Cambiar Clave</button>
        <a href="" class="btn btn-light my-2 my-sm-0" type="submit" onclick="$.post('../../Controlador/cerrar.php');"><i class="fa fa-power-off"></i>  SALIR</a>
        </form>
    </div>
    </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formCambiar">
                        <input type="hidden" id="idUser" value="<?php echo $_SESSION['id']; ?>">
                        <div class="form-group">
                            <label for="passAntigua" class="col-form-label">Clave Anterior:</label>
                            <input type="text" class="form-control" id="passAntigua">
                        </div>
                        <div class="form-group">
                            <label for="passNueva" class="col-form-label">Clave Nueva:</label>
                            <input type="password" class="form-control" id="passNueva">
                        </div>
                        <button type="submit" class="btn btn-success" id="btnCambiar">Cambiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>