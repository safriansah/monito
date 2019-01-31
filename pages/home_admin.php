<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Beranda</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    HSI
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
		                <th>Lokasi</th>
		                <th>Rayon</th>
		                <th>Tanggal Surat WO</th>
		                <th>Keterangan</th>
		                <th>Foto Dokumentasi</th>
		                <th>Laporan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysql_query("SELECT * FROM beranda WHERE vendor='HSI' GROUP BY tgl_surat, No DESC");
                $no=1;
                while($data = mysql_fetch_array($result)){
                ?>
                    <tr>
                        <td ><?php echo $no ?></td>
	   	                <td ><?php echo $data['nama_pelanggan'] ?></td>
                        <td ><?php echo $data['lokasi'] ?></td>
		                <td ><?php echo $data['rayon'] ?></td>
                        <td ><?php echo $data['tgl_surat'] ?></td>	
		                <td ><?php echo $data['keterangan'] ?></td>
		                <?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		                <td ><?php echo $data['laporan'] ?></td>
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                JAYA
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
		                <th>Lokasi</th>
		                <th>Rayon</th>
		                <th>Tanggal Surat WO</th>
		                <th>Keterangan</th>
		                <th>Foto Dokumentasi</th>
		                <th>Laporan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysql_query("SELECT * FROM beranda WHERE vendor='JAYA' GROUP BY tgl_surat, No DESC");
                $no=1;
                while($data = mysql_fetch_array($result)){
                ?>
                    <tr>
                        <td ><?php echo $no ?></td>
	   	                <td ><?php echo $data['nama_pelanggan'] ?></td>
                        <td ><?php echo $data['lokasi'] ?></td>
		                <td ><?php echo $data['rayon'] ?></td>
                        <td ><?php echo $data['tgl_surat'] ?></td>	
		                <td ><?php echo $data['keterangan'] ?></td>
		                <?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		                <td ><?php echo $data['laporan'] ?></td>
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

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                TJAKRINDO
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
		                <th>Lokasi</th>
		                <th>Rayon</th>
		                <th>Tanggal Surat WO</th>
		                <th>Keterangan</th>
		                <th>Foto Dokumentasi</th>
		                <th>Laporan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysql_query("SELECT * FROM beranda WHERE vendor='TJAKRINDO' GROUP BY tgl_surat, No DESC");
                $no=1;
                while($data = mysql_fetch_array($result)){
                ?>
                    <tr>
                        <td ><?php echo $no ?></td>
	   	                <td ><?php echo $data['nama_pelanggan'] ?></td>
                        <td ><?php echo $data['lokasi'] ?></td>
		                <td ><?php echo $data['rayon'] ?></td>
                        <td ><?php echo $data['tgl_surat'] ?></td>	
		                <td ><?php echo $data['keterangan'] ?></td>
		                <?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		                <td ><?php echo $data['laporan'] ?></td>
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

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                TONGGAK
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
		                <th>Lokasi</th>
		                <th>Rayon</th>
		                <th>Tanggal Surat WO</th>
		                <th>Keterangan</th>
		                <th>Foto Dokumentasi</th>
		                <th>Laporan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysql_query("SELECT * FROM beranda WHERE vendor='TONGGAK' GROUP BY tgl_surat, No DESC");
                $no=1;
                while($data = mysql_fetch_array($result)){
                ?>
                    <tr>
                        <td ><?php echo $no ?></td>
	   	                <td ><?php echo $data['nama_pelanggan'] ?></td>
                        <td ><?php echo $data['lokasi'] ?></td>
		                <td ><?php echo $data['rayon'] ?></td>
                        <td ><?php echo $data['tgl_surat'] ?></td>	
		                <td ><?php echo $data['keterangan'] ?></td>
		                <?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		                <td ><?php echo $data['laporan'] ?></td>
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

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                WIKA
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
		                <th>Lokasi</th>
		                <th>Rayon</th>
		                <th>Tanggal Surat WO</th>
		                <th>Keterangan</th>
		                <th>Foto Dokumentasi</th>
		                <th>Laporan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysql_query("SELECT * FROM beranda WHERE vendor='WIKA' GROUP BY tgl_surat, No DESC");
                $no=1;
                while($data = mysql_fetch_array($result)){
                ?>
                    <tr>
                        <td ><?php echo $no ?></td>
	   	                <td ><?php echo $data['nama_pelanggan'] ?></td>
                        <td ><?php echo $data['lokasi'] ?></td>
		                <td ><?php echo $data['rayon'] ?></td>
                        <td ><?php echo $data['tgl_surat'] ?></td>	
		                <td ><?php echo $data['keterangan'] ?></td>
		                <?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		                <td ><?php echo $data['laporan'] ?></td>
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

