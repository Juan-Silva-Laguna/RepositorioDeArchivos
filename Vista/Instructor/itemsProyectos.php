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
    </div><br>
    <center><button disabled class="btn btn-success" id="btnPublicar"><i class="fa fa-cloud-upload"></i> Publicar Proyecto</button></center>
    <br>
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?> 
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
   mostrar();        
    $(document).on('click', '.aprobar', function (e) {
        let datos = {
            id: $($(this)[0]).attr('id'),
            operacion: 'aprobar'
        }
        console.log(datos);
        $.post('../../Controlador/itemsProyecto.controlador.php',datos, function (respuesta) {
            if (respuesta == '1') {
                //alertify.success('Se elimino la ficha con exito!!');
                alert('Se aprobo el item con exito!!');
            }else{
                //alertify.error('Error no se logro eliminar la ficha');
                alert('Error no se logro aprobar el item');
            }
            mostrar();
        })

        e.preventDefault();
    }); 

    $(document).on('click', '.rechazar', function (e) {
        let datos = {
            id: $($(this)[0]).attr('id'),
            url: $($(this)[0]).val(),
            operacion: 'rechazar'
        }
        
        $.post('../../Controlador/itemsProyecto.controlador.php',datos, function (respuesta) {
            if (respuesta == '1') {
                //alertify.success('Se elimino la ficha con exito!!');
                alert('Se qrechazo el item con exito!!');
            }else{
                //alertify.error('Error no se logro eliminar la ficha');
                alert('Error no se logro rechazar el item');
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
                table += `<tr class="${(val.estadoItem == 'Aprobado')?'table-success':''} ${(val.estadoItem == 'Rechazado')?'table-danger':''}">`;
                table += '<td>'+val.nombreItem+'</td>';
                table += '<td>'+val.estadoItem+'</td>';
                table += `<td>${((val.url == '' || val.estadoItem == 'En Proceso' || val.estadoItem == 'Rechazado')? '---': '<a href="'+val.url+'" class="btn btn-info" > <i class="fa fa-download"></i> Descargar</button>')}</td>`;
                table += `<td>${((val.url == '' || val.estadoItem == 'En Proceso' || val.estadoItem == 'Aprobado' || val.estadoItem == 'Rechazado')? '---':'<button class="aprobar btn btn-success" id='+val.idItem+'> <i class="fa fa-check-square-o "></i></button> <button class="rechazar btn btn-danger" value='+val.url+' id='+val.idItem+'><i class="fa fa-window-close-o "></i> </button>')} </td>`;
                table += '</tr>';
                cant++;
                if (val.estadoItem == 'Aprobado') {
                    cont++;
                }
            }); 
            if (cant == cont) {
                $('#btnPublicar').attr('disabled', false);
            }
            $('#cuerpotablaItems').html(table);
            $('#tablaItems').dataTable();
        });  
    }

    $(document).on('click', '#btnPublicar', function (e) {
        $.post('../../Controlador/gruposProyecto.controlador.php',{id: $('#idProyecto').val(), operacion: 'publicarProyecto'}, function (respuesta) {
            if (respuesta == '1') {
                //alertify.success('Se elimino la ficha con exito!!');
                alert('Se publico el proyecto con exito!!');
            }else{
                //alertify.error('Error no se logro eliminar la ficha');
                alert('Error no se logro publicar el proyecto');
            }
            mostrar();
        })
    });
});
</script>

</body>
</html>