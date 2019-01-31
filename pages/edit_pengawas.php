<script src="js/pass.js"></script>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Laporan Vendor</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Laporan Vendor
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">


<?php
$no = $_REQUEST['id'];
$query = mysql_query("select * from beranda where no='$no'");
$edit = mysql_fetch_array($query);
?>
    <form role="form" method="post" action="config/prosesedit_pengawas.php" enctype="multipart/form-data">
					
					
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