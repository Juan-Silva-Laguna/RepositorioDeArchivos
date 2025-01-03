<?php include('head.php'); ?>
    <div class="container"><br><center><h1>Asignar Ficha a Instructor</h1></center><br>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">                
                <div class="card card-signin my-3">                
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <form class="form-signin row" autocomplete="off" id="formularioFichaInstructor">  
                        <input type="hidden" id="id">                          
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Instructor</label>
                                    <input type="text" class="form-control text-center" list="instructores" id="instructor" autofocus required>
                                    <datalist id="instructores">
                                    
                                    </datalist>
                                    <br> 
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label class="font-weight-bold">Ficha</label>
                                    <input type="number" class="form-control text-center" list="fichas" id="ficha" required>
                                    <datalist id="fichas">
                                    
                                    </datalist>
                                    <br> 
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-6 mx-auto">
                                <input type="submit" class="btn btn-lg btn-success btn-block text-uppercase" id="btnFormu" value="Asignar"><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <table id="tablaFichaInstructor">
                    <thead>
                        <tr>
                            <th>Instructor</th>
                            <th>Ficha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="cuerpotabla">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <br><br>
        <div class="row">
           
                
            
        </div>
        <br><br>
    </div>
<script src="../../Recursos/Js/jquery.js"></script>  
<?php include('../footer.php'); ?>
<script src="../../Recursos/Js/bootstrap.js"></script> 
<script src="../../Recursos/Js/jquery.dataTables.min.js"></script>
<script src="../Ajax/fichaInstructor.js"></script>

</body>
</html>