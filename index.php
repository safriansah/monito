<?php
    include 'config/database.php';
    if(!isset($_SESSION['admin'])) header('Location: login.php');
    $user = $_SESSION['admin'];
    $query_user = mysql_query("SELECT * FROM admin WHERE username='$user'") or die(mysql_error());
    $show_user = mysql_fetch_array($query_user);
    $username=$show_user['username'];
    $jabatan=$show_user['jabatan'];
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

        <!-- DataTables CSS -->
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

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
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Sistem Monitoring Tiang Beton</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> </a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                        <?php
                        $result = mysql_query("SELECT * FROM beranda WHERE STATUS<>'Selesai' AND rencana_pasang<NOW() order by No DESC ");
                        while($data = mysql_fetch_array($result)){
                        ?>
                            <li>
                                <a href="?pages=notifikasi">
                                    <div>
                                        <?php echo "<b>".$data['vendor']."</b> (".$data['nama_pelanggan']." / ".$data['rencana_pasang'].")"; ?>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="divider"></li>
                        <li>
                                <a class="text-center" href="?pages=notifikasi">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $username ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="?pages=profil"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="
                                    <?php if($jabatan=='ADMIN') echo"?pages=home_admin"; 
                                            elseif($jabatan=='VENDOR') echo"?pages=home_vendor";
                                            elseif($jabatan=='PENGAWAS') echo"?pages=home_pengawas";
                                            elseif($jabatan=='RAYON') echo"?pages=home_rayon";
                                    ?>">
                                    <i class="fa fa-home fa-fw"></i> Home
                                </a>
                            </li>
                            <?php if($jabatan=='ADMIN'){ ?>
                            <li>
                                <a href="?pages=view_admin"><i class="fa fa-user fa-fw"></i> User Monitoring</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i> Pelanggan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?pages=tambahpelanggan_admin">Tambah</a>
                                    </li>
                                    <li>
                                        <a href="?pages=viewpelanggan_admin">View</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user-secret fa-fw"></i> Profile Vendor<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?pages=profile_vendor">View</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <?php }elseif($jabatan=='VENDOR'){ ?>
                            <li>
                                <a href="#"><i class="fa fa-copy fa-fw"></i> Laporan Vendor<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?pages=view_vendor">View</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user-secret fa-fw"></i> Profile Vendor<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?pages=profile_khusus_vendor">View</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <?php }elseif($jabatan=='PENGAWAS' || $jabatan=='RAYON'){ ?>
                            <li>
                                <a href="#"><i class="fa fa-copy fa-fw"></i> Laporan Vendor<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?pages=view_pengawas">View</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user-secret fa-fw"></i> Profile Vendor<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?pages=profile_vendor_pengawas">View</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <?php include'konten.php' ?>

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('.dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
