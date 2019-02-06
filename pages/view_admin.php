<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">User Monitoring</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-lg-6">Tabel User Monitoring</div>
                                        <div class="col-lg-6">
                                            <a href="?pages=tambah_admin">
                                                <button style="margin: 0px 0px;float:right" type="button" class="btn btn-success">Tambah</button>
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
        <th>Nama</th>
        <th>Username</th>
		<th>Password</th>
        <th>No Telp</th>
		<th>Email</th>
		<th>Alamat</th>
        <th>Jabatan</th>
		<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOPSI&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            $result = mysql_query("SELECT * FROM admin ORDER by id ASC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td><?php echo $no ?></td>
       <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['username'] ?></td>
		<td><?php echo $data['password'] ?></td>
        <td><?php echo $data['no_telp'] ?></td>
		<td><?php echo $data['email'] ?></td>
		<td><?php echo $data['alamat'] ?></td>
        <td><?php echo $data['jabatan'] ?></td>
				 <td style="width:150px;text-align: center;">
       <?php echo"<a href='?pages=view_admin&hapus=true&id=$data[id]' onclick='return confirm(\"Apakah Anda yakin ?\")'>  <i class='fa fa-trash-o'></i></a>"?>
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
    $result = mysql_query("delete from admin where admin.`id`='$urutan'");
    if($result){
        echo '<script>history.go(-1)</script>';
    }
}
?>