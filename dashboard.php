<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kelompok 2</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="all,follow">
  <!-- Google fonts - Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>

  <div class="page">
    <!-- Main Navbar-->
    <header class="header z-index-50">
      <nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
        <!-- Search Box-->
        <div class="search-box shadow-sm">
          <button class="dismiss d-flex align-items-center">
            <svg class="svg-icon svg-icon-heavy">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <form id="searchForm" action="#" role="search">
            <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
          </form>
        </div>
        <div class="container-fluid w-100">
          <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
            <!-- Navbar Header-->
            <div class="navbar-header">
              <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                <div class="brand-text d-none d-lg-inline-block"><span>Web </span><strong>Perpus</strong></div>
                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>WP</strong></div>
              </a>
              <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn" href="#"><span></span><span></span><span></span></a>
            </div>
            <!-- Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <!-- Search-->
              <li class="nav-item d-flex align-items-center"><a id="search" href="#">
                  <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                    <use xlink:href="#find-1"> </use>
                  </svg></a></li>
              <!-- Notifications-->
              <li class="nav-item dropdown"> <a class="nav-link text-white" href="dashboard.php?pinjam" aria-expanded="false">
                  <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                    <use xlink:href="#cart-1"> </use>
                  </svg></a></li>


              <!-- Logout    -->
              <li class="nav-item"><a class="nav-link text-white" href="logout.php"> <span class="d-none d-sm-inline">Logout</span>
                  <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                    <use xlink:href="#security-1"> </use>
                  </svg></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="page-content d-flex align-items-stretch">
      <!-- Side Navbar -->
      <nav class="side-navbar z-index-40">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center py-4 px-3"> <svg class="svg-icon svg-icon-sm svg-icon-heavy">
            <use xlink:href="#user-1"> </use>
          </svg>
          <div class="ms-3 title">

            <h1 class="h4 mb-2">Booker</h1>
            <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Mas Mas Biasa</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
        <ul class="list-unstyled py-4">
          <li class="sidebar-item"><a class="sidebar-link" href="dashboard.php">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#real-estate-1"> </use>
              </svg>Home </a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#portfolio-grid-1"> </use>
              </svg>Master Data </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown">
              <li><a class="sidebar-link" href="?pengunjung">Data Pengunjung</a></li>
              <li><a class="sidebar-link" href="?user">Administrator</a></li>
            </ul>
          </li>
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown1" data-bs-toggle="collapse">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#chart-1"> </use>
              </svg>Katalog Buku </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown1">
              <li><a class="sidebar-link" href="?buku">Data Buku</a></li>
              <li><a class="sidebar-link" href="?kategori">Kategori Buku</a></li>
            </ul>
          </li>
          <li class="sidebar-item"><a class="sidebar-link" href="#DropDown" data-bs-toggle="collapse">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Data Transaksi </a>
            <ul class="collapse list-unstyled " id="DropDown">
              <li><a class="sidebar-link" href="?pinjam">Peminjaman</a></li>
              <li><a class="sidebar-link" href="?rpinjam">Data Peminjaman</a></li>
              <li><a class="sidebar-link" href="?kembali">Kembalikan Buku</a></li>
            </ul>
          </li>

        </ul>
      </nav>

      <?php
      if (isset($_GET['pinjam'])) {
        include "pinjam.php";
      } elseif (isset($_GET['pengunjung'])) {
        include "pengunjung.php";
      } elseif (isset($_GET['buku'])) {
        include "buku.php";
      } elseif (isset($_GET['rpinjam'])) {
        include "rpinjam.php";
      } elseif (isset($_GET['kategori'])) {
        include "kategori.php";
      } elseif (isset($_GET['pengembalian'])) {
        include "pengembalian.php";
      } elseif (isset($_GET['abuku'])) {
        include "abuku.php";
      } elseif (isset($_GET['ebuku'])) {
        include "ebuku.php";
      } elseif (isset($_GET['apengunjung'])) {
        include "apengunjung.php";
      } elseif (isset($_GET['epengunjung'])) {
        include "epengunjung.php";
      } elseif (isset($_GET['user'])) {
        include "user.php";
      } elseif (isset($_GET['auser'])) {
        include "auser.php";
      } elseif (isset($_GET['euser'])) {
        include "euser.php";
      } elseif (isset($_GET['epinjam'])) {
        include "epinjam.php";
      } elseif (isset($_GET['kembali'])) {
        include "kembali.php";
      } else {
        include "konten.php";
      }
      ?>


      <!-- JavaScript files-->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/chart.js/Chart.min.js"></script>
      <script src="vendor/just-validate/js/just-validate.min.js"></script>
      <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="js/charts-home.js"></script>

      <!-- Main File-->
      <script src="js/front.js"></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
          }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>