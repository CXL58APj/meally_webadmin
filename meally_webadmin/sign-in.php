<?php
session_start();

if (isset($_SESSION['verified-uid'])) {
  header("Location:javascript://history.go(-1)");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/meally_fav.png">
  <title>
    meally - Sign In
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <!-- SIGN IN FORM START-->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">

          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <?php
            if (isset($_SESSION['error-status'])) {
              echo
              "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='color:white;'>
                    <span class='alert-icon align-middle'>
                    </span>
                    <span class='alert-text'><strong>" . $_SESSION['error-status'] . "</strong></span>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
              unset($_SESSION['error-status']);
            }
            ?>

            <?php
            if (isset($_SESSION['logoutstatus'])) {
              echo
              "<div class='alert alert-success alert-dismissible fade show' role='alert' style='color:white;'>
                    <span class='alert-icon align-middle'>
                      <span class='material-icons text-md'>
                      thumb_up_off_alt
                      </span>
                    </span>
                    <span class='alert-text'><strong>" . $_SESSION['logoutstatus'] . "</strong></span>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
              unset($_SESSION['logoutstatus']);
            }
            ?>
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-body">
                <form action="code.php" method="POST" class="text-start">
                  <h4 class="text-black font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  <p class="text-black text-center mt-2 mb-0">Please enter your email and password to continue.</p>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="user-emailaddress" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="user-password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="signin_btn" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SIGN IN FORM END-->
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="#" class="font-weight-bold text-white" target="_blank">ChowRev Inc.</a>

              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link text-white">meal.ly</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>