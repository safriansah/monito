<script src="js/pass.js"></script>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Profile Vendor</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Profile Vendor
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">

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
