$(document).ready(function(){
    let arrayAprendiz=[];

    $('#opcion1').on('click', function () {
        $('#opcionArchivo').css('display', 'block');
        $('#opcionFormulario').css('display', 'none');
    });

    $('#opcion2').on('click', function () {
        $('#opcionArchivo').css('display', 'none');
        $('#opcionFormulario').css('display', 'block');
    });


    $('#aggAprendiz').on('click', function (e) {
        e.preventDefault();
        
        $('#tipodoc').val();
        $('#doc').val();
        $('#nombres').val();
        $('#apellidos').val();
        $('#correo').val();
        $('#celular').val();
        arrayAprendiz.push({'Tipo de Documento': $('#tipodoc').val(),'Número de Documento': $('#doc').val(),'Nombre': $('#nombres').val(),'Apellidos': $('#apellidos').val(),'Celular': $('#celular').val(),'Correo Electrónico': $('#correo').val()});    
        mostrarAprendices(arrayAprendiz);
    });

    $('#archivo').on('change', function (event){
        let e = event.originalEvent;
        console.log(URL.createObjectURL(e.target.files[0]));
        
        let url = URL.createObjectURL(e.target.files[0]);
        let oReq = new XMLHttpRequest();
        oReq.open("GET", url, true);
        oReq.responseType = "arraybuffer";

        oReq.onload = function(e) {
            let arraybuffer = oReq.response;

            /* convert data to binary string */
            let data = new Uint8Array(arraybuffer);
            let arr = new Array();
            for(let i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
            let bstr = arr.join("");

            /* Call XLSX */
            let workbook = XLSX.read(bstr, {type:"binary"});

            /* DO SOMETHING WITH workbook HERE */
            let first_sheet_name = workbook.SheetNames[0];
            /* Get worksheet */
            let worksheet = workbook.Sheets[first_sheet_name];
            arrayAprendiz = XLSX.utils.sheet_to_json(worksheet,{raw:true});
            mostrarAprendices(arrayAprendiz);
        }
        oReq.send();
    });

    function mostrarAprendices(arrayAprendiz) {
        $('#cabezatablaAprendiz').css('display', 'block');
        $('#tablaAprendiz').dataTable().fnDestroy();

        var table = null;                 
            $.each(arrayAprendiz, function(index, val) {
                table += '<tr>';
                table += '<th>'+val['Tipo de Documento']+'</th>';
                table += '<th>'+val['Número de Documento']+'</th>';
                table += '<th>'+val['Nombre']+'</th>';
                table += '<th>'+val['Apellidos']+'</th>';
                table += '<td>'+val['Celular']+'</td>';
                table += '<td>'+val['Correo Electrónico']+'</td>';
                table += '</tr>';
            });
            
        $('#cuerpotablaAprendiz').html(table);
        $('#tablaAprendiz').dataTable();
        
        $('#tipodoc').val('');
        $('#doc').val('');
        $('#nombres').val('');
        $('#apellidos').val('');
        $('#correo').val('');
        $('#celular').val('');        
    }

    $.post('../../Controlador/programa.controlador.php', {operacion: 'Consultar'}, function (respuesta) {
        let datos = JSON.parse(respuesta);
        datos.forEach(dato => {
            option = document.createElement("option");
            option.value = dato.nombrePrograma;  
            option.setAttribute('data-index-number',dato.id_programa);
            document.getElementById('programas').append(option); 
        });
    })

    read();
    $('#formularioFicha').submit(function (e) {
        e.preventDefault();
        let datos = {};
        if ($('#btnFormu').val() == 'Guardar') {
            datos = {
                ficha: $('#codigo').val(),
                programa: $('#programas [value="' + $('#programa').val() + '"]').data('indexNumber'),
                aprendices: arrayAprendiz,
                operacion: 'Guardo'
            };
        }
        else if ($('#btnFormu').val() == 'Actualizar') {
            datos = {
                ficha: $('#codigo').val(),
                programa: $('#programas [value="' + $('#programa').val() + '"]').data('indexNumber'),
                operacion: 'Actualizo'
            };
        }
        console.log(datos);
        $.post('../../Controlador/ficha.controlador.php', datos, function (respuesta) {
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
        $('#tablaficha').dataTable().fnDestroy();
        let operacion = 'Consultar';   
        $.post('../../Controlador/ficha.controlador.php', {operacion}, function (respuesta) {
            var table = null;                 
            $.each(JSON.parse(respuesta), function(index, val) {
                table += '<tr id='+val.id_ficha+'>';
                table += '<th>'+val.id_ficha+'</th>';
                table += '<td>'+val.nombrePrograma+'</td>';
                table += '<td><button class="eliminar btn btn-danger" ><i class="fa fa-trash-o"></i> </button> <button class="editaprograma btn btn-warning" > <i class="fa fa-pencil"></i></button> </td>';
                table += '</tr>';
            });
            
            $('#cuerpotabla').html(table);
            $('#tablaficha').dataTable();
        })
        .fail(function(){
            console.log('Hay errores');
        })
    }
    
    $(document).on('click','.editaprograma', function (e) {
        window.scroll(0, 0);
            let elemento = $(this)[0].parentElement.parentElement;
            let ide = $(elemento).attr('id');
            const datos = {
                ficha: ide,
                operacion: 'consultarEditar'
            };
            
        $.post('../../Controlador/ficha.controlador.php', datos, function (respuesta) {
            let datos = JSON.parse(respuesta);
              $('#cabezatablaAprendiz').css('display', 'block');


              $('#codigo').val(datos[0].id_ficha);
              $('#programa').val(datos[0].nombrePrograma);
              $('#programa').attr('data-index-number', datos[0].id_programa);
              $('#btnFormu').val('Actualizar');
              
              $('#tablaAprendiz').dataTable().fnDestroy();
              console.log(datos[1][0]);
                var table = null;  
                let arr = datos[1];  
                for (let i = 0; i < arr.length; i++) {
                    table += '<tr>';
                    table += '<th>'+arr[i]['tipo_identificacion']+'</th>';
                    table += '<th>'+arr[i]['identificacion']+'</th>';
                    table += '<th>'+arr[i]['nombres']+'</th>';
                    table += '<th>'+arr[i]['apellidos']+'</th>';
                    table += '<td>'+arr[i]['celular']+'</td>';
                    table += '<td>'+arr[i]['correo']+'</td>';
                    table += '</tr>';
                    
                }          
                    
                $('#cuerpotablaAprendiz').html(table);
                $('#tablaAprendiz').dataTable();

        })
         e.preventDefault(); 
      });

    $(document).on('click', '.eliminar', function (e) {        
        let elemento = $(this)[0].parentElement.parentElement;
        let ide = $(elemento).attr('id');
        const datos = {
            ficha: ide,
            operacion: 'Eliminar'
        };
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            
            if (confirm("Esta seguro de eliminar esta ficha?")) {
                
                $.post('../../Controlador/ficha.controlador.php',datos, function (respuesta) {
                    console.log(respuesta);
                    if (respuesta == '1') {
                        //alertify.success('Se elimino la ficha con exito!!');
                        alert('Se elimino la ficha con exito!!');
                    }else{
                        //alertify.error('Error no se logro eliminar la ficha');
                        alert('Error no se logro eliminar la ficha');
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
        $('#codigo').val('');
        $('#programa').val('');
        $('#btnFormu').val('Guardar');
        arrayAprendiz = [];
        $('#cabezatablaAprendiz').css('display', 'none');
        $('#tablaAprendiz').dataTable().fnDestroy();
        $('#cuerpotablaAprendiz').html('');
    }

});