<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Proponer Proyecto</h1></center>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">                
                    <div class="card card-signin my-3">                
                        <div class="card-body" style="background-color: #F5F5F5;">
                        <form class="form-signin row" autocomplete="off" id="formProyecto">
                            <input type="hidden" id="id_ficha" value="<?php echo $_SESSION['idFicha'];?>">
                            <input type="hidden" id="id_proyecto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombreProyecto" class="font-weight-bold">Nombre de Proyecto:</label>
                                    <input type="text" class="form-control" id="nombreProyecto" required>
                                </div>  
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="descripcion" class="font-weight-bold">Descripción:</label>
                                    <textarea class="form-control" id="descripcion" required></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="aprendiz" class="font-weight-bold">Instructor:</label>
                                    <input type="text" class="form-control"  list="instructores" id="instructor">
                                    <datalist id="instructores">
                                        <option value=""></option>
                                    </datalist>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="aprendiz" class="font-weight-bold">Aprendiz:</label>
                                    <input type="text" class="form-control"  list="aprendices" id="aprendiz">
                                    <datalist id="aprendices">
                                        <option value=""></option>
                                    </datalist>
                                </div> 
                            </div>                            
                            <br>
                            <div class="col-md-1"style="margin-top: 30px;">
                                <div class="form-group">
                                    <button class="btn btn-success" id="aggAprendiz"> <i class="fa fa-user-plus"></i> </button>
                                </div>   
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-label-group"><br>
                                <center>
                                    <label class="font-weight-bold">Grupo de Aprendices:</label>
                                    <ul id="listaAprendices"></ul>
                                </center>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-3 mx-auto">
                                <input type="submit" class="btn btn-lg btn-success btn-block text-uppercase" id="btnFormu"  value="Proponer"><br>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12"><br><br>
                    <table class="table-responsive" id="tablaPropuesta">
                        <thead>
                            <tr>
                                <th>Nombre de Proyecto</th>
                                <th>Descripción</th>
                                <th>Grupo</th>
                                <th>Estado</th>
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
    let arrayAprendiz=[];
    read();
    $.post('../../Controlador/ficha.controlador.php', {ficha: $('#id_ficha').val(), operacion: 'ConsultarAprendices'}, function (respuesta) {
        let datos = JSON.parse(respuesta);
        datos.forEach(dato => {
            option = document.createElement("option");
            option.value = dato.nombre;  
            option.setAttribute('data-index-number',dato.id);
            document.getElementById('aprendices').append(option); 
        });
    });

    $.post('../../Controlador/ficha_instructor.controlador.php', {ficha: $('#id_ficha').val(), operacion: 'dataListInstructor'}, function (respuesta) {
        let datos = JSON.parse(respuesta);
        datos.forEach(dato => {
            option = document.createElement("option");
            option.value = dato.nombres+" "+dato.apellidos;  
            option.setAttribute('data-index-number',dato.idInstructor);
            document.getElementById('instructores').append(option); 
        });
    });

    $('#aggAprendiz').on('click', function (e) {
        e.preventDefault(); 
        arrayAprendiz.push({'idAprendiz': $('#aprendices [value="' + $('#aprendiz').val() + '"]').data('indexNumber'),'nombres': $('#aprendiz').val()});    
        mustraListaAprendiz(arrayAprendiz);
    });


    $(document).on('click', '.quitarAprendizLocal', function (e) {
        //alertify.confirm("Esta seguro de realizar los cambios", function (e) {
            if (confirm("Esta seguro de quitar este aprendiz?")) {
                arrayAprendiz.splice($($(this)[0]).attr('id'), 1);
                mustraListaAprendiz(arrayAprendiz);
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

    $('#formProyecto').submit(function (e) {
        e.preventDefault();
        let datos = {
                instructor: $('#instructores [value="' + $('#instructor').val() + '"]').data('indexNumber'),
                nombre: $('#nombreProyecto').val(),
                descripcion: $('#descripcion').val(),
                aprendices: arrayAprendiz,
                operacion: 'propueso'
        };
        $.post('../../Controlador/gruposProyecto.controlador.php', datos, function (respuesta) {
            console.log(respuesta);
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
        $('#tablaPropuesta').dataTable().fnDestroy();
        let datos = {
            ficha: $('#id_ficha').val(),
            instructor: '',
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
                table += '</tr>';
            });            
            $('#cuerpoTablaPropuesta').html(table);
            $('#tablaPropuesta').dataTable();
        })
        .fail(function(){
            console.log('Hay errores');
        })
    }

   
    function limpiar() {
        $('#nombreProyecto').val('');
        $('#descripcion').val('');
        $('#instructor').val('');
        arrayAprendiz = [];
        mustraListaAprendiz(arrayAprendiz);
    }


});
</script>

</body>
</html>