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
                                    Edit Profile Vendor
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">

<?php
$no = $_REQUEST['id'];
$query = mysql_query("select * from profile_vendor where no='$no'");
$edit = mysql_fetch_array($query);
?>
			<form role="form" method="post" action="config/proses.php" enctype="multipart/form-data">
					
					
					 <div class="form-group">
                   <input type="hidden" name="no" value="<?php echo $edit['no']?>" class="form-control" placeholder="Enter text">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile"> Nama Vendor</label>
                            <input type="text" name="vendor" class="form-control" value="<?php echo $edit['vendor']?>" >
                    </div>
					
                    <div class="form-group">
                        <label for="exampleInputFile"> Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $edit['nama']?>" >
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile"> Nomer Telephone</label>
                           <textarea name="no_telp" class="form-control"><?php echo $edit['no_telp']?></textarea>
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputFile"> Email</label>
						
                        <textarea name="email" class="form-control"><?php echo $edit['email']?></textarea>
                           
                    </div>
					
					 <button type="submit" name="edit_profile_vendor"  class="btn btn-danger">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->