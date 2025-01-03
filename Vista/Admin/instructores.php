<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Instructor</h1></center>
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">                
                <div class="card card-signin my-3">                
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <form class="form-signin row" autocomplete="off" id="formularioInstructor">                            
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold"> Tipo de Documento</label>
                                    <select class="form-control" id="tipodoc" required>
                                        <option value="CC">CC</option>
                                        <option value="TI">TI</option>
                                        <option value="CE">CE</option>
                                        <option value="Otro">Otro</option>
                                    </select><br>            
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold"> Número de Documento</label>
                                    <input type="number" class="form-control" id="doc" required><br>                           
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold"> Nombres</label>
                                    <input type="text" class="form-control" id="nombres" required><br>                           
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold"> Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" required><br>                           
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold"> Celular</label>
                                    <input type="number" class="form-control" id="celular" required><br>                           
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="correo" required><br>                           
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold"> Profesión</label>
                                    <input type="text" class="form-control" id="profesion" required><br>                           
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" required><br>                           
                                </div>
                            </div>                                
                            <br>
                            <div class="col-md-3 mx-auto">
                                <input type="submit" class="btn btn-lg btn-success btn-block text-uppercase" id="btnFormu" value="Crear">
                                <br>
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
                <table class="col-md-12 table-responsive" id="tablainstructor">
                    <thead>
                        <tr>
                            <th>Tipo Documento</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Profesiónn</th>
                            <th>Opciones</th>
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
<script src="../Ajax/instructor.js"></script>

</body>
</html>