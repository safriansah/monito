<?php
 include 'config/database.php';
?>


		
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
      <a class="navbar-brand" href="#">Sistem Monitoring Tiang Beton</a>
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
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"> Profile Vendor <span class="caret"></span></i></a>
          <ul class="dropdown-menu" role="menu">
		<li><a href="?pages=profile_vendor"><i class="glyphicon glyphicon-th-list"> View </i></a></li>
          </ul>
        </li>
      </ul>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>
		<?php
                   
                            $user = $_SESSION['admin'];
                            $query_user = mysql_query("SELECT * FROM admin WHERE username='$user'") or die(mysql_error());
                            $show_user = mysql_fetch_array($query_user); ?>
                       <?php echo $show_user['username']?></a></li>
        <li><a href="?pages=notifikasi"><span class="glyphicon glyphicon-envelope"></span>
		<?php
		$jumlah =  mysql_query("SELECT COUNT(*)AS jumlah FROM beranda WHERE STATUS<>'Selesai' AND tgl_pasang<NOW()") or die(mysql_error());
        $show = mysql_fetch_array($jumlah);
		echo $show['jumlah']?>
		</a></li>
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

    <script src="js/pass.js"></script>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="" style="padding-right: 500px;>
                <h2><i class="glyphicon glyphicon-edit"></i> Form Profile Vendor </h2>

               
            </div>
                     <div class="box-content">
                <form role="form" method="post" action="config/proses.php">           
					<div class="form-group">
                        <label for="exampleInputFile"> Vendor</label>
                        <input type="text" name="vendor" class="form-control"  placeholder="Masukkan Nama Vendor" >
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile"> Nama</label>
                        <input type="text" name="nama" class="form-control"  placeholder="Masukkan Nama Pelanggan" >
                    </div>

					<div class="form-group">
                        <label for="exampleInputFile"> Nomer Telephone</label>
                        <input type="text" name="no_telp" class="form-control"  placeholder="Masukkan Nomer Telephone" >
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile"> Email</label>
                        <textarea name="email" class="form-control"  placeholder="Masukkan Email" ></textarea>
                    </div>
                    

                    <button type="submit" name="simpan_profile_vendor"  class="btn btn-danger">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
