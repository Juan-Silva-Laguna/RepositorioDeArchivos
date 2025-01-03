<?php include('head.php'); ?>        
    <div class="container">
        <br><center><h1>Mis Proyectos</h1></center><br>       
            <input type="hidden" id="idAprendiz" value="<?php echo $_SESSION['idAprendiz'];?>">
            <table class="col-sm-12 col-md-12 col-lg-12" id="tablafichas">
                <thead>
                    <tr>
                        <th>Nombre Proyecto</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody id="cuerpotablafichas"></tbody>
            </table>
        <br><br><br>
    </div>
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?>
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){           
    $('#tablafichas').dataTable().fnDestroy();  
    const datos = {
        aprendiz: $('#idAprendiz').val(), 
        operacion : 'ConsultarProyectosAprendiz'
    }
    $.post('../../Controlador/gruposProyecto.controlador.php', datos, function (respuesta) {
        console.log(respuesta);
        var table = null;                 
        $.each(JSON.parse(respuesta), function(index, val) {
            table += '<tr>';
            table += '<th><center>'+val.nombreProyecto+'</center></th>';
            table += `<td><center>
                        <form action="itemsProyectos.php" method="POST">
                            <input type="hidden" name="idProyecto" value="${val.idProyecto}">
                            <input type="hidden" name="nombreProyecto" value="${val.nombreProyecto}">
                            <button type="submit" class="btn btn-info"><i class="fa fa-eye"></i> Ver Proyecto</button>
                        </form>
                    </center></td>`;
            table += '</tr>';
        });
        
        $('#cuerpotablafichas').html(table);
        $('#tablafichas').dataTable();
    })
    .fail(function(){
        console.log('Hay errores');
    })   
});
</script>

</body>
</html>