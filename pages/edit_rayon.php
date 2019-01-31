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
        <li><a class="ajax-link" href="index.php?pages=home_rayon"><i class="glyphicon glyphicon-home"> Home </i></a></li>
	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"> Laporan Vendor <span class="caret"></span></i></a>
          <ul class="dropdown-menu" role="menu">
		<li><a href="?pages=view_rayon"><i class="glyphicon glyphicon-th-list"> View </i></a></li>
          </ul>
        </li>
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"> Profile Vendor <span class="caret"></span></i></a>
          <ul class="dropdown-menu" role="menu">
		<li><a href="?pages=profile_vendor_rayon"><i class="glyphicon glyphicon-th-list"> View </i></a></li>
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

<?php
$no = $_REQUEST['id'];
$query = mysql_query("select * from beranda where no='$no'");
$edit = mysql_fetch_array($query);
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Edit Pelanggan</h2>

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
    <form role="form" method="post" action="config/prosesedit_rayon.php" enctype="multipart/form-data">
					
					
					 <div class="form-group">
                   <input type="hidden" name="no" value="<?php echo $edit['no']?>" class="form-control" placeholder="Enter text">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Nama Vendor</label>
                            <input type="text" name="vendor" class="form-control" value="<?php echo $edit['vendor']?>" readonly>
                    </div>
					
                    <div class="form-group">
                        <label for="exampleInputFile">Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $edit['nama_pelanggan']?>" readonly>
                    </div>
					 <div class="form-group">
                        <label for="exampleInputFile">Tanggal Pasang</label>
                            <input type="date" name="tgl_pasang" class="form-control" value="<?php echo $edit['tgl_pasang']?>" readonly>
                    </div>
					<br>
                <div class="form-group">
                        <label for="exampleInputFile">Foto Dokumen</label>
							 <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
							 <input type="file" name="foto_dokumentasi">
                    
					</div>
					<br>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 9m</label>
                         <input type="text" name="v_9m" class="form-control" value="<?php echo $edit['v_9m']?>" readonly>
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 11m</label>
                         <input type="text" name="v_11m" class="form-control" value="<?php echo $edit['v_11m']?>" readonly>
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 13m</label>
                         <input type="text" name="v_13m" class="form-control" value="<?php echo $edit['v_13m']?>" readonly>
                    </div>
					
					<br>
					 <div class="control-group">
                    <label class="control-label" for="selectError2">Sesuai/Tidak Sesuai</label>
                    <div class="controls">
                        <select name="s_t" data-placeholder="" id="selectError2" data-rel="chosen" style="width: 186px;">
                            <option value=""></option>
                                <option value="Sesuai">Sesuai</option>
                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                            </select>
                    </div>
                </div>
				<br>
					
					<div class="form-group">
                        <label for="exampleInputFile">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $edit['keterangan']?>">
                    </div>
					<br>
					<input type="submit" class="btn btn-danger" value="Ubah">
               
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->