<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Notifikasi</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                Tabel Notifikasi
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Vendor</th>
        <th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Kontrak Jasa</th>
        <th style="text-align:center;">Nomer SPB Vendor</th>
		<th style="text-align:center;">Lokasi</th>
		<th style="text-align:center;">Rayon</th>
		<th style="text-align:center;">Tanggal Kirim Gambar</th>
		<th style="text-align:center;">Nomer Surat Keluar</th>
		<th style="text-align:center;">Tanggal Surat WO</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">SLA</th>
		<th style="text-align:center;">Tanggal Rencana Pasang</th>
		<th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Nomer BA</th>
		<th style="text-align:center;">Tanggal BA Ke Vendor</th>
		<th style="text-align:center;">Status</th>
		<th style="text-align:center;">Keterangan</th>
		
		<th style="text-align:center;">Laporan</th>
		<th style="text-align:center;">Foto Dokumen</th>
		<th style="text-align:center;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOPSI&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE STATUS<>'Selesai' AND rencana_pasang<NOW() GROUP BY vendor, No DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['vendor'] ?></td>
	   	<td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
		<td style="text-align: center"><?php echo $data['kontrak_jasa'] ?></td>
        <td style="text-align: center"><?php echo $data['no_spb_vendor'] ?></td>
        <td style="text-align: center"><?php echo $data['lokasi'] ?></td>
		<td style="text-align: center"><?php echo $data['rayon'] ?></td>
		<td style="text-align: center"><?php echo $data['kirim_gambar'] ?></td>
		<td style="text-align: center"><?php echo $data['no_surat_keluar'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_surat'] ?></td>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['sla'] ?></td>
		<td style="text-align: center"><?php echo $data['rencana_pasang'] ?></td>
		<td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<td style="text-align: center"><?php echo $data['no_ba'] ?></td>
		<td style="text-align: center"><?php echo $data['ba_ke_vendor'] ?></td>
		<td style="text-align: center"><?php echo $data['status'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
		<td style="text-align: center"><?php echo $data['laporan'] ?></td>
		
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