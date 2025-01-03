<?php
include_once("../Entidad/instructor.entidad.php");
include_once("../Modelo/instructor.modelo.php");


$operacion= $_POST['operacion'];
$InstructorE = new \entidadInstructor\Instructor();

if ($operacion == 'Creo') {
    
    $InstructorE->setTipoDoc($_POST['tipodoc']);
    $InstructorE->setDoc($_POST['doc']);
    $InstructorE->setNombres($_POST['nombres']);
    $InstructorE->setApellidos($_POST['apellidos']);
    $InstructorE->setCelular($_POST['celular']);
    $InstructorE->setCorreo($_POST['correo']);
    $InstructorE->setProfesion($_POST['profesion']);
    $InstructorE->setDescripcion($_POST['descripcion']);
    $InstructorM = new \modeloInstructor\Instructor($InstructorE);
    $mensaje = $InstructorM->crearInstructor();
}
else if ($operacion == 'Consultar'){
    $InstructorM = new \modeloInstructor\Instructor($InstructorE);
    $mensaje = $InstructorM->mostrarInstructors();
}
else if ($operacion == 'Eliminar'){
    $InstructorE->setDoc($_POST['doc']);
    $InstructorM = new \modeloInstructor\Instructor($InstructorE);
    $mensaje = $InstructorM->eliminarInstructor();
}
else if ($operacion == 'consultarEditar'){
    $InstructorE->setDoc($_POST['doc']);
    $InstructorM = new \modeloInstructor\Instructor($InstructorE);
    $mensaje = $InstructorM->consultarEditar();
}
else if ($operacion == 'Actualizo'){
    $InstructorE->setTipoDoc($_POST['tipodoc']);
    $InstructorE->setDoc($_POST['doc']);
    $InstructorE->setNombres($_POST['nombres']);
    $InstructorE->setApellidos($_POST['apellidos']);
    $InstructorE->setCelular($_POST['celular']);
    $InstructorE->setCorreo($_POST['correo']);
    $InstructorE->setProfesion($_POST['profesion']);
    $InstructorE->setDescripcion($_POST['descripcion']);
    $InstructorM = new \modeloInstructor\Instructor($InstructorE);
    $mensaje = $InstructorM->editarInstructor();
}


unset($InstructorE);
unset($InstructorM);

echo json_encode($mensaje);
?>