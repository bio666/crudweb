<?php
    session_start();
    if (isset($_SESSION['nohp'])) {
        header('location:../../user'); 
    }else{
        echo'';
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Website Jasa Joki Mobile Legend</title>
  <link rel="icon" href="../../media/images/logo/mobilelegend.png">
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="" rel="stylesheet">
  <link href="../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="../../assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="../../assets/css/main.css" rel="stylesheet" media="all">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(51,45,43);">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://m.mobilelegends.com/">
        <div class="sidebar-brand-text mx-3">
          <br><br><br>
            <img width="185" height="120" src="../../media/images/logo/mobilelegend.png" class="custom-logo" >
        </div>
      </a>

      <br><br><br>

<hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="../../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Homepage</span></a>
      </li>

<hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data
      </div>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <img src="../../media/images/icon/menu/user.png" style="width: 20px">
          <span >&nbsp;MENU</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded" style="background-color: rgb(255,214,0);"> 
            <a class="collapse-item active" href="#">Daftar Peserta</a>
            <a class="collapse-item" href="../signin">Login Peserta</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../content/user">
          <img src="../../media/images/icon/menu/info.png" style="width: 20px">
          <span>&nbsp;Informasi Contact Person</span></a>
      </li>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="list-group-item-danger">
        
         <div class="modal-body">
        <strong>Peringatan,</strong> Anda harus login terlebih dahulu!!</h5>
      </div>
        <div class="modal-footer">
          <a href="../signin">
            <button type="button" class="btn btn-primary">Login</button>
          </a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
</div>

<hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>


    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <form class="d-none d-sm-inline-block form-inline">
            <div class="input-group">
               <h3 class="" style="color:black">Jasa Joki Mobile Legend</h3>
              <div class="input-group-append">
              </div>
            </div>
          </form>
        </nav>

          <div class="container-fluid" style="color: black">
          <?php
              if (isset($_POST['daftar'])) {
                include '../../assets/mysql_connect/koneksi.php';
                  $daftar = mysqli_query($koneksi, "INSERT INTO tb_joki VALUES(
                    NULL,
                    '".$_POST['nama']."',
                    '".$_POST['tier_terakhir']."',
                    '".$_POST['tgl']."',
                    '".$_POST['jk']."',
                    '".$_POST['alamat']."',
                    '".$_POST['nohp']."',
                    '".$_POST['user']."',
                    '".$_POST['password']."')");                 
                  if ($daftar) {
                    echo '<h3 align="center" class="list-group-item list-group-item-success" >Berhasil Mendaftar</h3>';
                  }else{
                    echo '<h3 align="center" class="list-group-item list-group-item-Danger" >Pendaftaran Gagal </h3>'; 
                  }
                }
            ?>
          <br>
        <div class="wrapper wrapper--w960">
            <div class="card card-2">

                <div class="card-body">
                    <h2 class="title" align="center">Formulir Pendaftaran Joki</h2>
                    <form method="POST">
                        <div class="input-group" >
                            <input class="input--style-2" type="text" placeholder="Nama Lengkap"  name="nama" required/>
                        </div>
                        <div class="row row-space">
                          <div class="input-group col-4">
                                <input class="input--style-2" type="text" placeholder="Tier terakhir" name="tier_terakhir" required/>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" id="datepicker" type="text" placeholder="Tanggal Dikerjakan" name="tgl" required/>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group rs-select2 js-select-simple select--no-search ">
                                    <select name="jk" required>
                                        <option disabled="disabled" selected="selected">Jenis Kompetisi</option>
                                        <option>Ranked</option>
                                        <option>Classic</option>
                                        <option></option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                          <div class="input-group col-7">
                            <input class="input--style-2" type="text" placeholder="Alamat email" name="alamat" required/>
                          </div>
                          <div class="input-group col-4">
                            <input class="input--style-2" type="number" placeholder="Nomor HP / WhatsApp (Aktif)" name="nohp" required maxlength="15"/>
                          </div>
                        </div>
                        <div class="col-4">
                                <div class="input-group rs-select2 js-select-simple select--no-search ">
                                    <select name="jk" required>
                                        <option disabled="disabled" selected="selected">Jenis Device</option>
                                        <option>Android</option>
                                        <option>Iphone</option>
                                        <option></option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group rs-select2 js-select-simple select--no-search ">
                                    <select name="jk" required>
                                        <option disabled="disabled" selected="selected">Jenis Login VIA</option>
                                        <option>Moonton</option>
                                        <option>Gmail</option>
                                        <option>Tiktok</option>
                                        <option>Facebook</option>
                                    </select>
                                    <div class="input-group col-7">
                                    <input class="input--style-2" type="text" placeholder="user" name="user" required/>
                                    </div>
                                    <div class="input-group col-7">
                                    <input class="input--style-2" type="password" placeholder="Password" name="password" required/>
                                    </div>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        <div class="p-t-30">
                          <input class="btn btn--radius btn--green" type="submit" name="daftar" value="Daftar" style="width: 400px;" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; HAMAS 2021</span>
          </div>
        </div>


    </div>
    

  </div>



  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- JavaScript-->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../assets/js/sb-admin-2.min.js"></script>
  <script src="../../assets/vendor/select2/select2.min.js"></script>
  <script src="../../assets/vendor/datepicker/moment.min.js"></script>
  <script src="../../assets/vendor/datepicker/daterangepicker.js"></script>
  <script src="../../assets/vendor/global.js"></script>
</body>
</html>
