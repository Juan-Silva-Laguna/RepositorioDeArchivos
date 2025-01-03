<?php
include_once("../Entidad/ficha.entidad.php");
include_once("../Modelo/ficha.modelo.php");


$operacion= $_POST['operacion'];
$FichaE = new \entidadFicha\Ficha();

if ($operacion == 'Guardo') {
    $FichaE->setFicha($_POST['ficha']);
    $FichaE->setPrograma($_POST['programa']);
    $FichaE->setAprendices($_POST['aprendices']);
    $FichaM = new \modeloFicha\Ficha($FichaE);
    $mensaje = $FichaM->crearFicha();
}
else if ($operacion == 'Consultar'){
    $FichaM = new \modeloFicha\Ficha($FichaE);
    $mensaje = $FichaM->mostrarFichas();
}
else if ($operacion == 'Eliminar'){
    $FichaE->setFicha($_POST['ficha']);
    $FichaM = new \modeloFicha\Ficha($FichaE);
    $mensaje = $FichaM->eliminarFicha();
}
else if ($operacion == 'consultarEditar'){
    $FichaE->setFicha($_POST['ficha']);
    $FichaM = new \modeloFicha\Ficha($FichaE);
    $mensaje = $FichaM->consultarEditar();
}
else if ($operacion == 'Actualizo'){
    $FichaE->setFicha($_POST['ficha']);
    $FichaE->setPrograma($_POST['programa']);
    $FichaM = new \modeloFicha\Ficha($FichaE);
    $mensaje = $FichaM->editarFicha();
}
else if ($operacion == 'ConsultarAprendices'){
    $FichaE->setFicha($_POST['ficha']);
    $FichaM = new \modeloFicha\Ficha($FichaE);
    $mensaje = $FichaM->ConsultarAprendices();
}


unset($FichaE);
unset($FichaM);

echo json_encode($mensaje);
?>