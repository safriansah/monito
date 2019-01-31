<?php
error_reporting(0);
include "database.php";


//Inisialisasi Pengguna

$id    = $_POST["id"];
$nama    = $_POST["nama"];
$username       = $_POST["username"];
$password       = md5($_POST["password"]);
$no_telp        = $_POST["no_telp"];
$email         = $_POST["email"];
$alamat         = $_POST["alamat"];
$jabatan         = $_POST["jabatan"];

//Inisialisasi ganti password
$passwordlama  = md5($_POST['passwordlama']);
$passwordbaru1 = md5($_POST['passwordbaru1']);
$passwordbaru2 = md5($_POST['passwordbaru2']);


//Inisialisasi vendor



//Inisialisasi pelanggan
$no                 			= $_POST["no"];
$vendor            			= $_POST["vendor"];
$nama_pelanggan          					= $_POST["nama_pelanggan"];
$kontrak_jasa             		= $_POST["kontrak_jasa"];
$no_spb_vendor       						= $_POST["no_spb_vendor"];
$lokasi       			= $_POST["lokasi"];
$rayon       				= $_POST["rayon"];
$kirim_gambar      					= $_POST["kirim_gambar"];
$no_surat_keluar       						= $_POST["no_surat_keluar"];
$tgl_surat			            = $_POST["tgl_surat"];
$v_tiang		            = $_POST["v_tiang"];
$sla              					= $_POST["sla"];
$rencana_pasang				        	= $_POST["rencana_pasang"];
$tgl_pasang			        = $_POST["tgl_pasang"];
$no_ba							= $_POST["no_ba"];
$ba_ke_vendor							= $_POST["ba_ke_vendor"];
$status							= $_POST["status"];
$terlambat							= $_POST["terlambat"];
$keterangan							= $_POST["keterangan"];
$laporan       = $_POST["laporan"];
$foto_dokumentasi        = $_POST["foto_dokumentasi"];

//Proses Login
if(isset($_POST['login'])){
    $user = mysql_real_escape_string(htmlentities($_POST['username']));
    $passwords = mysql_real_escape_string(htmlentities($_POST['password']));
    $pass = md5($passwords);

    $sql = mysql_query("SELECT * FROM admin WHERE username='$user' AND password='$pass'") or die(mysql_error());
    $row = mysql_fetch_array($sql);
            if($row['jabatan'] == 'ADMIN'){
                $_SESSION['admin']=$user;
            echo '<script language="javascript">document.location="../index.php?pages=home_admin";</script>';
            }
			if($row['jabatan'] == 'VENDOR'){
                $_SESSION['admin']=$user;
            echo '<script language="javascript">document.location="../index.php?pages=home_vendor";</script>';
            }
			if($row['jabatan'] == 'RAYON'){
                $_SESSION['admin']=$user;
            echo '<script language="javascript">document.location="../index.php?pages=home_rayon";</script>';
            }
			if($row['jabatan'] == 'PENGAWAS'){
                $_SESSION['admin']=$user;
            echo '<script language="javascript">document.location="../index.php?pages=home_pengawas";</script>';
            }
			if($row['jabatan'] == 'AREA'){
                $_SESSION['admin']=$user;
            echo '<script language="javascript">document.location="../index.php?pages=home_area";</script>';
            }
			else {
            echo '<script language="javascript">alert("Maaf user dan password anda salah!");history.go(-1)</script>';
}
}


// Ganti Passsword
if(isset($_POST['change_pw'])) {
    $user = mysql_real_escape_string(htmlentities($_POST['username']));
    $query = mysql_query("SELECT * FROM admin WHERE username ='$user'");
    $data = mysql_fetch_array($query);
    if ($data['password'] == $passwordlama) {    // jika password lama benar, maka cek kesesuaian password baru 1 dan 2
        if ($passwordbaru1 == $passwordbaru2) {  // jika password baru 1 dan 2 sama, maka proses update password dilakukan
            // enkripsi password baru sebelum disimpan ke db
            $query = "UPDATE admin SET password ='$passwordbaru1' WHERE username='$username'";
            $hasil = mysql_query($query);
            if ($hasil) {
                echo '<script language="javascript">alert("Sukses, Silahkan Login Kembali");document.location="../login.php";</script>';
            }
        } else {
            echo '<script>alert("Password baru tidak sama");history.go(-1)</script>';
        }
    } else {
        echo '<script>alert("Username/Password lama Anda salah");history.go(-1)</script>';
    }
}

//------------------------------------------------------INPUT--------------------------------------------------//

//Simpan
if (isset($_POST['simpan_data'])){
    
    $simpan_data    = mysql_query("insert into beranda values('null', '$vendor', '$nama_pelanggan', '$kontrak_jasa', '$no_spb_vendor', '$lokasi', '$rayon', '$kirim_gambar', '$no_surat_keluar', '$tgl_surat', '$v_tiang', '$sla', '$rencana_pasang','$tgl_pasang','$no_ba', '$ba_ke_vendor' , '$status' , '$terlambat' , '$keterangan' , '$laporan' , '$foto_dokumentasi')");
                         // mysql_query("insert into pro_petani values('null','$no','$hasil_panen','$luas_tanah', '$peng_setiap_panen')");
    if($simpan_data){
            echo '<script language="javascript">alert("Sukses");document.location="../index.php?pages=home_admin";</script>';
    }else{
        echo '<script>alert("Gagal menambahkan data!");history.go(-1)</script>';
    }
}


