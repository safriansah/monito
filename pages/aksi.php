	<?php 
		include 'database.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					if($query){
						echo '<script language="javascript">alert("FILE BERHASIL DI UPLOAD");document.location="../index.php?pages=view_vendor";</script>';
					}else{
						echo '<script>alert("GAGAL MENGUPLOAD GAMBAR");history.go(-1)</script>';
					}
				}else{
					echo '<script>alert("UKURAN FILE TERLALU BESAR");history.go(-1)</script>';
				}
			}else{
				echo '<script>alert("EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN");history.go(-1)</script>';
			}
		}
		?>