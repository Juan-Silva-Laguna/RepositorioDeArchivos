<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Programa</h1></center>
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">                
                <div class="card card-signin my-3">                
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <form class="form-signin row" autocomplete="off">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Codigo de programa</label>
                                    <input type="number" class="form-control text-center" id="codigo" autofocus><br> 
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Nombre Programa</label>
                                    <input type="text" class="form-control text-center" id="nombre" autofocus><br> 
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-3 mx-auto">
                                <button class="btn btn-lg btn-success btn-block text-uppercase" id="btnGuardar" type="submit">Guardar</button><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table-responsive" id="tabla">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Programa</th>
                            <th>Fecha de Publicación</th>
                            <th>Proyecto</th>
                        </tr>
                    </thead>
                    <tbody id="cuerpotabla">

                    </tbody>
                </table>
            </div>
        </div>
        <br><br>
    </div>
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?>
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script src="Ajax/programa.js"></script>

</body>
</html>