<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGANE | Planilla de Registro</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <!--link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header"> <!--barra lateral izq-->
                <class="navbar-brand">
                    <img src="assets/img/sigane2.png" alt="" /> <!--imagen de pantalla principal-->
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right"> <!-- ESTA SECCION ES EL MENU ADMINISTRATIVO PARA EL USUARIO-->
            <div class="user-section"><!--user image section-->
                    <div class="user-section-inner">
                    <img src="assets/img/iutoms.jpg" alt="">
                    </div>
            <div class="user-info">
                   <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div><strong>Eikel Guariguata</strong></div></a>
                <ul class="dropdown-menu dropdown-user"><!-- dropdown user-->
                        <li><a href="logout.php"><i class="fa fa-users fa-fw"></i>Crear Usuario</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-gear fa-fw"></i>Configuración de Usuario</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar sesión</a>
                        <li>
                        <!--/li>
                </ul><!-- end dropdown-user -->
                </li><!-- end main dropdown -->
            </ul><!-- end navbar-top-links -->
        </nav><!-- end navbar top -->
        <nav class="navbar-default navbar-static-side" role="navigation"><!-- navbar side -->
            <div class="sidebar-collapse"> <!-- sidebar-collapse -->
                <ul class="nav" id="side-menu"><!-- side-menu -->
                    <li>
                    </li>
                    <li class="selected">
                        <a href="planillaregistro.php"><i class="fa-fw"></i><b>Nuevo Registro</b></a>
                    </li>
                    <li>
                        <a href="planillaregistro.php"><i class="fa-fw"></i><b>Modificar Registro</b></span></a>
                    </li>
                     <li>
                        <a href="logout.php"><i class="fa-fw"></i><b>Consultar Registro</b></a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa-fw"></i><b>Eliminar Registro</b></a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa-fw"></i><b>Reportes</a>
                    </li>
                    </li>
                </ul><!-- end side-menu -->
            </div><!-- end sidebar-collapse -->
        </nav><!-- end navbar side -->
        <div id="page-wrapper"><!--  page-wrapper -->
            <div class="row"><!-- Page Header -->
            <div class="col-lg-12"><!-- col-12 -->
                    <h1 class="page-header">Sistema de Registro de Pre-Inscripción</h1>
                    
    <form action="assets\includes\IndexAjax.php" role="form"> 
            <strong>Datos Alumnos</strong>
                    <br>
                    <br>
            <div class="row form-group">
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Nombres</label>
                    <input type="text" id="nombres" class="form-control">
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Apellidos</label>
                    <input type="text" id="apellidos" class="form-control">
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Cedula Escolar</label>
                    <input type="text" id="cedulaescolar" class="form-control">
                </div>   
            </div> 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Lugar de Nacimiento</label>
                    <select name="select" id="lugar_nac" class="form-control">
                        <option value="0">Seleccione</option>           
                  </select>   
                </div>
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Fecha de Nacimiento</label>
                    <input type="text" id="fecha_nac" class="form-control">   
                </div>
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Edad</label>
                    <input type="text" id="edad_alumno" class="form-control">   
                </div>
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">N° de Teléfono</label>
                    <input type="text" id="telefono_alumno" class="form-control">   
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-12">
                    <label for="text-input" class=" form-control-label">Dirección</label>
                    <input type="text" id="direccion_alumno" class="form-control">   
                </div>            
            </div> 
            </div><!-- end col-12 -->
            <div class="card-body card-block">
            <div class="card-header">
                <br>
            <strong>Datos Familiares</strong> 
            </div>
                <br>
            <div class="row form-group">
                <div class="col col-md-6">
                    <label for="text-input" class=" form-control-label">Nombres y Apellidos de la Madre</label>
                    <input type="text" id="nombre_madre" class="form-control">   
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Cedula de Identidad</label>
                    <input type="text" id="ci_madre" class="form-control">   
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-8">
                    <label for="text-input" class=" form-control-label">Empresa Donde Trabaja</label>
                    <input type="text" id="empresa_madre" class="form-control">   
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">N° de Teléfono</label>
                    <input type="text" id="telefono_madre" class="form-control">   
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-6">
                    <label for="text-input" class=" form-control-label">Nombres y Apellidos del Padre</label>
                    <input type="text" id="nombre_padre" class="form-control">   
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Cedula de Identidad</label>
                    <input type="text" id="ci_padre" class="form-control">   
                </div>    
            </div>
            <div class="row form-group">
                <div class="col col-md-8">
                    <label for="text-input" class=" form-control-label">Empresa Donde Trabaja</label>
                    <input type="text" id="empresa_padre" class="form-control">   
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">N° de Telefono</label>
                    <input type="text" id="telefono_padre" class="form-control">   
                </div>
            </div>

            </div><!-- end card-body -->
            <div class="card-body card-block">
            <div class="card-header">
                <br>
            <strong>Datos del Representante Legal</strong> 
            </div>
            <br>
            <div class="row form-group">
                <div class="col col-md-6">
                    <label for="text-input" class=" form-control-label">Nombres y Apellidos</label>
                    <input type="text" id="nombre_representante" class="form-control">   
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Cedula de Identidad</label>
                    <input type="text" id="ci_representante" class="form-control">   
                </div>
                <div class="col col-md-2">
                    <label for="text-input" class=" form-control-label">Parentesco</label>
                    <select name="select" id="parentesco" class="form-control">
                        <option value="0">Parentesco</option>
                    </select>
                </div>
            </div>        
            <div class="row form-group">
                <div class="col col-md-12">
                    <label for="text-input" class=" form-control-label">Dirección</label>
                    <input type="text" id="direc_representante" class="form-control">   
                </div>            
            </div>
            <div class="row form-group">
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Profesión</label>
                    <input type="text" id="profecion" class="form-control">   
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Empresa</label>
                    <input type="text" id="empre_repres" class="form-control">   
                </div>
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Número Telefonico</label>
                    <input type="text" id="tele_repre" class="form-control">   
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        </div>
    </div> 
                </div>
            </div><!--End Page Header -->
        </div><!-- end page-wrapper -->
    </div><!-- end wrapper -->
    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
</body>
</html>