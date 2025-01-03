<?php
include_once("../Entidad/gruposProyecto.entidad.php");
include_once("../Modelo/gruposProyecto.modelo.php");


$operacion= $_POST['operacion'];
$gruposProyectoE = new \entidadgruposProyecto\gruposProyecto();

if ($operacion == 'Creo') {
    $gruposProyectoE->setInstructor($_POST['id']);
    $gruposProyectoE->setNombre($_POST['nombre']);
    $gruposProyectoE->setDescripcion($_POST['descripcion']);
    $gruposProyectoE->setAprendices($_POST['aprendices']);
    $gruposProyectoE->setItems($_POST['items']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->creargruposProyecto();
}
else if ($operacion == 'Consultar'){
    $gruposProyectoE->setInstructor($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->mostrargruposProyectos();
}
else if ($operacion == 'Eliminar'){
    $gruposProyectoE->setIdgruposProyecto($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->eliminargruposProyecto();
}
else if ($operacion == 'consultarEditar'){
    $gruposProyectoE->setIdgruposProyecto($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->consultarEditar();
}
else if ($operacion == 'Actualizo'){
    $gruposProyectoE->setIdgruposProyecto($_POST['id']);
    $gruposProyectoE->setNombre($_POST['nombre']);
    $gruposProyectoE->setDescripcion($_POST['descripcion']);
    $gruposProyectoE->setAprendices($_POST['aprendices']);
    $gruposProyectoE->setItems($_POST['items']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->editargruposProyecto();
}
else if ($operacion == 'quitarItem'){
    $gruposProyectoE->setItems($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->quitarItem();
}
else if ($operacion == 'quitarAprendiz'){
    $gruposProyectoE->setAprendices($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->quitarAprendiz();
}
else if ($operacion == 'ConsultarProyectosAprendiz'){
    $gruposProyectoE->setAprendices($_POST['aprendiz']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->ConsultarProyectosAprendiz();
}
else if ($operacion == 'propueso') {
    $gruposProyectoE->setNombre($_POST['nombre']);
    $gruposProyectoE->setDescripcion($_POST['descripcion']);
    $gruposProyectoE->setAprendices($_POST['aprendices']);
    $gruposProyectoE->setInstructor($_POST['instructor']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->propuesta();
}
else if ($operacion == 'mostrarPropuestas') {
    $gruposProyectoE->setIdgruposProyecto($_POST['ficha']);
    $gruposProyectoE->setInstructor($_POST['instructor']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->mostrarPropuestas();
}
else if ($operacion == 'AceptarPropuesta') {
    $gruposProyectoE->setIdgruposProyecto($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->AceptarPropuesta();
}
else if ($operacion == 'publicarProyecto') {
    $gruposProyectoE->setIdgruposProyecto($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->publicarProyecto();
}
else if ($operacion == 'proyectoPublicados') {
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->proyectoPublicados();
}
else if ($operacion == 'descargar') {
    $gruposProyectoE->setIdgruposProyecto($_POST['id']);
    $gruposProyectoM = new \modelogruposProyecto\gruposProyecto($gruposProyectoE);
    $mensaje = $gruposProyectoM->descargar();
}
unset($gruposProyectoE);
unset($gruposProyectoM);

echo json_encode($mensaje);
?>