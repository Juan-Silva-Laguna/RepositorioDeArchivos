$(document).ready(function(){
    read();
      
    $('#formularioInstructor').submit(function (e) {
        e.preventDefault();
        let datos = {};
        if ($('#btnFormu').val() == 'Crear') {
            datos = {
                tipodoc: $('#tipodoc').val(),
                doc: $('#doc').val(),
                nombres: $('#nombres').val(),
                apellidos: $('#apellidos').val(),
                celular: $('#celular').val(),
                correo: $('#correo').val(),
                profesion: $('#profesion').val(),
                descripcion: $('#descripcion').val(),
                operacion: 'Creo'
            };
        }
        else if ($('#btnFormu').val() == 'Actualizar') {
            datos = {
                tipodoc: $('#tipodoc').val(),
                doc: $('#doc').val(),
                nombres: $('#nombres').val(),
                apellidos: $('#apellidos').val(),
                celular: $('#celular').val(),
                correo: $('#correo').val(),
                profesion: $('#profesion').val(),
                descripcion: $('#descripcion').val(),
                operacion: 'Actualizo'
            };
        }
        console.log(datos);
        $.post('../../Controlador/instructor.controlador.php', datos, function (respuesta) {
            console.log(respuesta);
            if (respuesta == '1' || respuesta == '2') {
                //alertify.success(`Se ${datos.operacion} la instructor con exito!!`);
                alert(`Se ${datos.operacion} el instructor con exito!!`);
                
            }else{
                //alertify.error(`Error: no se ${datos.operacion} el instructor`);
                alert(`Error: no se ${datos.operacion} el instructor`);
            }
            limpiar();
            read();
         })       
     });

    function read(){        
        $('#tablainstructor').dataTable().fnDestroy();
        let operacion = 'Consultar';   
        $.post('../../Controlador/instructor.controlador.php', {operacion}, function (respuesta) {
            var table = null;                 
            $.each(JSON.parse(respuesta), function(index, val) {
                table += '<tr id='+val.idInstructor+'>';
                table += '<th>'+val.tipo_identificacion+'</th>';
                table += '<td>'+val.identificacion+'</td>';
                table += '<td>'+val.nombres+'</td>';
                table += '<td>'+val.apellidos+'</td>';
                table += '<td>'+val.celular+'</td>';
                table += '<td>'+val.correo+'</td>';
                table += '<td>'+val.profesion+'</td>';
                table += '<td><button class="eliminar btn btn-danger" ><i class="fa fa-trash-o"></i> </button> <button class="editainstructor btn btn-warning" > <i class="fa fa-pencil"></i></button> </td>';
                table += '</tr>';
            });
            
            $('#cuerpotabla').html(table);
            $('#tablainstructor').dataTable();
        })
        .fail(function(){
            alertify.error('No hay datos en la tabla');
        })
    }
    
    $(document).on('click','.editainstructor', function (e) {
        window.scroll(0, 0);
            let elemento = $(this)[0].parentElement.parentElement;
            let ide = $(elemento).attr('id');
            const datos = {
                doc: ide,
                operacion: 'consultarEditar'
            };
        $.post('../../Controlador/instructor.controlador.php', datos, function (respuesta) {
            let datos = JSON.parse(respuesta);
            datos.forEach(dato => {
                $('#tipodoc').val(dato.tipo_identificacion),
                $('#doc').val(dato.identificacion),
                $('#nombres').val(dato.nombres),
                $('#apellidos').val(dato.apellidos),
                $('#celular').val(dato.celular),
                $('#correo').val(dato.correo),
                $('#profesion').val(dato.profesion),
                $('#descripcion').val(dato.descripcion),
              $('#btnFormu').val('Actualizar');
            });
        })
         e.preventDefault(); 
      });

    $(document).on('click', '.eliminar', function (e) {        
        let elemento = $(this)[0].parentElement.parentElement;
        let ide = $(elemento).attr('id');
        const datos = {
            doc: ide,
            operacion: 'Eliminar'
        };
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            
            if (confirm("Esta seguro de eliminar este instructor?")) {
                
                $.post('../../Controlador/instructor.controlador.php',datos, function (respuesta) {
                    console.log(respuesta);
                    if (respuesta == '1') {
                        //alertify.success('Se elimino la instructor con exito!!');
                        alert('Se elimino la instructor con exito!!');
                    }else{
                        //alertify.error('Error no se logro eliminar la instructor');
                        alert('Error no se logro eliminar la instructor');
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
        $('#tipodoc').val('');
        $('#doc').val('');
        $('#nombres').val('');
        $('#apellidos').val('');
        $('#celular').val('');
        $('#correo').val('');
        $('#profesion').val('');
        $('#descripcion').val('');
        $('#btnFormu').val('Crear');
    }

});