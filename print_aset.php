<?php 

include 'core/koneksi.php';
$query=mysqli_query($conn, "SELECT * from tbl_barang");
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
            <th>Stock</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Profit</th>
            <th>Keterangan</th>

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
                      <td><?= $baris['jumlah']; ?></td>
                      <td><?= $hasil_rupiah = "Rp " . number_format($baris['harga_beli'],2,',','.'); ?></td>
                      <td><?= $hasil_rupiah = "Rp " . number_format($baris['harga_jual'],2,',','.'); ?></td>
                      <td><?= $baris['profit'] = "Rp " . number_format($baris['profit'],2,',','.'); ?></td>
                      <td><?= $baris['ket']; ?></td>

                  </tr>
                  <?php $no++; endforeach; ?>   
              </tbody>            
        </table>

<script>window.print();</script>


