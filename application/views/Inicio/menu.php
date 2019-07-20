 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #005462;color:#FFFFFF;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="margin-bottom: 0;background: #005462;color:#FFFFFF;"href="">UGS - GESTION DE ACTIVIDADES</a>

    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right" >
        
        <!-- /.dropdown -->
        <li>
            <a href="<?php echo base_url()?>usuarios/salir" role="button">Cerrar sesión</a></li>
        
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation" style="margin-bottom: 0; color:#2E9AFE; ">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <span class="input-group-btn">
                            <H5>Usuario: <br><?= $usuario?></H5>
                            
                        </span>
                    </div>                    
                </li>
                <li>
                  <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>INICIO</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Nuevo Usuario</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Asignación de Área</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Cambio de Área</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Roles Usuarios</a>
                        </li>                        
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Actividades<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Asignación de Actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Presentaciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Gestión de Problemas</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Nuevo Requerimiento</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Mantenimientos</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Configuraciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Integración</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Revisión de Documentación</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Envío a Producción</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Cancelación de actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Cierre de actividades</a>
                        </li>

                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Gestión de Problemas<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Revisión de actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Presentaciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Registro Definición</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Nuevo Requerimiento<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Revisión de actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Presentaciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Solicitud Pruebas de integración</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Ver Revisión de Documentación</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Envío a Producción</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Actividades<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Revisión de actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Presentaciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Definir actividad</a>
                        </li>                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Mantenimientos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Revisión de actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Presentaciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Solicitud Pruebas de integración</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Ver Revisión de Documentación</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Envío a Producción</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Configuraciones <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Presentaciones</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Solicitud Pruebas de integración</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Ver Revisión de Documentación</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Envío a Producción</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Integración <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Plan de pruebas</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Reportes de error</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Certificar actividad</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Ver Revisión de Documentación</a>
                        </li>                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Revisión de Documentación<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Actividades</a>
                        </li>                        
                        <li>
                            <a href="<?php echo site_url("");?>">Reportes de error</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Certificar actividad</a>
                        </li>                                             
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Administración de Integración<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Actividades</a>
                        </li>                        
                        <li>
                            <a href="<?php echo site_url("");?>">Asignar actividad</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Presentación de actividades</a>
                        </li>  
                        <li>
                            <a href="<?php echo site_url("");?>">Reportes de error</a>
                        </li>                                             
                        <li>
                            <a href="<?php echo site_url("");?>">Enviar a Revisión de documentación</a>
                        </li>  
                        <li>
                            <a href="<?php echo site_url("");?>">Actividades en Revisión de documentación</a>
                        </li>  
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Envió a Producción<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("");?>">Actividades Pedientes</a>
                        </li>                                                
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reportes Consultas<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                       <li>
                            <a href="<?php echo site_url("");?>">Reporte de actividades</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("");?>">Reporte Usuarios</a>
                        </li>
                    </ul>
                </li>
                <? foreach($rolescero as $rol):?>
                    <li>
                      <a href="index.html"><i class="fa fa-dashboard fa-fw"></i><?=$rol->opcion?></a>
                    </li>
                <?endforeach?> 
               <? $nivelanterior = 0;  ?>
                <? foreach($roles as $rol):?>
                    <? if ($rol->nivel== 1){?>
                        <? if ($nivelanterior == 2){?>
                            </ul>
                          </li>
                        <?}?>      
                        <li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i><?=$rol->opcion?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">                                                      
                    <?}?>
                    <? if ($rol->nivel == 2){?>
                        <li>
                            <a href="<?php echo site_url($rol->link);?>"><?=$rol->opcion?></a>
                        </li>
                    <?}?>
                    <? $nivelanterior = $rol->nivel;  ?>
                <?endforeach?>         
                <? if ($nivelanterior == 2){?>
                    </ul>
                  </li>
                <?}?>  
                
            </ul>
        </div>
        
    </div>
    <!-- /.navbar-static-side -->
</nav>