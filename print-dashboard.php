<?php 

include 'core/koneksi.php';

$tanggal = $_GET['tanggal'] . '-%';

$query=mysqli_query($conn, "SELECT * FROM `tbl_barang` JOIN tbl_transaksi ON tbl_barang.kode = tbl_transaksi.kode_barang WHERE tbl_transaksi.tanggal_terjual LIKE '".$tanggal."'");
$total = mysqli_num_rows($query);

?>

	<center>
		<h3>DAFTAR ASET MYNE COLLECTION</h3>
	</center>
				<table border="1" style="width: 100%;border-collapse: collapse;">
  					<thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
            <th>Ukuran</th>
            <th>Jenis Barang</th>
            <th>Jumlah Terjual</th>
            <th>Harga Jual</th>
            <th>Profit</th>
            <th>Tanggal Transaksi</th>
                </tr>
              </thead>
                    
              <tbody id="hasil"> 
                  <?php $no=1; foreach ($query as $baris) : ?>
                  <tr>
                      <td><?= $no; ?></td>
                      <td><?= $baris['nama']; ?></td>
                      <td><?= $baris['kode']; ?></td>
                      <td><?= $baris['ukuran']; ?></td>
                      <td><?= $baris['jenis']; ?></td>
                      <td><?= $baris['jumlah_terjual']; ?></td>
                      <td><?= $hasil_rupiah = "Rp " . number_format($baris['harga_jual'],2,',','.'); ?></td>
                      <td><?= $baris['profit']; ?></td>
                      <td><?= $baris['tanggal_terjual']; ?></td>
                  </tr>
                  <?php $no++; endforeach; ?>   
              </tbody>            
        </table>
<script>window.print();</script>


