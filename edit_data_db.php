<?php
	
		$conn=mysqli_connect("localhost", "root", "", "aset1");
	 
    	$id=$_POST['id'];
        $kode=$_POST['kode'];
        $no_ruangan=$_POST['ruangan'];

        if ($no_ruangan==1) {
            $ruangan="SEKRETARIS";
        }
        else if ($no_ruangan==2) {
            $ruangan="KEPALA DINAS";
        }
        else if ($no_ruangan==3) {
            $ruangan="SUB. BAGIAN UMUM DAN KEPEGAWAIAN";
        }
        else if ($no_ruangan==4) {
            $ruangan="SUB. BAGIAN UMUM DAN KEPEGAWAIAN/KORIDOR";
        }
        else if ($no_ruangan==5) {
            $ruangan="SUB. BAGIAN PERENCANAAN";
        }
        else if ($no_ruangan==6) {
            $ruangan="BIDANG PENATAAN DAN PENINGKATAN KAPASITAS SDM";
        }

        else if ($no_ruangan==7) {
            $ruangan="BIDANG PENGELOLAAN SAMPAH LIMBAH B3";
        }
        else if ($no_ruangan==8) {
            $ruangan="PENGURUS DAN PENYIMPAN BARANG";
        }
        else if ($no_ruangan==9) {
            $ruangan="SUB. BAGIAN KEUANGAN";
        }
        else if ($no_ruangan==10) {
            $ruangan="RUANGAN RAPAT";
        }
        else if ($no_ruangan==11) {
            $ruangan="WORK SHOP";
        }
        else if ($no_ruangan==12) {
            $ruangan="TATA LINGKUNGAN ( AMDAL )";
        }
        else if ($no_ruangan==13) {
            $ruangan="BIDANG PENGAWASAN PENGENDALIAN PENCEMARAN LH";
        }
        else if ($no_ruangan==14) {
            $ruangan="UPTD LABORATURIUM";
        }
        else if ($no_ruangan==15) {
            $ruangan="AULA";
        }
        else if ($no_ruangan==16) {
            $ruangan="PUSAT PELAYANAN DLH";
        }
        else if ($no_ruangan==17) {
            $ruangan="UPTD BANK SAMPAH";
        }
        else if ($no_ruangan==18) {
            $ruangan="ARSIPARIS";
        }


        $nama=$_POST['nama'];
        $merek=$_POST['merek'];
        $jumlah=$_POST['jumlah'];
        $ukuran=$_POST['ukuran'];
        $bahan=$_POST['bahan'];
        $thn_pembuatan=$_POST['thn_pembuatan'];
        $jumlah=$_POST['jumlah'];
        $harga=$_POST['harga'];
        $baik=$_POST['baik'];
        $kurang_baik=$_POST['kurang_baik'];
        $rusak_berat=$_POST['rusak_berat'];
        $ket=$_POST['ket'];
        
        $query=mysqli_query($conn, "UPDATE tbl_aset SET ruangan='$ruangan', nama='$nama', merek='$merek', ukuran='$ukuran', bahan='$bahan', thn_pembuatan='$thn_pembuatan', kode='$kode', jumlah='$jumlah', harga='$harga', baik='$baik', kurang_baik='$kurang_baik', rusak_berat='$rusak_berat', ket='$ket' WHERE id='$id'");

        echo $id;
        echo $kode;
        echo $ruangan;
        echo $nama;
        echo $merek;
        echo $jumlah;
        echo $ukuran;
        echo $bahan;
        echo $thn_pembuatan;
        echo $jumlah;
        echo $harga;
        echo $baik;
        echo $kurang_baik;
        echo $rusak_berat;
        echo $ket;

        var_dump($query);

        header('location:tables-data.php');

?>