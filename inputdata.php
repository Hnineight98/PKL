<?php
	
		$conn=mysqli_connect("localhost", "root", "", "myne");
	 
    	$id=$_POST['id'];
        $nama=$_POST['nama'];
        $kode=$_POST['kode'];

        $ukuran=$_POST['ukuran'];

        $jenis=$_POST['jenis'];
        $jumlah=$_POST['jumlah'];
        $harga_beli=$_POST['harga_beli'];
        $harga_jual=$_POST['harga_jual'];
        $profit=$_POST['profit'];
        $ket=$_POST['ket'];
        
        $query=mysqli_query($conn, "INSERT INTO `tbl_barang` (`id`, `nama`, `kode`, `ukuran`, `jenis`, `jumlah`, `harga_beli`, `harga_jual`, `profit`, `ket`) VALUES ($id, '".$nama."', '".$kode."', '".$ukuran."', '".$jenis."', '".$jumlah."', '".$harga_beli."', '".$harga_jual."', '".$profit."', '".$ket."')");
        // VALUES ('2', $nama, $kode, $ukuran, $jenis, $jumlah, $harga_beli, $harga_jual, $profit, $ket)");

        // var_dump($query);
        $message="Data berhasil dimasukkan";
        echo "<script type='text/javascript'>alert('$message');</script>";

        // echo $id;
        // echo $nama;
        // echo $kode;
        // echo $ukuran;
        // echo $jenis;
        // echo $jumlah;
        // echo $harga_beli;
        // echo $harga_jual;
        // echo $profit;
        // echo $ket;

        // var_dump($query);

        header('location:tables-data.php');

?>