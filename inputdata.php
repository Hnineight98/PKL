<?php
	
		$conn=mysqli_connect("localhost", "root", "", "aset1");
	 
    	$id=$_POST['id'];
        $nama=$_POST['nama'];
        $kode=$_POST['kode'];

        $ukuran=$_POST['ukuran'];

        if ($ukuran==1) {
            $ukuran="KECIL";
        }
        else if ($ukuran==2) {
            $UKURAN="SEDANG";
        }
        else if ($ukuran==3) {
            $ukuran="BESAR";
        }
        $jenis=$_POST['jenis'];
        $jumlah=$_POST['jumlah'];
        $tanggal=$_POST['tanggal'];
        $harga_beli=$_POST['harga_beli'];
        $harga_jual=$_POST['harga_jual'];
        $profit=$_POST['profit'];
        $ket=$_POST['ket'];
        
        $query=mysqli_query($conn, "INSERT INTO tbl_barang VALUES ('','$nama','$kode','$ukuran','$jenis','$jumlah','$tanggal','$harga_beli','$harga_jual','$profit','$ket')");

        $message="Data berhasil dimasukkan";
        echo "<script type='text/javascript'>alert('$message');</script>";

        echo $id;
        echo $nama;
        echo $kode;
        echo $ukuran;
        echo $jenis;
        echo $jumlah;
        echo $tanggal;
        echo $harga_beli;
        echo $harga_jual;
        echo $profit;
        echo $ket;

        var_dump($query);

        header('location:tables-data.php');

?>