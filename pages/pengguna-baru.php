<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sistem Monitoring</a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li class="divider"></li>
        <li><a class="ajax-link" href="index.php?pages=home_admin"><i class="glyphicon glyphicon-home"> Home </i></a></li>
        <li><a href="?pages=view_admin"><i class="glyphicon glyphicon-user"> User Monitoring </i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"> Pelanggan <span class="caret"></span></i></a>
          <ul class="dropdown-menu" role="menu">
           <li><a href="?pages=tambahpelanggan_admin"><i class="glyphicon glyphicon-plus"> Tambah </i></a></li>
		   <li class="divider"></li>
		<li><a href="?pages=viewpelanggan_admin"><i class="glyphicon glyphicon-th-list"> View </i></a></li>
          </ul>
        </li>
		
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>
		<?php
                   
                            $user = $_SESSION['admin'];
                            $query_user = mysql_query("SELECT * FROM admin WHERE username='$user'") or die(mysql_error());
                            $show_user = mysql_fetch_array($query_user); ?>
                       <?php echo $show_user['username']?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?pages=profil">Profile</a></li>

            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Admin</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="post" action="config/proses_admin.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama lengkap" required="">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">No. Telepon</label>
                        <input type="number" name="no_telp"  name="username" class="form-control" id="exampleInputPassword1" placeholder="085 xxx-xxx-xxx" required="">
                    </div>
                     <input type="hidden"  name="status" class="form-control" value="admin">
                    <button type="submit" name="simpan_admin"  class="btn btn-danger">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->