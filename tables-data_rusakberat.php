<?php  
    
    $conn=mysqli_connect("localhost", "root", "", "aset1");

    session_start();
    $pengguna=$_SESSION['pengguna'];
    if($pengguna=="" || $pengguna==" "){
        header("location:index.php");
    } 

    $query=mysqli_query($conn, "SELECT * FROM tbl_aset WHERE rusak_berat>='1'");
    $total = mysqli_num_rows($query);
    
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> S<![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<link rel="shortcut icon" href="images/favicon.ico">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dinas Lingkungan Hidup Kota Mataram</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_tambahan.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <link rel="stylesheet" type="text/css" href="dist/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert2.css">
    <script type="text/javascript" src="dist/sweetalert2.min.js"></script>
    <script type="text/javascript" src="dist/sweetalert2.all.js"></script>
    <script type="text/javascript" src="dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="dist/sweetalert2.js"></script> -->

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
                     <li>
                        <a href="forms-basic.php"><i class="menu-icon fa fa-th"></i>Tambah Aset </a>
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
                    <a class="navbar-brand" href="home.php"><img src="images/logo1.png" alt="Logo"></a>
                  
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
                            <img class="user-avatar rounded-circle" src="images/admin1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="keluar.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- Header-->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Aset kurang baik</strong>
                                <div class="float-right">
                                    
                                    <span class="badge badge-success"><?php echo$total ?></span>
                                </div>
                            </div>
                            <div class="card-body">                            
                         
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                           
                                            <th>Baik</th>
                                            <th>Kurang baik</th>
                                            <th>Rusak berat</th>
                                           
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $no=1; foreach ($query as $data) : ?>                                
                                        <tr>
                                            <td><?=$no; ?></td>
                                            <td><?=$data['nama']; ?></td>
                                       
                                            <td><?=$data['baik'];?></td>
                                            <td><?=$data['kurang_baik'];?></td>
                                            <td><?=$data['rusak_berat'];?></td>
                                            
                                            <td>
                                                <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#detail-data<?php echo $data['id']?>">Lihat data</button>
                                                <a href="edit_data.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-check-square-o"></i> Edit
                                                </button></a>
                                                <a data-toggle="modal" data-target="#hapusdata<?php echo $data['id']?>"><button type="button" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-eraser"></i> Hapus
                                                </button></a>
                                            </td>
                                        </tr>

                                        <!-- Popup hapus -->
                                        <div id="hapusdata<?php echo $data['id']?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <!-- konten modal-->
                                                <div class="modal-content">
                                                    <!-- heading modal -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Hapus data</h4>
                                                    </div>
                                                    <!-- body modal -->
                                                    <div class="modal-body">
                                                        <h6 class="text-center">Yakin ingin menghapus data?</h6>
                                                    </div>
                                                    <!-- footer modal -->
                                                    <div class="modal-footer">
                                                        <form action="hapusdata.php" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo$data['id']; ?>"></input>

                                                            <button type="submit" class="btn btn-danger" name="delete">Yakin</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">TIdak</button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Popuphapus -->

                                         <!-- Popup lihat data -->
                                        <div id="detail-data<?php echo $data['id']?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-lg">
                                                <!-- konten modal-->
                                                <div class="modal-content">
                                                    <!-- heading modal -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <strong class="card-title">Detail Aset</strong>
                                                    </div>
                                                    <!-- body modal -->
                                                    <div class="modal-body">
                                                        <strong>ID</strong><p><?= $data['id']; ?></p><hr>
                                                        <strong>Ruangan</strong><p><?= $data['ruangan']; ?></p><hr>
                                                        <strong>Nama</strong><p><?= $data['nama']; ?></p><hr>
                                                        <strong>Merek</strong><p><?= $data['merek']; ?></p><hr>
                                                        <strong>Ukuran</strong><p><?= $data['ukuran']; ?></p><hr>
                                                        <strong>bahan</strong><p><?= $data['bahan']; ?></p><hr>
                                                        <strong>Tahun Pembuatan</strong><p><?= $data['thn_pembuatan']; ?></p><hr>
                                                        <strong>kode</strong><p><?= $data['kode']; ?></p><hr>
                                                        <strong>jumlah</strong><p><?= $data['jumlah']; ?></p><hr>
                                                        <strong>harga</strong><p><?php echo $hasil_rupiah = "Rp " . number_format($data['harga'],2,',','.'); ?></p><hr>
                                                        <strong>baik</strong><p><?= $data['baik']; ?></p><hr>
                                                        <strong>Kurang baik</strong><p><?= $data['kurang_baik']; ?></p><hr>
                                                        <strong>Rusak berat</strong><p><?= $data['rusak_berat']; ?></p><hr>
                                                        <strong>Keterangan</strong><p><?= $data['ket']; ?></p><hr>
                                                        
                                                        
                                                    </div>
                                                    <!-- footer modal -->
                                                    <div class="modal-footer">
                                                        <form action="print_aset_detail.php" method="post" target="blank">
                                                            <input type="hidden" name="id" value="<?php echo $data['id']?>"></input>
                                                            <button type="submit" class="btn btn-primary">cetak</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Popup lidat data -->

                                        <?php $no++; endforeach; ?>
                                    </tbody>
                                    
                                </table>
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
                        Copyright &copy; 2019 Dinas Lingkungan Hidup Kota Mataram
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
    </script>

    <div id="add-data" class="modal fade" role="dialog">
       <div class="modal-dialog modal-lg">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah data</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                  <form action="inputdata.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="selectSm" class=" form-control-label">Ruangan</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="ruangan" id="selectSm" class="form-control-sm form-control" required>
                                                <option disabled selected="">Ruangan</option>
                                                <option value="1">SEKRETARIS</option>
                                                <option value="2">KEPALA DINAS</option>
                                                <option value="3">SUB. BAGIAN UMUM DAN KEPEGAWAIAN</option>
                                                <option value="4">SUB. BAGIAN UMUM DAN KEPEGAWAIAN/KORIDOR</option>
                                                <option value="5">SUB. BAGIAN PERENCANAAN</option>
                                                <option value="6">BIDANG PENATAAN DAN PENINGKATAN KAPASITAS SDM</option>
                                                <option value="7">BIDANG PENGELOLAAN SAMPAH LIMBAH B3</option>
                                                <option value="8">PENGURUS DAN PENYIMPAN BARANG</option>
                                                <option value="9">SUB. BAGIAN KEUANGAN</option>
                                                <option value="10">RUANGAN RAPAT</option>
                                                <option value="11">WORK SHOP</option>
                                                <option value="12">TATA LINGKUNGAN ( AMDAL )</option>
                                                <option value="13">BIDANG PENGAWASAN PENGENDALIAN PENCEMARAN LH</option>
                                                <option value="14">UPTD LABORATURIUM</option>
                                                <option value="15">AULA</option>
                                                <option value="16">PUSAT PELAYANAN DLH</option>
                                                <option value="17">UPTD BANK SAMPAH</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Id Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="id" value="<?= $urut; ?>" class="form-control" readonly>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Kode Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="kode" placeholder="kode barang" class="form-control">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Nama Barang/Jenis Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nama" placeholder="Nama aset" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Merek/Model</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="merek" placeholder="Merek/Model" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Ukuran</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="ukuran" placeholder="ukuran" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Bahan</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="bahan" placeholder="Bahan" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Tahun Pembuatan/Pembelian</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="thn_pembuatan" placeholder="Tahun Pembuatan/Pembelian" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Jumlah Barang</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="jumlah" placeholder="Jumlah barang" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Harga beli per unit</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="harga" placeholder="Harga per unit" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Baik</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="baik" placeholder="jumlah baik" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Kurang Baik</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="kurang_baik" placeholder="jumlah kurang baik" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Rusak Berat</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="rusak_berat" placeholder="jumlah rusak berat" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <b><label for="text-input" class=" form-control-label">Ket</label></b>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="ket" placeholder="keterangan" class="form-control" required>
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" class="btn btn-success">Tambah</button>
                                </form>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
       </div>
    </div>

</body>
</html>


