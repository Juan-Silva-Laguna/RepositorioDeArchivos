<?php include('head.php'); ?>        
    <div class="container">
        <br><center><h1>Mis Fichas</h1></center><br>       
            <input type="hidden" id="idInstructor" value="<?php echo $_SESSION['id'];?>">
            <table class="col-sm-12 col-md-12 col-lg-12" id="tablafichas">
                <thead>
                    <tr>
                        <th>Fichas</th>
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
    $.post('../../Controlador/ficha_instructor.controlador.php', {instructor: $('#idInstructor').val(), operacion : 'ConsultarFichasInstructor'}, function (respuesta) {
        console.log(respuesta);
        var table = null;                 
        $.each(JSON.parse(respuesta), function(index, val) {
            table += '<tr>';
            table += '<th><center>'+val.id_ficha+'</center></th>';
            table += `<td><center>
                        <form action="gruposProyecto.php" method="POST">
                            <input type="hidden" name="id_ficha" value="${val.id_ficha}">
                            <button type="submit" class="btn btn-info"><i class="fa fa-eye"></i> Ver Ficha</button>
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