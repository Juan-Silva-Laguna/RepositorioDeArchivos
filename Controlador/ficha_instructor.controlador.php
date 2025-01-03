<?php
include_once("../Entidad/ficha_instructor.entidad.php");
include_once("../Modelo/ficha_instructor.modelo.php");


$operacion= $_POST['operacion'];
$FichaInstructorE = new \entidadFichaInstructor\FichaInstructor();

if ($operacion == 'Asigno') {
    $FichaInstructorE->setIdFicha($_POST['ficha']);
    $FichaInstructorE->setIdInstructor($_POST['instructor']);
    $FichaInstructorM = new \modeloFichaInstructor\FichaInstructor($FichaInstructorE);
    $mensaje = $FichaInstructorM->crearFichaInstructor();
}
else if ($operacion == 'Consultar'){
    $FichaInstructorM = new \modeloFichaInstructor\FichaInstructor($FichaInstructorE);
    $mensaje = $FichaInstructorM->mostrarFichaInstructors();
}
else if ($operacion == 'Eliminar'){
    $FichaInstructorE->setIdFichaInstructor($_POST['id']);
    $FichaInstructorM = new \modeloFichaInstructor\FichaInstructor($FichaInstructorE);
    $mensaje = $FichaInstructorM->eliminarFichaInstructor();
}
else if ($operacion == 'consultarEditar'){
    $FichaInstructorE->setIdFichaInstructor($_POST['id']);
    $FichaInstructorM = new \modeloFichaInstructor\FichaInstructor($FichaInstructorE);
    $mensaje = $FichaInstructorM->consultarEditar();
}
else if ($operacion == 'Actualizo'){
    $FichaInstructorE->setIdFichaInstructor($_POST['id']);
    $FichaInstructorE->setIdFicha($_POST['ficha']);
    $FichaInstructorE->setIdInstructor($_POST['instructor']);
    $FichaInstructorM = new \modeloFichaInstructor\FichaInstructor($FichaInstructorE);
    $mensaje = $FichaInstructorM->editarFichaInstructor();
}
else if ($operacion == 'ConsultarFichasInstructor'){
    $FichaInstructorE->setIdInstructor($_POST['instructor']);
    $FichaInstructorM = new \modeloFichaInstructor\FichaInstructor($FichaInstructorE);
    $mensaje = $FichaInstructorM->ConsultarFichasInstructor();
}
else if ($operacion == 'dataListInstructor'){
    $FichaInstructorE->setIdFicha($_POST['ficha']);
    $FichaInstructorM = new \modeloFichaInstructor\FichaInstructor($FichaInstructorE);
    $mensaje = $FichaInstructorM->dataListInstructor();
}

unset($FichaInstructorE);
unset($FichaInstructorM);

echo json_encode($mensaje);
?>