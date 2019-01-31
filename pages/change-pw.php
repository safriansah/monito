<?php
//Mengambil ID Admin
$user_admin = $_SESSION['admin'];
$query_admin = mysql_query("SELECT * FROM admin WHERE username='$user_admin'") or die(mysql_error());
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
                                    Form Ganti Password
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                <form role="form" method="post" action="config/proses.php">
                    <div class="form-group col-lg-6">
                                <label>Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="username"  value="<?php echo $show_admin['username']?>" class="form-control" placeholder="Masukkan Username" readonly="">
                                </div>
                            </div>
                    <div class="form-group col-lg-6">
                                <label>Password Lama</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" name="passwordlama" class="form-control" placeholder="*********" required>
                                </div>
                            </div>
                   <div class="form-group col-lg-6">
                                <label>Password Baru</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" name="passwordbaru1" class="form-control" placeholder="*********" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Konfirmasi Password Baru</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" name="passwordbaru2" class="form-control" placeholder="*********" required>
                                </div>
                            </div>
                    <button type="submit" name="change_pw"  class="btn btn-danger">Simpan</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->