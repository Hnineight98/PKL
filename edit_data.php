<?php  
    $conn=mysqli_connect("localhost", "root", "", "myne");
    session_start();
    $pengguna=$_SESSION['pengguna'];
    if($pengguna=="" || $pengguna==" "){
        header("location:index.php");
    }
    $id = $_GET['id'];

    
    // $baris=mysqli_fetch_row($query);
    // list($id, $ruangan, $nama, $merek, $ukuran, $bahan, $thn_pembuatan, $kode, $jumlah, $harga, $baik, $kurang_baik, $rusak_berat, $ket)=$baris;

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<link rel="shortcut icon" href="images/logomyne.jpeg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MYNE COLLECTION</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="home.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Components</li><!-- /.menu-title -->
                    
                     <li class="active">
                        <a href="tables-data.php"><i class="menu-icon fa fa-cogs"></i>Daftar Aset </a>
                    </li>
                     <li >
                        <a href="forms-basic.php"><i class="menu-icon fa fa-th"></i>Tambah Barang </a>
                    </li>
                    <li>
                        <a href="forms-transaksi.php"><i class="menu-icon fa fa-th"></i>Transaksi </a>
                    </li>
                    <li>
                        <a href="keluar.php"><i class="menu-icon fa fa-close"></i>Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
         <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php"><img height="40" src="images/logomyne.jpeg" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded" src="images/logomyne.jpeg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="keluar.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    
        <div class="content">
            <div class="animated fadeIn">


                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Aset</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="edit_data_db.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <?php $query = mysqli_query($conn, "SELECT * FROM tbl_barang WHERE id='$id'"); while($data = mysqli_fetch_array($query)){ ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Id Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="int" id="text-input" name="id" value="<?= $data['id']; ?>" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Nama Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nama" value="<?= $data['nama']; ?>" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Kode Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="kode" value="<?= $data['kode']; ?>" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Ukuran</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="ukuran" value="<?= $data['ukuran']; ?>" id="selectSm" class="form-control-sm form-control" required>
                                                <option disabled selected="" >Ukuran</option>
                                                <option value="KECIL">KECIL</option>
                                                <option value="SEDANG">SEDANG</option>
                                                <option value="BESAR">BESAR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Jenis</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="jenis" value="<?= $data['jenis']; ?>" placeholder="Jenis" class="form-control">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Jumlah</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="int" id="text-input" name="jumlah" value="<?= $data['jumlah']; ?>" placeholder="Jumlah" class="form-control">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Harga beli per unit</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="input-harga-beli" name="harga_beli" value="<?= $data['harga_beli']; ?>" placeholder="Harga per unit" class="form-control" required>
                                            <small class="ket-hrg-beli form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Harga jual per unit</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="input-harga-jual" name="harga_jual" value="<?= $data['harga_jual']; ?>" placeholder="Harga per unit" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Profit</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="input-profit" name="profit"  value="<?= $data['profit']; ?>" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Ket</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="ket" value="<?= $data['ket']; ?>" placeholder="keterangan" class="form-control">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" name="id" value="<?php echo $id; ?>"></input>
                                    <button type="submit" class="btn btn-success">Ubah data</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#pesan">Batal</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="assets/js/jquery-3-5-1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


 <!-- Popup hapus -->
    <div id="pesan" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
        <!-- konten modal-->
            <div class="modal-content">
            <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Batalkan</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <h6 class="text-center">Yakin ingin membatalkan mengubah data?</h6>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <form action="hapusdata.php" method="POST">
                        <a href="tables-data.php"><button type="button" class="btn btn-danger">Yakin</button></a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </form>
                                                        
                </div>
            </div>
        </div>
    </div>
    <!-- Popup hapus -->

<script type="text/javascript">
    var hrgBeli= $('#input-harga-beli');
    var hrgJual = $('#input-harga-jual');

    hrgJual.keyup(function(){
        $('.ket-hrg-beli > *').remove();
        if(hrgBeli.val().length === 0){
            $('.ket-hrg-beli').append("<p class='text-danger'>Harga beli per unit tidak boleh kosong</p>");
            hrgBeli.focus();
        }else{
            var calc = hrgJual.val()-hrgBeli.val();
            if(!(calc < 0)){
                $('#input-profit').val(calc);
            }else{
                $('#input-profit').val('0');
            }
            
        }
    });
</script>
</body>
</html>
