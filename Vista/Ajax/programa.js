$(document).ready(function(){
    read();
      
    $('#formularioPrograma').submit(function (e) {
        e.preventDefault();
        let datos = {};
        if ($('#btnFormu').val() == 'Crear') {
            datos = {
                nombre: $('#nombre').val(),
                id: $('#codigo').val(),
                tipo: $('#tipo').val(),
                operacion: 'Creo'
            };
        }
        else if ($('#btnFormu').val() == 'Actualizar') {
            datos = {
                nombre: $('#nombre').val(),
                id: $('#codigo').val(),
                tipo: $('#tipo').val(),
                operacion: 'Actualizo'
            };
        }
        $.post('../../Controlador/programa.controlador.php', datos, function (respuesta) {
            if (respuesta == '1') {
                //alertify.success(`Se ${datos.operacion} la programa con exito!!`);
                alert(`Se ${datos.operacion} la programa con exito!!`);
                
            }else{
                //alertify.error(`Error: no se ${datos.operacion} la programa`);
                alert(`Error: no se ${datos.operacion} la programa`);
            }
            limpiar();
            read();
         })       
     });

    function read(){        
        $('#tableprograma').dataTable().fnDestroy();
        let operacion = 'Consultar';   
        $.post('../../Controlador/programa.controlador.php', {operacion}, function (respuesta) {
            var table = null;                 
            $.each(JSON.parse(respuesta), function(index, val) {
                table += '<tr id='+val.id_programa+'>';
                table += '<th>'+val.id_programa+'</th>';
                table += '<td>'+val.nombrePrograma+'</td>';
                table += '<td>'+val.tipoPrograma+'</td>';
                table += '<td><button class="eliminar btn btn-danger" ><i class="fa fa-trash-o"></i> </button> <button class="editaprograma btn btn-warning" > <i class="fa fa-pencil"></i></button> </td>';
                table += '</tr>';
            });
            
            $('#tablecuerpo').html(table);
            $('#tableprograma').dataTable();
        })
        .fail(function(){
            alertify.error('No hay datos en la tabla');
        })
    }
    
    $(document).on('click','.editaprograma', function (e) {
        window.scroll(0, 0);
            let elemento = $(this)[0].parentElement.parentElement;
            let ide = $(elemento).attr('id');
            const datos = {
                id: ide,
                operacion: 'consultarEditar'
            };
        $.post('../../Controlador/programa.controlador.php', datos, function (respuesta) {
            let datos = JSON.parse(respuesta);
            datos.forEach(dato => {
              $('#nombre').val(dato.nombrePrograma);
              $('#tipo').val(dato.tipoPrograma);
              $('#codigo').val(dato.id_programa);
              $('#btnFormu').val('Actualizar');
            });
        })
         e.preventDefault(); 
      });

    $(document).on('click', '.eliminar', function (e) {        
        let elemento = $(this)[0].parentElement.parentElement;
        let ide = $(elemento).attr('id');
        const datos = {
            id: ide,
            operacion: 'Eliminar'
        };
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            
            if (confirm("Esta seguro de eliminar este programa?")) {
                
                $.post('../../Controlador/programa.controlador.php',datos, function (respuesta) {
                    console.log(respuesta);
                    if (respuesta == '1') {
                        //alertify.success('Se elimino la programa con exito!!');
                        alert('Se elimino la programa con exito!!');
                    }else{
                        //alertify.error('Error no se logro eliminar la programa');
                        alert('Error no se logro eliminar la programa');
                    }
                    read();
                })
            }else {
                //alertify.error('Hubo un error al actualizar los datos');
                alert('Hubo un error al actualizar los datos');
            }
        //});
        e.preventDefault();
    }); 

    function limpiar() {
        $('#nombre').val('');
        $('#codigo').val('');
        $('#tipo').val('');
        $('#btnFormu').val('Crear');
    }

});