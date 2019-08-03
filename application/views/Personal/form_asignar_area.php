<script type="text/javascript" src="<?php echo  base_url() ?>jsd/personal.js"></script>
<div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Asignación de Área y Roles</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="panel panel-default">
	                <div class="panel-heading" style="margin-bottom: 0;background: #009A8F;color:#FFFFFF;">
	                    Asignación de Área y Roles
	                </div>	                
	                <div class="panel-body">
	                    <form id="formulariopersona">
		                    <div class="row">
				                <div class="col-lg-4">
				                    <div class="form-group">
						                <label> Organización</label>
						                <SELECT NAME="cbxorganizacion" id = "cbxorganizacion" class="form-control" required="required">
						                </SELECT> 
							        </div>
				                </div>
				                <div class="col-lg-4">
				                    <div class="form-group">
						                <label> Tipo de Rol</label>
						                <SELECT NAME="cbxrol" id = "cbxrol" class="form-control" required="required">
						                </SELECT> 
							        </div>
				                </div>
				                <!-- /.col-lg-12 -->
				            </div>
			            </form> 
	                </div>
	                <div class="modal-footer">
				        <button id="cancelarpersona" type="button" class="btn btn-default" ><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
				        <button id="guardarpersona" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
				    </div>
	                <!-- /.panel-body -->
                </div>
                    <!-- /.panel -->               

        <!-- /#FIN CUERPO -->
</div>
        <!-- /#page-wrapper -->
<script type="text/javascript">
    $(document).ready(function(){
      var enlace = "<?php echo  base_url() ?>";
      baseurl(enlace);      
      cargarcombos();
      });
</script>

   
