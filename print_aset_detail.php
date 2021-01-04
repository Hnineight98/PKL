<?php 

$conn=mysqli_connect("localhost", "root", "", "aset1");

$id = $_POST['id'];
$query=mysqli_query($conn, "SELECT * FROM tbl_aset WHERE id='$id'");
$total = mysqli_num_rows($query);

?>

	<center>
		<h3>DAFTAR ASET DINAS LINGKUNGAN HIDUP KOTA MATARAM</h3>
	</center>
				<table style="width: 100%">
        <?php $no=1; foreach ($query as $data) : ?>
            <tr>
                <th style="text-align: left;">Kode Barang</th>
                <td><?=$data['kode']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Ruangan</th>
                <td><?=$data['ruangan']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Nama Barang</th>
                <td><?=$data['nama']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Merek</th>
                <td><?=$data['merek']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Ukuran</th>
                <td><?=$data['ukuran']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Bahan</th>
                <td><?=$data['bahan']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Tahun Pembuatan</th>
                <td><?=$data['thn_pembuatan']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Jumlah</th>
                <td><?=$data['jumlah']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Harga</th>
                <td><?php echo $hasil_rupiah = "Rp " . number_format($data['harga'],2,',','.'); ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Baik</th>
                <td><?=$data['baik']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Kurang baik</th>
                <td><?=$data['kurang_baik']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Rusak berat</th>
                <td><?=$data['rusak_berat']; ?></td>
            </tr>
            <tr>
                <th style="text-align: left;">Keterangan</th>
                <td><?=$data['ket']; ?></td>
            </tr>
            
        <?php $no++; endforeach; ?>   
                     
        </table>

<script>window.print();</script>


