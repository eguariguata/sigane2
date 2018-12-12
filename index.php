<?php 
session_start();
 session_destroy();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGANE | Inicio Sesión</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/floating-labels.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">
    

    <div class="container">

      <div class="py-5 text-center">
  
        <img src="assets/img/Sigane2.png" alt="" />
       
      </div>

      <div class="row justify-content-center">
        <div class="col-4">
                      
            <div class="panel-body">
              
            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus id="username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" id ="password">
                                </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Recordar usuario
                                        </label>
                                    </div> 
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="Entrar">Entrar</button>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mensaje">
                                </div>
                            </fieldset>
            </div>
         
        </div>
      </div>  
    </div>    
     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/js/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/scripts/Login.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>