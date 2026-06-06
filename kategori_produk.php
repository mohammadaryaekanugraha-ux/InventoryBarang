<?php
session_start();
include "koneksi.php";

// Cek apakah user sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM categories WHERE id = '$id'");
$hasil = mysqli_fetch_array($sql);
if (isset($_POST['update'])) {

    $nm_kat = $_POST['nm_kat'];

    $query = mysqli_query($conn, "UPDATE categories SET category_name = '$nm_kat' WHERE id='$id'");
    if ($query) {
        echo "<script>alert('Data berhasil diubah!')</script>";
        header("refresh:0, kategori_produk.php");
    } else {
        echo "<script>alert('Data gagal diubah!')</script>";
        header("refresh:0, kategori_produk.php");
    }
}
?> 
    
    
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kategori Produk - Inventory_Barang(25550021)</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
   
    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0" style="max-width: none; width: auto;">
            <img src="assets/img/logo Inventory_Barang.png" alt="Logo" style="max-height: 50px;">
            <span class="d-none d-lg-block fs-5 ms-2" style="font-size: 24px; padding-left: 8px; white-space: nowrap;">Inventory_Barang_25550021</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn" style="margin-left: 20px;"></i>
        </div><!-- End Logo -->

    
        <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/img/Profile-Arya.jpg" alt="Profile" class="rounded-circle">
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                <h6><?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'User'; ?></h6>
                <span><?php echo isset($_SESSION['role']) ? $_SESSION['role'] : 'Role'; ?></span>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <?php
      $current_page = basename($_SERVER['PHP_SELF']);
    ?>
        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'index.php') ? '' : 'collapsed'; ?>" href="index.php">
                <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'kategori_produk.php') ? '' : 'collapsed'; ?>" href="kategori_produk.php">
            <i class="bi bi-diagram-3"></i>
            <span>Kategori Produk</span>
            </a>
        </li><!-- End Dashboard Nav -->

            <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'produk.php') ? '' : 'collapsed'; ?>" href="produk.php">
            <i class="bi bi-boxes"></i>
            <span>Data Produk</span>
            </a>
        </li><!-- End Dashboard Nav -->

            <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'laporan.php') ? '' : 'collapsed'; ?>" href="laporan.php">
            <i class="bi bi-graph-up-arrow"></i>
            <span>Laporan</span>
            </a>
        </li><!-- End Dashboard Nav -->

            <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'users.php') ? '' : 'collapsed'; ?>" href="users.php">
            <i class="bi bi-person-gear"></i>
            <span>Manajemen User</span>
            </a>
        </li><!-- End Dashboard Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main" style="margin-top: 10px;">

        <div class="pagetitle">
        <h1>Kategori Produk</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Kategori Produk</li>
            
            </ol>
        </nav>
        </div><!-- End Page Title -->
        <div class="row">
            <div class="col-lg-12">

              <div class="card">
                <div class="card-body mt-3">
                <a href="t_kat.php" class="btn btn-primary">Tambah Data</a>
            </div>
              </div>
            </div>
        </div>

        <section class="section">
        <div class="row">
            <div class="col-lg-12">

            <div class="card">
                <div class="card-body mt-3">
                
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode kategori</th>
                        <th scope="col">Kategori produk</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php
                  include "koneksi.php";
                  $no = 1;
                  $sql = mysqli_query($conn, "SELECT * FROM categories");
                  while ($data = mysqli_fetch_array($sql)) {
                  ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['kd_kat']; ?></td>
                      <td><?php echo $data['category_name']; ?></td>
                      <td>
                        <a href="e_kat.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="h_kat.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                        
                    
                    
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
        </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
        &copy; Copyright <strong><span>Inventory_Barang_25550021</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        Designed by <a href="https://instagram.com/aragsbshs/" target="_blank">M. Arya Eka Nugraha</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    </body>

    </html>
