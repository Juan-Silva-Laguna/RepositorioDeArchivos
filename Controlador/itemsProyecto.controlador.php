<?php
include_once("../Entidad/itemsProyecto.entidad.php");
include_once("../Modelo/itemsProyecto.modelo.php");


$operacion= $_POST['operacion'];
$ItemsProyectoE = new \entidadItemsProyecto\ItemsProyecto();

if ($operacion == 'mostrarItemsProyectos'){
    $ItemsProyectoE->setIdItemsProyecto($_POST['id']);
    $ItemsProyectoM = new \modeloItemsProyecto\ItemsProyecto($ItemsProyectoE);
    $mensaje = $ItemsProyectoM->mostrarItemsProyectos();
}
else if ($operacion == 'aprobar'){
    $ItemsProyectoE->setIdItemsProyecto($_POST['id']);
    $ItemsProyectoM = new \modeloItemsProyecto\ItemsProyecto($ItemsProyectoE);
    $mensaje = $ItemsProyectoM->aprobar();
}
else if ($operacion == 'rechazar'){
    $ItemsProyectoE->setIdItemsProyecto($_POST['id']);
    $ItemsProyectoE->setUrl($_POST['url']);
    $ItemsProyectoM = new \modeloItemsProyecto\ItemsProyecto($ItemsProyectoE);
    $mensaje = $ItemsProyectoM->rechazar();
}
else if ($operacion == 'publicar'){
    $ItemsProyectoE->setIdItemsProyecto($_POST['id']);
    $ItemsProyectoM = new \modeloItemsProyecto\ItemsProyecto($ItemsProyectoE);
    $mensaje = $ItemsProyectoM->editarItemsProyecto();
}
else if ($operacion == 'enviarItem'){
    $ItemsProyectoE->setIdItemsProyecto($_POST['id']);
    $ItemsProyectoE->setUrl($_POST['url']);
    $ItemsProyectoM = new \modeloItemsProyecto\ItemsProyecto($ItemsProyectoE);
    $mensaje = $ItemsProyectoM->enviarItem();
}
else if ($operacion == 'eliminar'){
    $ItemsProyectoE->setIdItemsProyecto($_POST['id']);
    $ItemsProyectoE->setUrl($_POST['url']);
    $ItemsProyectoM = new \modeloItemsProyecto\ItemsProyecto($ItemsProyectoE);
    $mensaje = $ItemsProyectoM->eliminar();
}

unset($ItemsProyectoE);
unset($ItemsProyectoM);

echo json_encode($mensaje);
?>