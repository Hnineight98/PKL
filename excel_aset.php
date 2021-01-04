<?php 

$conn=mysqli_connect("localhost", "root", "", "aset1");
$query=mysqli_query($conn, "SELECT * from tbl_aset");

$no=1;

?>

<!DOCTYPE html>
<html>

<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Aset.xls");
	?>
 
	<left>
		<h4>DAFTAR ASET DINAS LINGKUNGAN HIDUP KOTA MATARAM
			<br>NOMOR :</br>
			<br>TANGGAL : </br>
		</h4>
	</left>
      
	<table border="1">
		<tr>
            <th>No</th>
            <th>Ruangan</th>
            <th>Nama</th>
            <th>Merek</th>
            <th>Ukuran</th>
            <th>Bahan</th>
            <th>Tahun Pembuatan</th>
            <th>Kode</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Baik</th>
            <th>Kurang baik</th>
            <th>Rusak Berat</th>
            <th>Keterangan</th>

		</tr>
		<tbody id="hasil"> 
            <?php if(mysqli_num_rows($query)){ ?> 
            <?php while ($baris = mysqli_fetch_array($query)){ ?>
            <tr>
            	<td><?= $no; ?></td>
            	<td><?php echo $baris['ruangan']; ?></td>
            	<td><?php echo $baris['nama']; ?></td>
            	<td><?php echo $baris['merek']; ?></td>
            	<td><?php echo $baris['ukuran']; ?></td>
            	<td><?php echo $baris['bahan']; ?></td>
            	<td><?php echo $baris['thn_pembuatan']; ?></td>
                  <td><?php echo $baris['kode']; ?></td>
            	<td><?php echo $baris['jumlah']; ?></td>
            	<td><?php echo $hasil_rupiah = "Rp " . number_format($baris['harga'],2,',','.'); ?></td>
            	<td><?php echo $baris['baik']; ?></td>
            	<td><?php echo $baris['kurang_baik']; ?></td>
            	<td><?php echo $baris['rusak_berat']; ?></td>
            	<td><?php echo $baris['ket']; ?></td>
            </tr>
            <?php $no++; } ?>
            <?php } ?>    
        </tbody>            
    </table>
</body>
</html>