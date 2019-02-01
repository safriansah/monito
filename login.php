<?php
session_start();
if(isset($_SESSION['admin'])) header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Monitoring Tiang Beton</title>
        <link href="logotok.ico" rel="shortcut icon">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-default">
                        <div class="panel-body" style="text-align:center;background-color: #ec971f;color: #fff;" >
                            <h3>Sistem Monitoring Tiang Beton PLN Area Gresik</h3>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">Masukkan Username dan Password Anda. </h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="config/proses.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" name="username" required placeholder="Username"  type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required placeholder="Password" name="password" type="password" value="">
                                    </div>
                               
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" name="login" class="btn btn-success btn-block" value="Login">
                                        </div>
                                        <div class="col-md-6">
                                            <a href="lupapassword.php"><button class="btn btn-info btn-block">Lupa Password</button></a>
                                            <!-- Change this to a button or input when using this as a form -->
                                            
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
