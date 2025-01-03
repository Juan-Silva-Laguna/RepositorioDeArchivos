<?php
include_once("../Entidad/login.entidad.php");
include_once("../Modelo/login.modelo.php");


$operacion= $_POST['operacion'];
$LoginE = new \entidadLogin\Login();

if ($operacion == 'Ingresar') {
    $LoginE->setCorreo($_POST['correo']);
    $LoginE->setPass($_POST['pass']);
    $LoginM = new \modeloLogin\Login($LoginE);
    $mensaje = $LoginM->login();
}
else if ($operacion == 'Salir'){
    $LoginM = new \modeloLogin\Login($LoginE);
    $mensaje = $LoginM->salir();
}
if ($operacion == 'Cambiar') {
    $LoginE->setId($_POST['id']);
    $LoginE->setPass($_POST['antigua']);
    $LoginE->setNueva($_POST['nueva']);
    $LoginM = new \modeloLogin\Login($LoginE);
    $mensaje = $LoginM->cambiarClave();
}

unset($LoginE);
unset($LoginM);

echo json_encode($mensaje);
?>