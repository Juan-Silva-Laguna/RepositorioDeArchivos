$(document).ready(function(){
    read();

    $.post('../../Controlador/ficha.controlador.php', {operacion: 'Consultar'}, function (respuesta) {
        let datos = JSON.parse(respuesta);
        datos.forEach(dato => {
            option = document.createElement("option");
            option.value = dato.id_ficha;  
            option.setAttribute('data-index-number',dato.id_ficha);
            document.getElementById('fichas').append(option); 
        });
    })

    $.post('../../Controlador/instructor.controlador.php', {operacion: 'Consultar'}, function (respuesta) {
        let datos = JSON.parse(respuesta);
        datos.forEach(dato => {
            option = document.createElement("option");
            option.value = dato.nombres;  
            option.setAttribute('data-index-number',dato.idInstructor);
            document.getElementById('instructores').append(option); 
        });
    })
      
    $('#formularioFichaInstructor').submit(function (e) {
        e.preventDefault();
        let datos = {};
        if ($('#btnFormu').val() == 'Asignar') {
            datos = {
                ficha: $('#fichas [value="' + $('#ficha').val() + '"]').data('indexNumber'),
                instructor: $('#instructores [value="' + $('#instructor').val() + '"]').data('indexNumber'),
                operacion: 'Asigno'
            };
        }
        else if ($('#btnFormu').val() == 'Actualizar') {
            datos = {
                id: $('#id').val(),
                ficha: $('#fichas [value="' + $('#ficha').val() + '"]').data('indexNumber'),
                instructor: $('#instructores [value="' + $('#instructor').val() + '"]').data('indexNumber'),
                operacion: 'Actualizo'
            };
        }

        $.post('../../Controlador/ficha_instructor.controlador.php', datos, function (respuesta) {

            if (respuesta == '1') {
                //alertify.success(`Se ${datos.operacion} la ficha con exito!!`);
                alert(`Se ${datos.operacion} la ficha con exito!!`);
                
            }else{
                //alertify.error(`Error: no se ${datos.operacion} la ficha`);
                alert(`Error: no se ${datos.operacion} la ficha`);
            }
            limpiar();
            read();
         })       
     });

    function read(){        
        $('#tablaFichaInstructor').dataTable().fnDestroy();
        let operacion = 'Consultar';   
        $.post('../../Controlador/ficha_instructor.controlador.php', {operacion}, function (respuesta) {
            var table = null;                 
            $.each(JSON.parse(respuesta), function(index, val) {
                table += '<tr id='+val.idFichaInstructor+'>';                
                table += '<td>'+val.nombres+'</td>';
                table += '<th>'+val.id_ficha+'</th>';
                table += '<td><button class="eliminar btn btn-danger" ><i class="fa fa-trash-o"></i> </button> <button class="editaprograma btn btn-warning" > <i class="fa fa-pencil"></i></button> </td>';
                table += '</tr>';
            });
            
            $('#cuerpotabla').html(table);
            $('#tablaFichaInstructor').dataTable();
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

        $.post('../../Controlador/ficha_instructor.controlador.php', datos, function (respuesta) {
            let datos = JSON.parse(respuesta);
            datos.forEach(dato => {
              $('#id').val(dato.idFichaInstructor);
              $('#ficha').val(dato.id_ficha);
              $('#ficha').attr('data-index-number', dato.id_ficha);
              $('#instructor').val(dato.nombres);
              $('#instructor').attr('data-index-number', dato.id_nstructor);
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
                
                $.post('../../Controlador/ficha_instructor.controlador.php',datos, function (respuesta) {
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
        $('#ficha').val('');
        $('#ficha').attr('data-index-number','');
        $('#instructor').val('');
        $('#instructor').attr('data-index-number','');
        $('#btnFormu').val('Asignar');
    }

});