<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Proyectos Propuestos</h1></center>
        <div class="row">
        <input type="hidden" id="id_instructor" value="<?php echo $_SESSION['idInstructor'];?>">
            <div class="col-md-12"><br><br>
                    <table class="table-responsive" id="tablaPropuesta">
                        <thead>
                            <tr>
                                <th>Nombre de Proyecto</th>
                                <th>Descripción</th>
                                <th>Grupo</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTablaPropuesta"></tbody>
                    </table>
                <br><br></div>
            </div>
            
        </div>
    </div>
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?>
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
 read();
    
    function read(){        
        $('#tablaPropuesta').dataTable().fnDestroy();
        let datos = {
            ficha: '',
            instructor: $('#id_instructor').val(),
            operacion: 'mostrarPropuestas'
        };   
        $.post('../../Controlador/gruposProyecto.controlador.php', datos, function (respuesta) {
            var table = null;  
            let datos = JSON.parse(respuesta);
            $.each(datos, function(index, val) {
                table += '<tr id='+val.idProyecto+'>';
                table += '<td>'+val.nombreProyecto+'</td>';
                table += '<td>'+val.descripcionProyecto+'</td>';
                table += '<td><ul>';
                $.each(val[0], function(i, dato) {
                    table += '<li>'+dato.nombres+" "+dato.apellidos+'</li>';
                });
                table += '</ul></td>';
                table += '<td>'+val.estado+'</td>';
                table += `<td><button class="eliminar btn btn-danger" ><i class="fa fa-ban"></i> </button> <button class="aceptar btn btn-success" > <i class="fa fa-check"></i></button></td>`;
                table += '</tr>';
            });            
            $('#cuerpoTablaPropuesta').html(table);
            $('#tablaPropuesta').dataTable();
        })
        .fail(function(){
            console.log('Hay errores');
        })
    }

    $(document).on('click', '.eliminar', function (e) {        
        let elemento = $(this)[0].parentElement.parentElement;
        let ide = $(elemento).attr('id');
        const datos = {
            id: ide,
            operacion: 'Eliminar'
        };
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {            
            if (confirm("Esta seguro de eliminar esta ficha?")) {                
                $.post('../../Controlador/gruposProyecto.controlador.php',datos, function (respuesta) {
                    if (respuesta == '1') {
                        //alertify.success('Se elimino la ficha con exito!!');
                        alert('Se elimino la propuesta con exito!!');
                    }else{
                        //alertify.error('Error no se logro eliminar la ficha');
                        alert('Error no se logro eliminar la propuesta');
                    }
                    read();
                })
            }
        //});
        e.preventDefault();
    }); 

    

    $(document).on('click', '.aceptar', function (e) {        
        let elemento = $(this)[0].parentElement.parentElement;
        let ide = $(elemento).attr('id');
        const datos = {
            id: ide,
            operacion: 'AceptarPropuesta'
        };             
        $.post('../../Controlador/gruposProyecto.controlador.php',datos, function (respuesta) {
            console.log(respuesta);
            if (respuesta == '1') {
                //alertify.success('Se elimino la ficha con exito!!');
                alert('Se elimino la acepto la propuesta con exito!!');
            }else{
                //alertify.error('Error no se logro eliminar la ficha');
                alert('Error no se logro aceptar la propuesta');
            }
            read();
        });
    
        e.preventDefault();
    }); 

});
</script>

</body>
</html>