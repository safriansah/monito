<script src="js/pass.js"></script>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">User Monitoring</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Pengguna
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                <form role="form" method="post" action="config/proses.php">           
					<div class="form-group">
                        <label for="exampleInputFile"> Nama</label>
                        <input type="text" name="nama" class="form-control"  placeholder="Masukkan Nama Pengguna" required="">
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile"> Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Masukkan Username" required="">
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile"> Password</label>
                        <input type="password"  id="myInput" name="password" class="form-control"  placeholder="Masukkan Password" required="">
                    </div>

					<!-- An element to toggle between password visibility -->
					<input type="checkbox" onclick="myFunction()">&nbspShow Password 
                    <br>
					<br>
					
					<div class="form-group">
                        <label for="exampleInputFile"> Nomer Telephone</label>
                        <input type="text" name="no_telp" class="form-control"  placeholder="Masukkan Nomer Telephone" required="">
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile"> Email</label>
                        <input type="text" name="email" class="form-control"  placeholder="Masukkan Email" required="">
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile"> Alamat</label>
                        <input type="text" name="alamat" class="form-control"  placeholder="Masukkan Alamat" required="">
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="selectError2">Jabatan</label>
						 <div class="controls">
                        <select name="jabatan" data-placeholder="Pilih Jabatan" id="selectError2" data-rel="chosen" style="width: 186px;">
                            <option value=""></option>
                                <option value="ADMIN">ADMIN</option>
                                <option value="VENDOR">VENDOR</option>
								<option value="RAYON">RAYON</option>
                                <option value="PENGAWAS">PENGAWAS</option>
                            </select>
                    </div>
                    </div>
                    <br>
                    <br>
                    
                    
                    
                    
                    

                        
                    <button type="submit" name="simpan_admin"  class="btn btn-danger">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
</div>
