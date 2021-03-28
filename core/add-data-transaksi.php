<?php 

include '../core/koneksi.php';

$id_transaksi = $_POST["id"];
$kode_barang = $_POST["kode"];
$stock = $_POST["stock"];
$jlh_terjual = $_POST["jumlah"];
$tanggal_transaksi = $_POST["tanggal"];
$hrg_jual = $_POST["harga_jual"];
$profit = $_POST["profit"];
$tmp = $stock - $jlh_terjual;

$update = mysqli_query($conn,"UPDATE tbl_barang SET jumlah = '".$tmp."' WHERE kode = '".$kode_barang."'");

$gsincome = $hrg_jual * $jlh_terjual;
$netincome = $jlh_terjual * $profit;
$add_transaksi = mysqli_query(
	$conn,"INSERT INTO tbl_transaksi VALUES (
	'".$id_transaksi."', 
	'".$kode_barang."', 
	'".$jlh_terjual."', 
	'".$tanggal_transaksi."',
	'".$gsincome."',
	'".$netincome."'
)");

$message="Data berhasil dimasukkan";
echo "<script type='text/javascript'>alert('$message');</script>";
header('location:../home.php');
?>