<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Ficha</h1></center>
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">                
                <div class="card card-signin my-3">                
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <form class="form-signin row" autocomplete="off" id="formularioFicha">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Codigo de Ficha</label>
                                    <input type="number" class="form-control text-center" id="codigo" autofocus><br> 
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Seleccione Programa de Formación</label>
                                    <input type="text" class="form-control text-center" list="programas" id="programa">
                                    <datalist id="programas">
                                    </datalist>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 text-center">
                                <div class="form-label-group mx-auto">
                                    <label class="font-weight-bold">Cargar Apredices</label><br>
                                    Mediante Excel: <input type="radio" id="opcion1" name="opcion" style="margin-right: 90px;" checked>
                                    Mediante Formulario: <input type="radio" id="opcion2" name="opcion">                           
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12" id="opcionArchivo" style="display: block;">
                                <div class="form-label-group">
                                    <br>
                                    <label class="font-weight-bold">Archivo</label>
                                    <input type="file" class="form-control" accept=".xls" id="archivo" style="padding-bottom: 40px;"> 
                                    <label class="font-weight">Descargue <a href="../../Recursos/Plantilla Para Cargar Aprendices.xls">Aquí</a> la plantilla.</label>                        
                                </div>
                            </div>
                            <div id="opcionFormulario" style="display: none;">
                            <br>
                                <div class="row col-md-12" >
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <label class="font-weight-bold"> Tipo de Documento</label>
                                            <select class="form-control" id="tipodoc">
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
                                            <input type="number" class="form-control" id="doc"><br>                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <label class="font-weight-bold"> Nombres</label>
                                            <input type="text" class="form-control" id="nombres"><br>                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <label class="font-weight-bold"> Apellidos</label>
                                            <input type="text" class="form-control" id="apellidos"><br>                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <label class="font-weight-bold"> Celular</label>
                                            <input type="number" class="form-control" id="celular"><br>                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <label class="font-weight-bold">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="correo"><br>                           
                                        </div>
                                    </div>
                                
                                    <div class="col-md-11 text-right">
                                        <button class="btn btn-success" id="aggAprendiz"> <i class="fa fa-user-plus"></i> </button>
                                    </div><br><br>
                                </div>
                            </div>
                            <div class="col-md-12" >
                                <table  class="col-md-12 table-responsive" id="tablaAprendiz">
                                    <thead  id="cabezatablaAprendiz" style="display: none;">
                                        <tr>
                                            <th>Tipo Documento</th>
                                            <th>Documento</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Celular</th>
                                            <th>Correo</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cuerpotablaAprendiz"></tbody>
                                </table>
                            </div>
                            <div class="col-md-3 mx-auto">
                                <input type="submit" class="btn btn-lg btn-success btn-block text-uppercase" id="btnFormu" value="Guardar"><br>
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
                <table id="tablaficha">
                    <thead>
                        <tr>
                            <th>Ficha</th>
                            <th>Programa</th>
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

<!-- Footer -->
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?>
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/xlsx.full.min.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script src="../Ajax/ficha.js"></script>

</body>
</html>