//Simpan Admin
if (isset($_POST['simpan_admin'])){
    
    $simpan_admin    = mysql_query("insert into admin values('null', '$nama', '$username', '$password', '$no_telp', '$email', '$alamat', '$jabatan')");
                         // mysql_query("insert into pro_petani values('null','$no','$hasil_panen','$luas_tanah', '$peng_setiap_panen')");
    if($simpan_admin){
            echo '<script language="javascript">alert("Sukses");document.location="../index.php?pages=view_admin";</script>';
    }else{
        echo '<script>alert("Gagal menambahkan data!");history.go(-1)</script>';
    }
}

//Simpan Profile Vendor
if (isset($_POST['simpan_profile_vendor'])){
    
    $simpan_profile_vendor    = mysql_query("insert into profile_vendor values('null', '$vendor', '$nama', '$no_telp', '$email')");
                         // mysql_query("insert into pro_petani values('null','$no','$hasil_panen','$luas_tanah', '$peng_setiap_panen')");
    if($simpan_profile_vendor){
            echo '<script language="javascript">alert("Sukses");document.location="../index.php?pages=profile_vendor";</script>';
    }else{
        echo '<script>alert("Gagal menambahkan data!");history.go(-1)</script>';
    }
}

		


//



		




//------------------------------------------------------EDIT--------------------------------------------------//

//Edit Profil Admin
if(isset($_POST['editprofil'])){
    $editprofil = mysql_query("update admin set nama='$nama', username='$username', no_telp='$no_telp', email='$email', alamat='$alamat', email='$email' where id='$id'");
    if($editprofil){
            echo '<script language="javascript">alert("Data berhasil di ubah");document.location="../index.php?pages=profil";</script>';
    }else{
        echo '<script>alert("Gagal Update Data");history.go(-2)</script>';
    }
}

if(isset($_POST['reset'])){
	$passwordreset  = md5($no_telp);
	$query = "select count('username')as user from admin WHERE username='$username' AND no_telp='$no_telp'";
    $row = mysql_fetch_array(mysql_query($query));
	if($row['user'] > 0){
		$query = "UPDATE admin SET password ='$passwordreset' WHERE username='$username' AND no_telp='$no_telp'";
		$hasil = mysql_query($query);
	
		if ($hasil) {
			echo '<script language="javascript">alert("Sukses, Password telah tereset menjadi Nomer Telephone");document.location="../index.php?pages=login";</script>';
		}else{
			echo '<script language="javascript">alert("Error");document.location="../index.php?pages=login";</script>';
		}
	}
	else echo '<script language="javascript">alert("Username atau Nomer Telephone tidak sesuai");document.location="../index.php?pages=login";</script>';
	
}

//Edit Profil Penduduk
if(isset($_POST['edit_pelanggan'])){
    
    $editprofil = mysql_query("update beranda set vendor='$vendor', nama_pelanggan='$nama_pelanggan', kontrak_jasa='$kontrak_jasa', no_spb_vendor='$no_spb_vendor', lokasi='$lokasi', rayon='$rayon', kirim_gambar='$kirim_gambar', no_surat_keluar='$no_surat_keluar', tgl_surat='$tgl_surat', v_tiang='$v_tiang', sla='$sla', rencana_pasang='$rencana_pasang', tgl_pasang='$tgl_pasang', no_ba='$no_ba', ba_ke_vendor='$ba_ke_vendor', status='$status', terlambat='$terlambat', keterangan='$keterangan', laporan='$laporan', foto_dokumentasi='$foto_dokumentasi' where no=$no");
    if($editprofil){
        echo '<script>alert("Sukses update data");history.go(-2);</script>';
    }else{
        echo '<script>alert("Gagal Update Data");history.go(-2)</script>';
    }
}
if(isset($_POST['pelanggan'])){
    
    $editprofile = mysql_query("update beranda set vendor= '$vendor', nama_pelanggan= '$nama_pelanggan', kontrak_jasa= '$kontrak_jasa', no_spb_vendor '$no_spb_vendor', lokasi= '$lokasi', rayon='$rayon', kirim_gambar= '$kirim_gambar', no_surat_keluar= '$no_surat_keluar', tgl_surat='$tgl_surat', v_tiang='$v_tiang', sla='$sla', rencana_pasang ='$rencana_pasang',tgl_pasang='$tgl_pasang',no_ba='$no_ba',ba_ke_vendor= '$ba_ke_vendor' , status='$status' ,terlambat= '$terlambat' ,keterangan= '$keterangan' where no=$no");
    if($editprofile){
        echo '<script>alert("Sukses update data");history.go(-2);</script>';
    }else{
        echo '<script>alert("Gagal Update Data");history.go(-2)</script>';
    }
}

if(isset($_POST['edit_profile_vendor'])){
    
    $edit_profile_vendor = mysql_query("update profile_vendor set vendor= '$vendor', nama= '$nama', no_telp= '$no_telp', email= '$email' where no=$no");
    if($edit_profile_vendor){
        echo '<script>alert("Sukses update data");history.go(-2);</script>';
    }else{
        echo '<script>alert("Gagal Update Data");history.go(-2)</script>';
    }
}
// Hidden
/*//Inisialisasi Pro Petani
$id_pro             = $_POST["id_pro"];
$hasil_panen        = $_POST["hasil_panen"];
$luas_tanah         = $_POST["luas_tanah"];
$peng_setiap_panen  = $_POST["peng_setiap_panen"];
*/
/*//Simpan Penduduk
if (isset($_POST['simpan_admin'])){
    $simpan_admin = mysql_query(("insert into admin values('null','$nm_pengguna','$username','$passworda','$no_telp','$status')"));
    if($simpan_admin){
            echo '<script language="javascript">alert("Sukses");document.location="../index.php?pages=view_admin";</script>';
    }else{
        echo '<script>alert("Gagal menambahkan admin!");history.go(-1)</script>';
    }
}*/



?>