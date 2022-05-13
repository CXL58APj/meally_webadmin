<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/meally_fav.png">
  <title>
    meally
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
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

</head>

<body class="g-sidenav-show  bg-gray-200">
  <!-- Navbar -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="assets/img/meally120x120.png" class="navbar-brand-img h-50" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Meally Admin</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Core</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Management</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="billing.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary " href="stores.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Stores</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="customers.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Customers</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">System Management</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="systemusers.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="signout.php" type="button">Logout</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Management</li>
            <li class="font-weight-bolder mb-0 breadcrumb-item text-sm text-dark active" aria-current="page">Stores </li>

          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                <span class="d-sm-inline d-none"><?= $_SESSION['user']; ?></span>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="assets/img/icons8-cog-100.png" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Account settings</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          See or make changes in your account
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="assets/img/icons8-shutdown-52.png" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Logout</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          See you soon?
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <!-- Users Table Start -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                <h6 class="text-white text-capitalize ps-3">Active Stores</h6>
              </div>
            </div>
            <div class="card-body px-5">
              <div class="table-responsive p-0">
                <table id="example" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 w-5">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Store</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Store Owner</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gcash</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subscription</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">Controls</th>
                    </tr>
                  <tbody>
                    <?php
                    include('dbcon.php');

                    $ref_table = 'stores';
                    $fetchdata  = $database->getReference($ref_table)
                      ->orderByChild('status')
                      ->equalTo('active')
                      ->getValue();

                    if ($fetchdata > 0) {
                      $i = 1;

                      foreach ($fetchdata as $key => $row) {
                        if ($row['subend'] < 30) {
                          $badgecolor = "badge badge-sm bg-gradient-danger";
                        } else {
                          $badgecolor = "badge badge-sm bg-gradient-success";
                        }
                    ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="<?= $row['storepfp']; ?>" class="avatar avatar-l me-3 border-radius-lg" alt="Store Imge">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"><?= $row['storename']; ?></h6>
                                <p class="text-xs text-secondary mb-0"><?= $row['storeaddress']; ?></p>
                              </div>
                            </div>
                          </td>
                          <td class="text-sm"><?= $row['storeowner']; ?></td>
                          <td class="text-sm"><?= $row['storebin']; ?></td>
                          <td><span class="<?= $badgecolor; ?>"><?= $row['subend']; ?> days left</span></td>
                          <td class="text-end">
                            <a href="storeprofile.php?id=<?= $key; ?>" name="view_btn" class="btn btn-info btn-sm my-2 mb-2">
                              View
                            </a>
                            <button type="submit" name="disable_btn" class="btn btn-danger btn-sm my-2 mb-2">Disable</button>
                          </td>
                        </tr>
                      <?php
                      }
                    } else {
                      ?>
                      <tr>
                        <td colspan="5"> No Record Found</td>
                      </tr>
                    <?php
                    }

                    ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- inactive stores  -->
          <div class="card my-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                <h6 class="text-white text-capitalize ps-3">In-active Stores</h6>
              </div>
            </div>
            <div class="card-body px-5">
              <div class="table-responsive p-0">
                <table id="example2" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 w-5">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Store</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Store Owner</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gcash</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">Controls</th>
                    </tr>
                  <tbody>
                    <?php
                    include('dbcon.php');

                    $ref_table = 'stores';
                    $fetchdata = $reference = $database->getReference($ref_table)
                      ->orderByChild('status')
                      ->equalTo('inactive')
                      ->getValue();

                    if ($fetchdata > 0) {
                      $i = 1;

                      foreach ($fetchdata as $key => $row) {
                    ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="<?= $row['storepfp']; ?>" class="avatar avatar-l me-3 border-radius-lg" alt="Store Imge">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"><?= $row['storename']; ?></h6>
                                <p class="text-xs text-secondary mb-0"><?= $row['storeaddress']; ?></p>
                              </div>
                            </div>
                          </td>
                          <td class="text-sm"><?= $row['storeowner']; ?></td>
                          <td class="text-sm"><?= $row['storebin']; ?></td>
                          <td class="text-end">
                            <a href="#" name="view_btn" class="btn btn-info btn-sm my-2 mb-2">
                              View
                            </a>
                            <button type="submit" name="registeruser_btn" class="btn btn-success btn-sm my-2 mb-2">Enable</button>
                          </td>
                        </tr>
                      <?php
                      }
                    } else {
                      ?>
                      <tr>
                        <td colspan="5"> No Record Found</td>
                      </tr>
                    <?php
                    }

                    ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Users Table End  -->
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();

    });
  </script>
  <script>
    $(document).ready(function() {
      $('#example2').DataTable();

    });
  </script>
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