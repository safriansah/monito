            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Pelanggan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-lg-6">Tabel Pelanggan</div>
                                        <div class="col-lg-6">
                                            <a href="export/export_pelanggan.php">
                                                <button style="margin: 0px 0px;float:right" type="button" class="btn btn-warning">Export Data Pelanggan</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
                    <tr>
                    <th>No</th>
        <th>Nama Vendor</th>
        <th>Nama Pelanggan</th>
        <th>Kontrak Jasa</th>
        <th>Nomer SPB Vendor</th>
		<th>Lokasi</th>
		<th>Rayon</th>
		<th>Tanggal Kirim Gambar</th>
		<th>Nomer Surat Keluar</th>
		<th>Tanggal Surat WO</th>
		<th>Volume Tiang 9m</th>
		<th>Volume Tiang 11m</th>
		<th>Volume Tiang 13m</th>
		<th>SLA</th>
		<th>Tanggal Rencana Pasang</th>
		<th>Tanggal Pasang</th>
		<th>Nomer BA</th>
		<th>Tanggal BA Ke Vendor</th>
		<th>Status</th>
		<th>Keterangan</th>
		
		<th>Laporan</th>
		<th>Foto Dokumen</th>
		<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOPSI&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            $result = mysql_query("SELECT * FROM beranda GROUP BY vendor, No DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td><?php echo $no ?></td>
       <td><?php echo $data['vendor'] ?></td>
	   	<td><?php echo $data['nama_pelanggan'] ?></td>
		<td><?php echo $data['kontrak_jasa'] ?></td>
        <td><?php echo $data['no_spb_vendor'] ?></td>
        <td><?php echo $data['lokasi'] ?></td>
		<td><?php echo $data['rayon'] ?></td>
		<td><?php echo $data['kirim_gambar'] ?></td>
		<td><?php echo $data['no_surat_keluar'] ?></td>
        <td><?php echo $data['tgl_surat'] ?></td>
		<td><?php echo $data['v_9m'] ?></td>
		<td><?php echo $data['v_11m'] ?></td>
		<td><?php echo $data['v_13m'] ?></td>
		<td><?php echo $data['sla'] ?></td>
		<td><?php echo $data['rencana_pasang'] ?></td>
		<td><?php echo $data['tgl_pasang'] ?></td>
		<td><?php echo $data['no_ba'] ?></td>
		<td><?php echo $data['ba_ke_vendor'] ?></td>
		<td><?php echo $data['status'] ?></td>
		<td><?php echo $data['keterangan'] ?></td>
		
		<td><?php echo $data['laporan'] ?></td>
		
						<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
	
		
		 <td style="width:150px;text-align: center;">
       <?php echo"<a class='btn btn-info btn-sm' href='?pages=editpelanggan_admin&edit=true&id=$data[no]'><i class='glyphicon glyphicon-edit icon-white'></i></a>"?>
       <?php echo"<a class='btn btn-danger btn-sm' href='?pages=viewpelanggan_admin&hapus=true&id=$data[no]' onclick='return confirm(\"Apakah Anda yakin ?\")'>  <i class='glyphicon glyphicon-trash icon-white'></i></a>"?>
        </td>
		
    </tr>
            <?php $no++; } ?>
                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
<?php
if($_GET['hapus']=="true"){
    $urutan = $_REQUEST['id'];
    $result = mysql_query("delete from beranda where beranda.`no`='$urutan'");
    if($result){
        echo '<script>history.go(-1)</script>';
    }
}
?>
