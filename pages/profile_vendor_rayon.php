<?php
include"config/database.php";
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
<div id="content" class="col-lg-12 col-sm-12">
            <!-- content starts -->
    
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Profile Vendor</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        
        
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Vendor</th>
        <th style="text-align:center;">Nama Koordinator Vendor</th>
        <th style="text-align:center;">No Telephone</th>
		<th style="text-align:center;">Email</th>

    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM profile_vendor GROUP BY vendor, no ASC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['vendor'] ?></td>
        <td style="text-align: center"><?php echo $data['nama'] ?></td>
        <td style="text-align: center"><?php echo $data['no_telp'] ?></td>
		<td style="text-align: center"><?php echo $data['email'] ?></td>
    </tr>
            <?php $no++; } ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
      </div>
	  <?php
if($_GET['hapus']=="true"){
    $urutan = $_REQUEST['id'];
    $result = mysql_query("delete from profile_vendor where profile_vendor.`id`='$urutan'");
    if($result){
        echo '<script>history.go(-1)</script>';
    }
}
?>