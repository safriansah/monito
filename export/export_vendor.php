<?php
include('../config/database.php');  // koneksi ke database ada pada file conn.php
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("content-disposition: attachment;filename=Data-vendor-tiang-Beton.xls");
?>
<?php
$tahun=  date("Y");
$result = mysql_query("SELECT * FROM beranda GROUP BY vendor, tgl_pasang DESC");
$data = mysql_fetch_array($result);
?>
<center><h3>LAPORAN DATA VENDOR </h3></center>
<center><h3>Tiang Beton PLN AREA GRESIK, KAB.GRESIK TAHUN &nbsp;<?php echo $tahun ?></h3></center>
<table border='2'>
<h3>
<thead><tr>
<td width=50 style="text-align:center;">No</td>
<td width=100 style="text-align:center;">Nama Vendor</td>
<td width=100 style="text-align:center;">Nama Pelanggan</td>
<td width=100 style="text-align:center;">Tanggal Pasang</td>
<td width=55 style="text-align:center;">Volume Tiang 9m</td>
<td width=55 style="text-align:center;">Volume Tiang 11m</td>
<td width=55 style="text-align:center;">Volume Tiang 13m</td>
<td width=100 style="text-align:center;">Keterangan</td>
</tr>
</thead>
<h3><tbody>



<?php
$d = mysql_query("select * from beranda GROUP BY vendor, tgl_pasang DESC");
$no=1;
while($kesenian=mysql_fetch_array($d)){
?>


<tr>
    <td align="center" style='height:24px;'><?php echo $no ?></td>
    <td align="center"  style='height:24px;'><?php echo $kesenian['vendor']; ?></td>
    <td align="center"  style='height:24px;'><?php echo $kesenian['nama_pelanggan']; ?></td>
	    <td align="center" style='height:24px;'><?php echo $kesenian['tgl_pasang']; ?></td>
    <td class="center" style='height:24px;'><?php echo $kesenian['v_9m']; ?></td>
    <td class="center" style='height:24px;'><?php echo $kesenian['v_11m']; ?></td>
    <td class="center"  style='height:24px;'><?php echo $kesenian['v_13m']; ?></td>
	<td align="center"  style='height:24px;'><?php echo $kesenian['keterangan']; ?></td>
        </tr>


<?php
$no++; }?>
</tbody></h3></table>
