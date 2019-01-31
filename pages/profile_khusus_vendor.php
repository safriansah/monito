<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Profile Vendor</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                Tabel Profile Vendor
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
    <tr>
        <th style="text-align:center;">No</th>
        <th style="text-align:center;">Nama Vendor</th>
        <th style="text-align:center;">Nama Koordinator Vendor</th>
        <th style="text-align:center;">No Telephone</th>
		<th style="text-align:center;">Email</th>

    </tr>
    </thead>
    <tbody>
     <?php
            $result = mysql_query("SELECT * FROM profile_vendor GROUP BY vendor, no ASC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
       <td style="text-align: center"><?php echo $data['vendor'] ?></td>
        <td style="text-align: center"><?php echo $data['nama'] ?></td>
        <td style="text-align: center"><?php echo $data['no_telp'] ?></td>
		<td style="text-align: center"><?php echo $data['email'] ?></td>
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
    $result = mysql_query("delete from profile_vendor where profile_vendor.`id`='$urutan'");
    if($result){
        echo '<script>history.go(-1)</script>';
    }
}
?>