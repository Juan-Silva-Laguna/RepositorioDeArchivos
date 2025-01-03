<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Lista de Checkeo del Proyecto <?php echo $_POST['nombreProyecto']?></h1></center>
        <input type="hidden" id="idProyecto" value="<?php echo $_POST['idProyecto']?>">              
        <table id="tablaItems">
            <thead>
                <tr>
                    <th>Nombre de Item</th>
                    <th>Estado</th>
                    <th>Evidencia</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody id="cuerpotablaItems"></tbody>
        </table>
    </div><br><br>
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?>
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
   mostrar();    
    $(document).on('click', '.eliminar', function (e) {
        let datos = {
            id: $($(this)[0]).attr('id'),
            url: $($(this)[0]).val(),
            operacion: 'eliminar'
        }    
        $.post('../../Controlador/itemsProyecto.controlador.php',datos, function (respuesta) {
            if (respuesta == '1') {
                //alertify.success('Se elimino la ficha con exito!!');
                alert('Se elimino el archivo con exito!!');
            }else{
                //alertify.error('Error no se logro eliminar la ficha');
                alert('Error no se logro eliminar el archivo');
            }
            mostrar();
        })
        e.preventDefault();
    }); 

    function mostrar() {
        $('#tablaItems').dataTable().fnDestroy();
        $.post('../../Controlador/itemsProyecto.controlador.php', {operacion: 'mostrarItemsProyectos', id: $('#idProyecto').val()}, function (respuesta) {
            var table = null;  
            let datos = JSON.parse(respuesta);
            let cont = 0,cant = 0;
            $.each(datos, function(index, val) {
                table += `<tr id="${val.idItem}" class="${(val.estadoItem == 'Aprobado')?'table-success':''} ${(val.estadoItem == 'Rechazado')?'table-danger':''}">`;
                table += '<td>'+val.nombreItem+'</td>';
                table += '<td>'+val.estadoItem+'</td>';
                table += `<td>${((val.url == '' || val.estadoItem == 'En Proceso' || val.estadoItem == 'Rechazado')? `<input type="file" class="form-control archivo" id="archivo${index}">`:'<a href="../'+val.url+'" class="btn btn-info" > <i class="fa fa-download"></i> Descargar</button>')}</td>`;
                table += `<td>${((val.url == '' || val.estadoItem == 'En Proceso' || val.estadoItem == 'Aprobado' || val.estadoItem == 'Rechazado')? '':'<button class="eliminar btn btn-danger" value='+val.url+' id='+val.idItem+'> <i class="fa fa-trash-o "></i></button>')} </td>`;
                table += '</tr>';
                cant++;
            }); 
            $('#cuerpotablaItems').html(table);
            $('#tablaItems').dataTable();
        });  
    }
    
    $(document).on('change', '.archivo', function (e) {
        let idItem = $($(this)[0].parentElement.parentElement).attr('id');
        e.preventDefault();
        let inputFileImage = document.getElementById(e.target.id);
        let file = inputFileImage.files[0];
        let data = new FormData();
        data.append('archivo',file);
        $.ajax({
            url:"../../Controlador/almacenarArchivos.php",
            type:'POST',
            contentType:false,
            data:data,
            processData:false,
            cache:false
        })
        .done(function(respuesta){
            switch (respuesta) {
            case "0":
                alert('Error: Por favor cambie el nombre del archivo para subirlo');
                $("#archivo").val('');
            break;
            case "1":
                alert('Ocurrió algún error al subir el fichero. Intente de nuevo');
                $("#archivo").val('');
                break;   
            default:
                alert('Se ha cargado con exitos el archivo');
                const datos={
                    id: idItem,
                    url: respuesta,
                    operacion: 'enviarItem'
                }
                $.post('../../Controlador/itemsProyecto.controlador.php', datos, function (respuesta) {
                        //alertify.success(`Se ${datos.operacion} la instructor con exito!!`);
                        alert(`Se envio el archivo con exito!!`);
                    mostrar();
                });
                break;
            }    
        });
    });
});
</script>

</body>
</html>