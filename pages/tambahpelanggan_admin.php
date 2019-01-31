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

                <form role="form" method="post" action="config/prosestambah_admin.php" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="exampleInputFile">Nama Vendor</label>
                        <input type="text" name="vendor" class="form-control"  placeholder="Masukkan Nama Vendor" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control"  placeholder="Masukkan Nama Pelanggan" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Kontrak Jasa</label>
                        <input type="text" name="kontrak_jasa" class="form-control"  placeholder="Masukkan Kontrak" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">No SPB Vendor</label>
                        <input type="text" name="no_spb_vendor" class="form-control"  placeholder="Masukkan No Spb" >
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control"  placeholder="Masukkan Lokasi" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Rayon</label>
                        <input type="text" name="rayon" class="form-control"  placeholder="Masukkan Nama Rayon" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Tanggal Kirim Gambar</label>
                        <input type="date" name="kirim_gambar" class="form-control"  placeholder="" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">No Surat Keluar</label>
                        <input type="text" name="no_surat_keluar" class="form-control"  placeholder="Masukkan No Surat" >
                    </div>
					
					
					<div class="form-group">
                        <label for="exampleInputFile">Tanggal Surat WO</label>
                        <input type="date" name="tgl_surat" class="form-control"  placeholder="Masukkan No Surat" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 9m</label>
                        <input type="text" name="v_9m" class="form-control"  placeholder="Masukkan Jumlah Tiang 9m" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 11m</label>
                        <input type="text" name="v_11m" class="form-control"  placeholder="Masukkan Jumlah Tiang 11m" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Volume Tiang 13m</label>
                        <input type="text" name="v_13m" class="form-control"  placeholder="Masukkan Jumlah Tiang 13m" >
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">SLA</label>
                        <input type="text" name="sla" class="form-control"  placeholder="Masukkan No SLA" >
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile">Tanggal Rencana Pasang</label>
                        <input type="date" name="rencana_pasang" class="form-control"  placeholder="Masukkan Tanggal Rencana Pasang" >
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile">Tanggal Pasang</label>
                        <input type="date" name="tgl_pasang" class="form-control"  placeholder="Masukkan Tanggal Pasang" >
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile">No BA</label>
                        <input type="text" name="no_ba" class="form-control"  placeholder="Masukkan No BA" >
                    </div>
                    
					<div class="form-group">
                        <label for="exampleInputFile">BA Ke Vendor</label>
                        <input type="date" name="ba_ke_vendor" class="form-control"  placeholder="Masukkan " >
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">Status</label>
                        <input type="text" name="status" class="form-control"  placeholder="Belum / Selesai " >
                    </div>
					
                    
					<div class="form-group">
                        <label for="exampleInputFile">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control"  placeholder="Masukkan Keterangan">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Laporan</label>
                        <input type="text" name="laporan" class="form-control"  placeholder="Masukkan Laporan" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile">Foto Dokumen</label>
							 <input type="checkbox" name="tambah_foto" value="true"> Ceklis jika foto sudah sesuai<br>
							 <input type="file" name="foto_dokumentasi">
                    
					</div>
                    <br>
                    
                    
                    
                    
                    
                    
                    
                    

                        <input type="submit" class="btn btn-danger" value="Simpan">
                    <button type="reset" class="btn btn-danger">Reset</button>
					
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
