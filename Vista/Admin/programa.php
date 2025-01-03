<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Programa</h1></center>
        <div class="row">
            <div class="col-md-4">                
                <div class="card card-signin my-3">                
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <form class="form-signin row" autocomplete="off" id="formularioPrograma">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Codigo de programa</label>
                                    <input type="number" class="form-control text-center" id="codigo" autofocus required><br> 
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Nombre Programa</label>
                                    <input type="text" class="form-control text-center" id="nombre" required><br> 
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Tipo de Programa</label>
                                    <select class="form-control text-center" id="tipo">
                                        <option value="Tecnico">Tecnico</option>
                                        <option value="Tecnologo">Tecnologo</option>
                                        <option value="Curso">Curso</option>
                                    </select><br>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6 mx-auto">
                                <input type="submit"class="btn btn-lg btn-success btn-block text-uppercase" id="btnFormu"  value="Crear"><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <br>
                <table class="table-responsive col-md-12" id="tableprograma">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="tablecuerpo"></tbody>
                </table>
                <br><br>
            </div>
        </div>
    </div>
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?> 
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script src="../Ajax/programa.js"></script>

</body>
</html>