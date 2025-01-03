<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Grupos de ficha <?php echo $_POST['id_ficha'];?></h1></center>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">                
                    <div class="card card-signin my-3">                
                        <div class="card-body" style="background-color: #F5F5F5;">
                        <form class="form-signin row" autocomplete="off" id="formProyecto">
                            <input type="hidden" id="id_ficha" value="<?php echo $_POST['id_ficha'];?>">
                            <input type="hidden" id="id_instructor" value="<?php echo $_SESSION['idInstructor'];?>">
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
                            <div class="col-md-6">
                                <div class="form-label-group">
                                <center><label class="font-weight-bold">Grupo de Aprendices:</label></center>
                                    <ul id="listaAprendices"></ul>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="item" class="font-weight-bold">Item Calificable:</label>
                                    <input type="text" class="form-control" id="item">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-1" style="margin-top: 30px;">
                                <div class="form-group">
                                    <button class="btn btn-success" id="aggItem"> <i class="fa fa-plus-square"></i> </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                <center><label class="font-weight-bold">Lista de Chequeo:</label></center>
                                    <ul id="listaItems"></ul>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-3 mx-auto">
                                <input type="submit" class="btn btn-lg btn-success btn-block text-uppercase" id="btnFormu"  value="Crear"><br>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12"><br><br>
                    <table class="table-responsive" id="tablaProyecto">
                        <thead>
                            <tr>
                                <th>Nombre de Proyecto</th>
                                <th>Descripción</th>
                                <th>Grupo</th>
                                <th>Items</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpotablaproyecto"></tbody>
                    </table>
                <br><br></div>
            </div>
            
        </div>
    </div>

<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?>  
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script src="../Ajax/gruposProyecto.js"></script>

</body>
</html>