<?php 

$conn=mysqli_connect("localhost", "root", "", "aset1");
$query=mysqli_query($conn, "SELECT * FROM tbl_aset");
$total = mysqli_num_rows($query);

?>

	<center>
		<h3>DAFTAR ASET DINAS LINGKUNGAN HIDUP KOTA MATARAM</h3>
	</center>
				<table border="1" style="width: 100%">
  					<thead>
                <tr>
                    <th>No</th>
                    <th>Ruangan</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Merek</th>
                    <th>Ukuran</th>
                    <th>Bahan</th>
                    <th>Tahun Pembuatan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Baik</th>
                    <th>Kurang baik</th>
                    <th>Rusak Berat</th>
                    <th>Keterangan</th>
                </tr>
              </thead>
                    
              <tbody id="hasil"> 
                  <?php $no=1; foreach ($query as $data) : ?>
                  <tr>
                      <td><?=$no; ?></td>
                      <td><?=$data['ruangan']; ?></td>
                      <td><?=$data['kode']; ?></td>
                      <td><?=$data['nama']; ?></td>
                      <td><?=$data['merek']; ?></td>
                      <td><?=$data['ukuran']; ?></td>
                      <td><?=$data['bahan']; ?></td>
                      <td><?=$data['thn_pembuatan']; ?></td>
                      <td><?=$data['jumlah']; ?></td>
                      <td><?php echo $hasil_rupiah = "Rp " . number_format($data['harga'],2,',','.'); ?></td>
                      <td><?=$data['baik']; ?></td>
                      <td><?=$data['kurang_baik']; ?></td>
                      <td><?=$data['rusak_berat']; ?></td>
                      <td><?=$data['ket']; ?></td>

                  </tr>
                  <?php $no++; endforeach; ?>   
              </tbody>            
        </table>

<script>window.print();</script>


