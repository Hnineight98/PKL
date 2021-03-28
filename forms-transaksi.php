<?php  
    session_start();
    $pengguna=$_SESSION['pengguna'];
    if($pengguna=="" || $pengguna==" "){
        header("location:index.php");
    }

    include 'core/koneksi.php';
    
    $no=mysqli_query($conn, "SELECT id_transaksi FROM tbl_transaksi ORDER BY id_transaksi DESC");
    $id=mysqli_fetch_array($no);
    $kode=$id['id_transaksi'];
    $urut=$kode+1;
    // $urut=substr($kode, 3, 4);
    // $tambah=(int)$urut+1;

    // if(strlen($tambah)==1){
    //     $format="AST"."000".$tambah;
    // }
    // else if(strlen($tambah)==2){
    //     $format="AST"."00".$tambah;
    // }
    // else if(strlen($tambah)==3){
    //     $format="AST"."0".$tambah;
    // }
    // else if(strlen($tambah)==4){
    //     $format="AST".$tambah;
    // }
    
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
                    
                     <li>
                        <a href="tables-data.php"><i class="menu-icon fa fa-cogs"></i>Daftar Aset </a>
                    </li>
                     <li>
                        <a href="forms-basic.php"><i class="menu-icon fa fa-th"></i>Tambah Barang </a>
                    </li>
                    <li class="active">
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
                                <strong>Tambah Barang</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="core/add-data-transaksi.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group" hidden>
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Id Transaksi</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="int" id="text-input" name="id" value="<?= $urut; ?>" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Kode Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="input-kode-barang" name="kode" placeholder="Kode Barang" class="form-control">
                                            <small class="kode-ket form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Nama Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="input-nama-barang" name="nama" placeholder="Nama Barang" class="form-control" readonly required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Stock</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="input-stock-barang" name="stock" placeholder="0" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Jumlah Terjual</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="input-jumlah-barang" name="jumlah" placeholder="0" min="0" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Tanggal Pembelian</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="input-tgl" name="tanggal" placeholder="Tanggal Pembelian" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Harga jual per unit</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="input-jual-barang" name="harga_jual" placeholder="Harga per unit" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group" hidden>
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Profit</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="input-profit-barang" name="profit" placeholder="Profit per unit" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" class="btn btn-success">Tambah</button>
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

<script type="text/javascript">
 
    $('#input-jumlah-barang').keyup(function(){
        $(this).val('');
    });
    $('#input-kode-barang').keyup(function(){
        $('.kode-ket > *').remove();
        var input = $(this).val().toUpperCase();
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

        var urlencoded = new URLSearchParams();
        urlencoded.append("kode_barang", input);

        var requestOptions = {
          method: 'POST',
          headers: myHeaders,
          body: urlencoded,
          redirect: 'follow'
        };

        fetch("http://localhost:8080/master4/core/getbarang.php", requestOptions)
          .then(response => response.json())
          .then(result => {
            if(result.status === true){
                $('#input-tgl').attr('readonly',false);
                $('#submit').removeAttr('disabled');

                $('#input-jumlah-barang').removeAttr('readonly');
                $('#input-nama-barang').val(result.data.nama);
                $('#input-stock-barang').val(result.data.jumlah);
                $('#input-jumlah-barang').attr('max',result.data.jumlah);
                $('#input-jual-barang').val(result.data.harga_jual);
                $('#input-profit-barang').val(result.data.profit);
                if(result.data.jumlah === '0'){
                    console.log('yes');
                    $('#input-jumlah-barang').attr('readonly',true);
                    $('#submit').attr('disabled',true);
                    $('#input-tgl').attr('readonly',true);
                }
            }else{
                $('.kode-ket').append('<p class="text-danger">Kode tidak ditemukan!</p>');
                $('#input-jumlah-barang').attr('readonly',true);
                $('#input-tgl').attr('readonly',true);
                $('#submit').attr('disabled',true);
            }
          })
          .catch(error => console.log('error', error));
    });
</script>
</body>
</html>
