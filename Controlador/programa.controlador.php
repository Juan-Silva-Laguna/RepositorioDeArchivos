<?php
include_once("../Entidad/programa.entidad.php");
include_once("../Modelo/programa.modelo.php");


$operacion= $_POST['operacion'];
$ProgramaE = new \entidadPrograma\Programa();

if ($operacion == 'Creo') {
    $ProgramaE->setIdPrograma($_POST['id']);
    $ProgramaE->setNombrePrograma($_POST['nombre']);
    $ProgramaE->setTipoPrograma($_POST['tipo']);
    $ProgramaM = new \modeloPrograma\Programa($ProgramaE);
    $mensaje = $ProgramaM->crearPrograma();
}
else if ($operacion == 'Consultar'){
    $ProgramaM = new \modeloPrograma\Programa($ProgramaE);
    $mensaje = $ProgramaM->mostrarProgramas();
}
else if ($operacion == 'Eliminar'){
    $ProgramaE->setIdPrograma($_POST['id']);
    $ProgramaM = new \modeloPrograma\Programa($ProgramaE);
    $mensaje = $ProgramaM->eliminarPrograma();
}
else if ($operacion == 'consultarEditar'){
    $ProgramaE->setIdPrograma($_POST['id']);
    $ProgramaM = new \modeloPrograma\Programa($ProgramaE);
    $mensaje = $ProgramaM->consultarEditar();
}
else if ($operacion == 'Actualizo'){
    $ProgramaE->setIdPrograma($_POST['id']);
    $ProgramaE->setNombrePrograma($_POST['nombre']);
    $ProgramaE->setTipoPrograma($_POST['tipo']);
    $ProgramaM = new \modeloPrograma\Programa($ProgramaE);
    $mensaje = $ProgramaM->editarPrograma();
}

unset($ProgramaE);
unset($ProgramaM);

echo json_encode($mensaje);
?>