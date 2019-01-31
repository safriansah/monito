<?php
// Load file koneksi.php
include "database.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$nis = $_GET['nis'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];


// Ambil Data yang Dikirim dari Form
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
$v_9m		            = $_POST["v_9m"];
$v_11m		            = $_POST["v_11m"];
$v_13m		            = $_POST["v_13m"];
$sla              					= $_POST["sla"];
$rencana_pasang				        	= $_POST["rencana_pasang"];
$tgl_pasang			        = $_POST["tgl_pasang"];
$no_ba							= $_POST["no_ba"];
$ba_ke_vendor							= $_POST["ba_ke_vendor"];
$status							= $_POST["status"];
$s_t							= $_POST["s_t"];
$keterangan							= $_POST["keterangan"];
$laporan                    = $_POST["laporan"];
$foto_dokumentasi        = $_FILES["foto_dokumentasi"]["name"];
$tmp                   = $_FILES["foto_dokumentasi"]["tmp_name"];



// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['tambah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto_dokumentasi']['name'];
  $tmp = $_FILES['foto_dokumentasi']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto_dokumentasi;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
   $query    = "INSERT INTO beranda VALUES('null', '$vendor', '$nama_pelanggan', '$kontrak_jasa', '$no_spb_vendor', '$lokasi', '$rayon', '$kirim_gambar', '$no_surat_keluar', '$tgl_surat', '$v_9m', '$v_11m', '$v_13m', '$sla', '$rencana_pasang','$tgl_pasang','$no_ba', '$ba_ke_vendor' , '$status' ,'$s_t' , '$keterangan' , '$laporan' , '$fotobaru')";
  //$query = "INSERT INTO beranda VALUES('".$nis."', '".$nama."', '".$jenis_kelamin."', '".$telp."', '".$alamat."', '".$fotobaru."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
     echo '<script language="javascript">alert("Data berhasil disimpan");document.location="../index.php?pages=viewpelanggan_admin";</script>';
  }else{
    // Jika Gagal, Lakukan :
   echo '<script language="javascript">alert("Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data");document.location="../index.php?pages=tambahpelanggan_admin";</script>';
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
 echo '<script language="javascript">alert("Maaf, gambar gagal diupload");document.location="../index.php?pages=tambahpelanggan_admin";</script>';
}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $foto_baru=null;
  $query    = "INSERT INTO beranda VALUES('null', '$vendor', '$nama_pelanggan', '$kontrak_jasa', '$no_spb_vendor', '$lokasi', '$rayon', '$kirim_gambar', '$no_surat_keluar', '$tgl_surat', '$v_9m', '$v_11m', '$v_13m', '$sla', '$rencana_pasang','$tgl_pasang','$no_ba', '$ba_ke_vendor' , '$status' ,'$s_t' , '$keterangan' , '$laporan' , '$fotobaru')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo '<script language="javascript">alert("Data berhasil disimpan");document.location="../index.php?pages=viewpelanggan_admin";</script>';
  }else{
    // Jika Gagal, Lakukan :
    echo '<script language="javascript">alert("Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data");document.location="../index.php?pages=tambahpelanggan_admin";</script>';
  }
}
?>