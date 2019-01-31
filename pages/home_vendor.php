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
        <li><a class="ajax-link" href="index.php?pages=home_vendor"><i class="glyphicon glyphicon-home"> Home </i></a></li>
      
        
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"> Laporan Vendor <span class="caret"></span></i></a>
          <ul class="dropdown-menu" role="menu">
		<li><a href="?pages=view_vendor"><i class="glyphicon glyphicon-th-list"> View </i></a></li>
          </ul>
        </li>
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"> Profile Vendor <span class="caret"></span></i></a>
          <ul class="dropdown-menu" role="menu">
		<li><a href="?pages=profile_khusus_vendor"><i class="glyphicon glyphicon-th-list"> View </i></a></li>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>


<div class="row">
    <div class="box col-md-12">
    <div class="box-inner box responsive">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i> HSI </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
      
        
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
    <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
	 
          
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='HSI' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
    </tr>
            <?php $no++; } ?>
    </tbody>
    </table>
    </div>
<div class="box-content">
                <div id="sincos" class="center" style="height:5px"></div>
                <?php                        
                            $query_kk = mysql_query("SELECT COUNT(*) AS total FROM beranda WHERE vendor='HSI'") or die(mysql_error());
                            $show_kk = mysql_fetch_array($query_kk); ?>
                <p id="hoverdata" style="font-weight:">Total Pelanggan : ( <?php echo $show_kk['total']?> ) Pelanggan. <span
                        id="clickdata"></span></p>
            </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
	
	<div class="row">
    <div class="box col-md-12">
    <div class="box-inner box responsive">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i> JAYA </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
       
        
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
    <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='JAYA' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
    </tr>
            <?php $no++; } ?>
    </tbody>
    </table>
    </div>
<div class="box-content">
                <div id="sincos" class="center" style="height:5px"></div>
                <?php                        
                            $query_kk = mysql_query("SELECT COUNT(*) AS total FROM beranda WHERE vendor='JAYA'") or die(mysql_error());
                            $show_kk = mysql_fetch_array($query_kk); ?>
                <p id="hoverdata" style="font-weight:">Total Pelanggan : ( <?php echo $show_kk['total']?> ) Pelanggan. <span
                        id="clickdata"></span></p>
            </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
	
	<div class="row">
    <div class="box col-md-12">
    <div class="box-inner box responsive">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i> TJAKRINDO </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
       
        
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
    <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='TJAKRINDO' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
    </tr>
            <?php $no++; } ?>
    </tbody>
    </table>
    </div>
<div class="box-content">
                <div id="sincos" class="center" style="height:5px"></div>
                <?php                        
                            $query_kk = mysql_query("SELECT COUNT(*) AS total FROM beranda WHERE vendor='TJAKRINDO'") or die(mysql_error());
                            $show_kk = mysql_fetch_array($query_kk); ?>
                <p id="hoverdata" style="font-weight:">Total Pelanggan : ( <?php echo $show_kk['total']?> ) Pelanggan. <span
                        id="clickdata"></span></p>
            </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
	
	
	<div class="row">
    <div class="box col-md-12">
    <div class="box-inner box responsive">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i> TONGGAK </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
       
        
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
    <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='TONGGAK' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
    </tr>
            <?php $no++; } ?>
    </tbody>
    </table>
    </div>
<div class="box-content">
                <div id="sincos" class="center" style="height:5px"></div>
                <?php                        
                            $query_kk = mysql_query("SELECT COUNT(*) AS total FROM beranda WHERE vendor='TONGGAK'") or die(mysql_error());
                            $show_kk = mysql_fetch_array($query_kk); ?>
                <p id="hoverdata" style="font-weight:">Total Pelanggan : ( <?php echo $show_kk['total']?> ) Pelanggan. <span
                        id="clickdata"></span></p>
            </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
	
	<div class="row">
    <div class="box col-md-12">
    <div class="box-inner box responsive">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-list-alt"></i> WIKA </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
       
        
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
    <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='WIKA' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
    </tr>
            <?php $no++; } ?>
    </tbody>
    </table>
    </div>
<div class="box-content">
                <div id="sincos" class="center" style="height:5px"></div>
                <?php                        
                            $query_kk = mysql_query("SELECT COUNT(*) AS total FROM beranda WHERE vendor='WIKA'") or die(mysql_error());
                            $show_kk = mysql_fetch_array($query_kk); ?>
                <p id="hoverdata" style="font-weight:">Total Pelanggan : ( <?php echo $show_kk['total']?> ) Pelanggan. <span
                        id="clickdata"></span></p>
            </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->