<?php 

include 'core/koneksi.php';
$query=mysqli_query($conn, "SELECT * from tbl_barang");

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
		<h4>DAFTAR ASET MYNE COLLECTION
		</h4>
	</left>
      
	<table border="1">
		<tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Ukuran</th>
            <th>Jenis Barang</th>
            <th>Stock</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Profit</th>
            <th>Keterangan</th>
		</tr>
		<tbody id="hasil"> 
            <?php if(mysqli_num_rows($query)){ ?> 
            <?php while ($baris = mysqli_fetch_array($query)){ ?>
            <tr>
            	<td><?= $no; ?></td>
            	<td><?php echo $baris['nama']; ?></td>
            	<td><?php echo $baris['kode']; ?></td>
                  <td><?php echo $baris['ukuran']; ?></td>
            	<td><?php echo $baris['jenis']; ?></td>
                  <td><?php echo $baris['jumlah']; ?></td>
            	<td><?php echo $hasil_rupiah = "Rp " . number_format($baris['harga_beli'],2,',','.'); ?></td>
                  <td><?php echo $hasil_rupiah = "Rp " . number_format($baris['harga_jual'],2,',','.'); ?></td>
            	<td><?php echo $baris['profit'] = "Rp " . number_format($baris['profit'],2,',','.'); ?></td>
            	<td><?php echo $baris['ket']; ?></td>
            </tr>
            <?php $no++; } ?>
            <?php } ?>    
        </tbody>            
    </table>
</body>
</html>