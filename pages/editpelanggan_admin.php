<script src="js/pass.js"></script>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Pelanggan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Pelanggan
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">

<?php
$no = $_REQUEST['id'];
$query = mysql_query("select * from beranda where no='$no'");
$edit = mysql_fetch_array($query);
?>
    <form role="form" method="post" action="config/prosesedit_admin.php" enctype="multipart/form-data">
					
					
					 <div class="form-group">
                   <input type="hidden" name="no" value="<?php echo $edit['no']?>" class="form-control" placeholder="Enter text">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Nama Vendor</label>
                            <input type="text" name="vendor" class="form-control" value="<?php echo $edit['vendor']?>">
                    </div>
					
                    <div class="form-group">
                        <label for="exampleInputFile">Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $edit['nama_pelanggan']?>">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Kontrak Jasa</label>
                            <input type="text" name="kontrak_jasa" class="form-control" value="<?php echo $edit['kontrak_jasa']?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">No SPB Vendor</label>
                            <input type="text" name="no_spb_vendor" class="form-control" value="<?php echo $edit['no_spb_vendor']?>" >
                    </div>
					 <div class="form-group">
                        <label for="exampleInputFile">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" value="<?php echo $edit['lokasi']?>" >
                    </div>
					 <div class="form-group">
                        <label for="exampleInputFile">Rayon</label>
                            <input type="text" name="rayon" class="form-control" value="<?php echo $edit['rayon']?>" >
                    </div>
					 <div class="form-group">
                        <label for="exampleInputFile">Tanggal Kirim Gambar</label>
                            <input type="date" name="kirim_gambar" class="form-control" value="<?php echo $edit['kirim_gambar']?>" > 
                    </div>
					 <div class="form-group">
                        <label for="exampleInputFile">No Surat Keluar</label>
                            <input type="text" name="no_surat_keluar" class="form-control" value="<?php echo $edit['no_surat_keluar']?>" > 
                    </div>
					 <div class="form-group">
                        <label for="exampleInputFile">Tanggal Surat</label>
                            <input type="date" name="tgl_surat" class="form-control" value="<?php echo $edit['tgl_surat']?>" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 9m</label>
                         <input type="text" name="v_9m" class="form-control" value="<?php echo $edit['v_9m']?>" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 11m</label>
                         <input type="text" name="v_11m" class="form-control" value="<?php echo $edit['v_11m']?>" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 13m</label>
                         <input type="text" name="v_13m" class="form-control" value="<?php echo $edit['v_13m']?>" >
                    </div>
				
					<div class="form-group">
                        <label for="exampleInputFile">SLA</label>
                         <input type="text" name="sla" class="form-control" value="<?php echo $edit['sla']?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tanggal Rencana Pasang</label>
                            <input type="date" name="rencana_pasang" class="form-control" value="<?php echo $edit['rencana_pasang']?>" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Tanggal Pasang</label>
                            <input type="date" name="tgl_pasang" class="form-control" value="<?php echo $edit['tgl_pasang']?>">
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">No BA</label>
                            <input type="text" name="no_ba" class="form-control" value="<?php echo $edit['no_ba']?>" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Tanggal BA ke Vendor</label>
                            <input type="date" name="ba_ke_vendor" class="form-control" value="<?php echo $edit['ba_ke_vendor']?>" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Status</label>
                            <input type="text" name="status" class="form-control" value="<?php echo $edit['status']?>" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $edit['keterangan']?>">
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Laporan</label>
                            <input type="text" name="laporan" class="form-control" value="<?php echo $edit['laporan']?>" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Foto Dokumen</label>
							 <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
							 <input type="file" name="foto_dokumentasi">
                    
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