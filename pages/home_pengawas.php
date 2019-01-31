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
        <th style="text-align:center;">No</th>

		<th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Sesuai/Tidak Sesuai</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='HSI' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['s_t'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
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
        <th style="text-align:center;">No</th>
		<th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Sesuai/Tidak Sesuai</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='JAYA' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['s_t'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
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
        <th style="text-align:center;">No</th>
		
		<th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Sesuai/Tidak Sesuai</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='TJAKRINDO' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['s_t'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
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
        <th style="text-align:center;">No</th>

		<th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Sesuai/Tidak Sesuai</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='TONGGAK' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['s_t'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
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
        <th style="text-align:center;">No</th>
	
		<th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Sesuai/Tidak Sesuai</th>
		<th style="text-align:center;">Keterangan</th>


    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='WIKA' GROUP BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['s_t'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		
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
