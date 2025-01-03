$(document).ready(function(){
    let arrayAprendiz=[];
    let arrayItems=[];
    let arrayAprendizSupliente=[];
    let arrayItemsSupliente=[];

    $.post('../../Controlador/ficha.controlador.php', {ficha: $('#id_ficha').val(), operacion: 'ConsultarAprendices'}, function (respuesta) {
        let datos = JSON.parse(respuesta);
        datos.forEach(dato => {
            option = document.createElement("option");
            option.value = dato.nombre;  
            option.setAttribute('data-index-number',dato.id);
            document.getElementById('aprendices').append(option); 
        });
    });

    $('#aggAprendiz').on('click', function (e) {
        e.preventDefault();
        if ($('#btnFormu').val() == 'Actualizar') {
            arrayAprendizSupliente.push({'idAprendiz': $('#aprendices [value="' + $('#aprendiz').val() + '"]').data('indexNumber'),'nombres': $('#aprendiz').val()});
        }    
        arrayAprendiz.push({'idAprendiz': $('#aprendices [value="' + $('#aprendiz').val() + '"]').data('indexNumber'),'nombres': $('#aprendiz').val()});    
        mustraListaAprendiz(arrayAprendiz);
    });

    $('#aggItem').on('click', function (e) {
        e.preventDefault();        
        if ($('#btnFormu').val() == 'Actualizar') {
            arrayItemsSupliente.push($('#item').val()); 
        }  
        arrayItems.push($('#item').val());    
        mustraListaItems(arrayItems);
    });

    $(document).on('click', '.quitarAprendizLocal', function (e) {
        arrayAprendizSupliente.forEach((dato, i) =>{
            if ( $($(this)[0].parentElement).text() === dato.nombres+"  ") {
                arrayAprendizSupliente.splice(i, 1);
            }
        });
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            if (confirm("Esta seguro de quitar este aprendiz?")) {
                arrayAprendiz.splice($($(this)[0]).attr('id'), 1);
                mustraListaAprendiz(arrayAprendiz);
            }
        //});
        e.preventDefault();
    }); 

    $(document).on('click', '.quitarItemLocal', function (e) {
        arrayItemsSupliente.forEach((dato, i) =>{
            if ( $($(this)[0].parentElement).text() === dato+" ") {
                arrayItemsSupliente.splice(i, 1);
            }
        });
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            if (confirm("Esta seguro de quitar este item?")) {
                arrayItems.splice($($(this)[0]).attr('id'), 1);
                mustraListaItems(arrayItems);
            }
        //});
        e.preventDefault();
    }); 

    function mustraListaAprendiz(arreglo) {
        let li = "";
        arreglo.forEach((dato, index) => {
            li += `<li>${dato.nombres} ${(dato.apellidos == undefined?'':dato.apellidos)} <i style="color:  red;" id="${(dato.apellidos == undefined?index:dato.idAprendiz)}" class="fa fa-minus-circle ${(dato.apellidos == undefined?'quitarAprendizLocal':'quitarAprendizBd')}"></i></li>`;
        });
        $('#aprendiz').val('');
        $('#listaAprendices').html(li);
    }

    function mustraListaItems(arreglo) {
        let li = "";
        arreglo.forEach((dato, index) => {
            li += `<li>${(typeof dato == 'object'?dato.nombreItem:dato)} <i style="color:  red;" id="${(typeof dato == 'object'?dato.idItem:index)}" class="fa fa-minus-circle ${(typeof dato == 'object'?'quitarItemBd':'quitarItemLocal')}"></i></li>`;
        });
        $('#item').val('');
        $('#listaItems').html(li);
    }


    read();
    $('#formProyecto').submit(function (e) {
        e.preventDefault();
        let datos = {};
        if ($('#btnFormu').val() == 'Crear') {
            datos = {
                id: $('#id_instructor').val(),
                nombre: $('#nombreProyecto').val(),
                descripcion: $('#descripcion').val(),
                aprendices: arrayAprendiz,
                items: arrayItems,
                operacion: 'Creo'
            };
        }
        else if ($('#btnFormu').val() == 'Actualizar') {
            datos = {
                id: $('#id_proyecto').val(),
                nombre: $('#nombreProyecto').val(),
                descripcion: $('#descripcion').val(),
                aprendices: arrayAprendizSupliente,
                items: arrayItemsSupliente,
                operacion: 'Actualizo'
            };
        }
        $.post('../../Controlador/gruposProyecto.controlador.php', datos, function (respuesta) {
            if (respuesta != '0') {
                //alertify.success(`Se ${datos.operacion} la ficha con exito!!`);
                alert(`Se ${datos.operacion} el proyecto con exito!!`);                
            }else{
                //alertify.error(`Error: no se ${datos.operacion} la ficha`);
                alert(`Error: no se ${datos.operacion} el proyecto`);
            }
            limpiar();
            read();
         });       
     });

    function read(){        
        $('#tablaProyecto').dataTable().fnDestroy();
        $.post('../../Controlador/gruposProyecto.controlador.php', {operacion: 'Consultar', id: $('#id_instructor').val()}, function (respuesta) {
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
                table += '<td><ul>';
                $.each(val[1], function(i, dato) {
                    table += '<li>'+dato.nombreItem+'</li>';
                });
                table += '</ul></td>';
                table += `<td><button class="eliminar btn btn-danger" ><i class="fa fa-trash-o"></i> </button> <button class="editaproyecto btn btn-warning" > <i class="fa fa-pencil"></i></button> 
                    <form action="itemsProyectos.php" method="POST"><br>
                        <input type="hidden" name="idProyecto" value="${val.idProyecto}">
                        <input type="hidden" name="nombreProyecto" value="${val.nombreProyecto}">
                        <button type="submit" class="btn btn-info"><i class="fa fa-eye"></i> Ver Items</button>
                    </form>
                </td>`;
                table += '</tr>';
            });            
            $('#cuerpotablaproyecto').html(table);
            $('#tablaProyecto').dataTable();
        })
        .fail(function(){
            console.log('Hay errores');
        })
    }
    
    $(document).on('click','.editaproyecto', function (e) {
        window.scroll(0, 0);
            let elemento = $(this)[0].parentElement.parentElement;
            let ide = $(elemento).attr('id');
            const datos = {
                id: ide,
                operacion: 'consultarEditar'
            };       
        $.post('../../Controlador/gruposProyecto.controlador.php', datos, function (respuesta) {
            let datos = JSON.parse(respuesta);
            $.each(datos, function(index, val) {                
                $('#id_proyecto').val(val.idProyecto);
                $('#nombreProyecto').val(val.nombreProyecto);
                $('#descripcion').val(val.descripcionProyecto);
                let liAprendices = "";
                $.each(val[0], function(i, dato) {
                    liAprendices += `<li>${dato.nombres} ${dato.apellidos}<i style="color:  red;" id="${dato.idAprendiz}" class="fa fa-minus-circle quitarAprendizBd"></i></li>`;
                });
                $('#listaAprendices').html(liAprendices);
                arrayAprendiz=val[0];
                arrayItems=val[1];
                let liItems = "";
                $.each(val[1], function(i, dato) {
                    liItems += `<li>${dato.nombreItem}<i style="color:  red;" id="${dato.idItem}" class="fa fa-minus-circle quitarItemBd"></i></li>`;
                });
                $('#listaItems').html(liItems);
                $('#btnFormu').val('Actualizar')
            });            
        })
         e.preventDefault(); 
    });

    $(document).on('click', '.quitarAprendizBd', function (e) {
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            if (confirm("Esta seguro de quitar este aprendiz?")) {
                let datos = {
                    id: $($(this)[0]).attr('id'),
                    operacion: 'quitarAprendiz'
                }
                $.post('../../Controlador/gruposProyecto.controlador.php',datos, function (respuesta) {
                    if (respuesta == '1') {
                        //alertify.success('Se elimino la ficha con exito!!');
                        alert('Se quito  el aprendiz con exito!!');
                    }else{
                        //alertify.error('Error no se logro eliminar la ficha');
                        alert('Error no se logro quita el aprendiz');
                    }
                    read();
                })
                arrayAprendiz.forEach((dato, i) =>{
                    if ( $($(this)[0]).attr('id') === dato.idAprendiz) {
                        arrayAprendiz.splice(i, 1);
                    }
                });
                mustraListaAprendiz(arrayAprendiz);
            }
        //});
        e.preventDefault();
    }); 

    $(document).on('click', '.quitarItemBd', function (e) {
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            if (confirm("Esta seguro de quitar este item?")) {
                let datos = {
                    id: $($(this)[0]).attr('id'),
                    operacion: 'quitarItem'
                }
                $.post('../../Controlador/gruposProyecto.controlador.php',datos, function (respuesta) {
                    if (respuesta == '1') {
                        //alertify.success('Se elimino la ficha con exito!!');
                        alert('Se elimino el item!!');
                    }else{
                        //alertify.error('Error no se logro eliminar la ficha');
                        alert('Error no se logro eliminar el item');
                    }
                    read();
                })
                arrayItems.forEach((dato, i) =>{
                    if ( $($(this)[0]).attr('id') === dato.idItem) {
                        arrayItems.splice(i, 1);
                    }
                });
                mustraListaItems(arrayItems);
            }
            
        //});
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
            if (confirm("Esta seguro de eliminar esta ficha?")) {                
                $.post('../../Controlador/gruposProyecto.controlador.php',datos, function (respuesta) {
                    if (respuesta == '1') {
                        //alertify.success('Se elimino la ficha con exito!!');
                        alert('Se elimino el proyecto con exito!!');
                    }else{
                        //alertify.error('Error no se logro eliminar la ficha');
                        alert('Error no se logro eliminar el proyecto');
                    }
                    read();
                })
            }
        //});
        e.preventDefault();
    }); 

    function limpiar() {
        $('#nombreProyecto').val('');
        $('#descripcion').val('');
        $('#btnFormu').val('Crear');
        arrayAprendiz = [];
        arrayItems = [];
        mustraListaAprendiz(arrayAprendiz);
        mustraListaItems(arrayItems);
        arrayAprendizSupliente=[];
        arrayItemsSupliente=[];
    }

});