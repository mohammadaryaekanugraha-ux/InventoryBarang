<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // cek user
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' LIMIT 1");
    $user = mysqli_fetch_assoc($query);

    if ($user) {

        // cek password (hash)
        if (password_verify($password, $user['password'])) {

            // cek aktif
            if ($user['is_active'] == 1) {

                // simpan session
                $_SESSION['login'] = True;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                // redirect
                header("Location: index.php");
                exit;
            } else {
                echo "<script>alert('Akun tidak aktif');</script>";
            }
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Inventory_Barang_25550021</title>
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
<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto" style="text-decoration: none;">
                  <img src="assets/img/Logo Inventory_Barang.png" alt="Logo" style="max-height: 42px;">
                  <span class="d-none d-lg-block" style="font-size: 24px; padding-left: 8px; white-space: nowrap; color: #012970; font-weight: 700;">Inventory_Barang_25550021</span>
                </a>
              </div>

              <div class="card mb-3">
                <div class="card-body" style="padding: 30px;">
                  <div class="pt-2 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4" style="color: #012970; font-weight: 700;">login to your account</h5>
                    <p class="text-center small text-muted">Enter your username & password to login</p>
                  </div>
                  
                  <form class="row g-3 needs-validation" method="POST" novalidate>
                    <div class="col-12">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="col-12" style="margin-top: 20px;">
                      <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="credits text-center text-muted small">
                Designed by <a href="https://instagram.com/aragsbshs/" target="_blank" style="color: #4154f1; text-decoration: none; font-weight: 600;">M. Arya Eka Nugraha</a>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- End #main -->

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