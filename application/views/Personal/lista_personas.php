<script type="text/javascript" src="<?php echo  base_url() ?>jsd/personal.js"></script>
<div id="page-wrapper">
<!-- /#INICIA CUERPO -->

    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de personal</h1> 
                </div>
                <!-- /.col-lg-12 -->
    </div>
  <!--   <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success">
                <strong>OPCIONES:</strong>                
                    <button class="btn btn-primary" onclick='nuevo_ingreso()'>NUEVO INGRESO</button>                  
                             
            </div> 
        </div>
    </div>-->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Personal pendiente de asignación de área
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombres</th>
                                            <th>Cargo</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Dirección</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <? $n = 1?>
                                        <? foreach($personas as $fila):?>
                                        <tr>
                                            <td><?= $n?></td>
                                            <td ><?= $fila->primer_apellido." ".$fila->segundo_apellido." ".$fila->nombres?></td>
                                            <td ><?= $fila->cargo?></td>
                                            <td ><?= $fila->correo?></td>
                                            <td ><?= $fila->telefono?></td>
                                            <td ><?= $fila->direccion?></td>
                                            <td ><button class="btn btn-primary" onclick='asignar_area(<?= $fila->id?>)'>Asignar</button></td>                                                                                       
                                        </tr>
                                        <? $n++;?>
                                        <?endforeach?>                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
<!-- /#FIN CUERPO -->
</div>
        <!-- /#page-wrapper -->
<script type="text/javascript">
    $(document).ready(function(){
      var enlace = "<?php echo  base_url() ?>";
      baseurl(enlace);      
      });
</script>
   
