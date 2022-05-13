<!--
=========================================================
* Material Dashboard 2 - v3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
include('adminauth.php');
$link = $_GET['id'];
if ($link) {
} else {
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
                <span class="ms-1 font-weight-bold text-white">meallyAdmin</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Core</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="dashboard.php">
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
                    <a class="nav-link text-white " href="#">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Billing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Stores</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
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
                    <a class="nav-link text-white active bg-gradient-primary " href="systemusers.php">
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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">System Management</li>
                        <li class="font-weight-bolder mb-0 breadcrumb-item text-sm text-dark active" aria-current="page">Users</li>
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
                                    <a class="dropdown-item border-radius-md" href="profile.php">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="assets/img/icons8-settings-50.png" class="avatar avatar-sm  me-3 ">
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
                                    <a class="dropdown-item border-radius-md" href="signout.php">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="assets/img/icons8-shutdown-50.png" class="avatar avatar-sm  me-3 ">
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
            <div class="row">
                <div class="col-12">
                    <!-- password do not match message  -->
                    <?php
                    if (isset($_SESSION['newpass'])) {
                        echo
                        "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='color:white;'>
                      <span class='alert-text'><strong>" . $_SESSION['newpass'] . " </strong> Password does not match. Please try again.</span>
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                      </button>
                        </div>";
                        unset($_SESSION['newpass']);
                    }
                    ?>
                    <!-- change user role message  -->
                    <?php
                    if (isset($_SESSION['userrolefail'])) {
                        echo
                        "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='color:white;'>
                      <span class='alert-text'><strong>" . $_SESSION['userrolefail'] . " </strong></span>
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                      </button>
                  </div>";
                        unset($_SESSION['userrolefail']);
                    }
                    ?>
                    <!-- edit account information form  -->
                    <div class="card my-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                                <h6 class="text-white text-capitalize ps-3" id="cnu"> Accounts Information</h6>
                            </div>
                        </div>
                        <div class="card-body px-5">
                            <form action="code.php" method="POST" role="form" class="text-start" enctype="multipart/form-data">
                                <?php
                                require_once('dbcon.php');

                                if (isset($_GET['id'])) {
                                    $uid = ($_GET['id']);
                                    try {
                                        $user = $auth->getUser($uid);
                                ?>
                                        <input type="hidden" name="user-id" value="<?= $uid; ?>">
                                        <div class="input-group input-group-static mb-4">
                                            <img src="<?= $user->photoUrl; ?>" id="img" alt="pfp" srcset="" class="w-25">
                                            <div class="input-group input-group-outline mb-4" class="form-control">
                                                <input type="file" name="display_imgfile" id="display_imgfile">
                                            </div>
                                        </div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>Email</label>
                                            <input type="email" name="display_useremail" value="<?= $user->email; ?>" class="form-control" required>
                                        </div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>Fullname</label>
                                            <input type="text" name="display_userfullname" value="<?= $user->displayName; ?>" class="form-control" required>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" name="updateuser_btn" class="btn bg-gradient-primary my-2 mb-2">Save Changes</button>
                                        </div>
                                <?php
                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                        echo $e->getMessage();
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                    <!-- edit account password  -->
                    <div class="card my-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                                <h6 class="text-white text-capitalize ps-3" id="cnu"> Change Password</h6>
                            </div>
                        </div>
                        <div class="card-body px-5">
                            <form action="code.php" method="POST" role="form" class="text-start">
                                <?php
                                include('dbcon.php');

                                if (isset($_GET['id'])) {
                                    $uid = $_GET['id'];
                                    try {
                                        $user = $auth->getUser($uid);
                                ?>
                                        <input type="hidden" name="changepass-user-id" value="<?= $uid; ?>">
                                        <div class="input-group input-group-static mb-4">
                                            <label>New Password</label>
                                            <input type="password" name="newpassword" class="form-control" required>
                                        </div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>Re-type Password</label>
                                            <input type="password" name="retypepassword" class="form-control" required>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" name="updateuserpassword_btn" class="btn bg-gradient-primary my-2 mb-2">Change Password</button>
                                        </div>
                                <?php
                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                        echo $e->getMessage();
                                    }
                                }

                                ?>



                            </form>
                        </div>
                    </div>

                    <!-- edit account type/privelege  -->
                    <div class="card my-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                                <h6 class="text-white text-capitalize ps-3" id="cnu"> Change Account Type</h6>
                            </div>
                        </div>
                        <div class="card-body px-5">
                            <form action="code.php" method="POST" role="form" class="text-start">
                                <?php
                                include('dbcon.php');

                                if (isset($_GET['id'])) {
                                    $uid = $_GET['id'];
                                    try {
                                        $user = $auth->getUser($uid);
                                        $claims = $auth->getUser($uid)->customClaims;
                                ?>
                                        <input type="hidden" name="usertype-user-id" value="<?= $uid; ?>">
                                        <div class="input-group input-group-outline my-3">
                                            <select name="roles" class="form-control" required>
                                                <?php
                                                if (isset($claims['admin']) == true) {
                                                    echo
                                                    "<option value='admin' selected>Administrator</option>
                                                     <option value='staff'>Staff</option>";
                                                } elseif (isset($claims['staff']) == true) {
                                                    echo
                                                    "<option value='admin'>Administrator</option>
                                                     <option value='staff' selected>Staff</option>";
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" name="usertype_btn" class="btn bg-gradient-primary my-2 mb-2">Update</button>
                                        </div>
                                <?php
                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                        echo $e->getMessage();
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>

                    <!-- enable/disable account  -->
                    <div class="card my-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                                <h6 class="text-white text-capitalize ps-3" id="cnu"> Disable Account</h6>
                            </div>
                        </div>
                        <div class="card-body px-5">
                            <form action="code.php" method="POST" role="form" class="text-start">
                                <?php
                                include('dbcon.php');

                                if (isset($_GET['id'])) {
                                    $uid = $_GET['id'];
                                    try {
                                        $user = $auth->getUser($uid);
                                ?>
                                        <input type="hidden" name="enabledisable-user-id" value="<?= $uid; ?>">
                                        <div class="input-group input-group-outline my-3">
                                            <select name="enabledisable" class="form-control">
                                                <?php
                                                if ($user->disabled) {
                                                    echo
                                                    "<option value='enable'>Enable</option>
                                                     <option value='disable' selected>Disabled</option>";
                                                } else {
                                                    echo
                                                    "<option value='enable' selected>Enabled</option>
                                                     <option value='disable'>Disable</option>";
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" name="eduser_btn" class="btn bg-gradient-primary my-2 mb-2">Update</button>
                                        </div>
                                <?php
                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                        echo $e->getMessage();
                                    }
                                }

                                ?>



                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
        display_imgfile.onchange = evt => {
            const [file] = display_imgfile.files;
            if (file) {
                img.src = URL.createObjectURL(file);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();

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