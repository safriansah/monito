<?php
//Mengambil ID Admin
$pengguna = $_SESSION['admin'];
$query_admin = mysql_query("SELECT * FROM admin WHERE username='$pengguna'") or die(mysql_error());
$show_admin = mysql_fetch_array($query_admin);
?>
<script src="js/pass.js"></script>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Profile</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Profile
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
 <div class="alert alert-danger">
                <h4 class="alert-heading"></h4>

                <p>Setelah anda merubah Password kecuali Data Profile, anda akan login ulang kembali.</p>
            </div>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <?php
                    if($_SESSION['admin']){
                        echo "<h3 style='text-align:center;'>Selamat Datang</h3>";
                        echo "<h3 class='profile-username text-center'>".$show_admin['nama']."</h3>";
                       

                    }
               ?>
                    <a href="?pages=change-pw" class="btn btn-primary btn-block"><b>Ganti sandi</b></a>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

           
        </div><!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body box-profile">
                        <form class="form-horizontal" action="config/proses.php" method="post">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="inputName" name="id" value="<?php if($_SESSION['admin']){ echo $show_admin['id']; } ?>">
                                    <input type="text" class="form-control" id="inputName" name="nama" value="<?php if($_SESSION['admin']){ echo $show_admin['nama']; } ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="username" value="<?php if($_SESSION['admin']){ echo $show_admin['username']; } ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">No. Telepon</label>
                                <div class="col-sm-10">
                                    <input type="number_format" class="form-control" id="inputName" name="no_telp" value="<?php if($_SESSION['admin']){ echo $show_admin['no_telp']; } ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="email" value="<?php if($_SESSION['admin']){ echo $show_admin['email']; }?>" required>
                                </div>
                            </div>
							 <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="alamat" value="<?php if($_SESSION['admin']){ echo $show_admin['alamat']; }?>" required>
                                </div>
                            </div>
							 <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">jabatan</label>
								 <div class="controls">
							
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" name="tempat" value="<?php if($_SESSION['admin']){ echo $show_admin['jabatan']; }?>" readonly>
                                </div>
								</div>
                            </div>
                          <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="editprofil" class="btn btn-danger">Simpan</button>
                                </div>
                            </div>
                        </form>
                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->