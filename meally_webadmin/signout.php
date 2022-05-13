<?php
session_start();
unset($_SESSION['admincontrol']);
unset($_SESSION['user']);
unset($_SESSION['verified-uid']);
unset($_SESSION['idTokenString']);
unset($_SESSION['userrole']);
if (isset($_SESSION['verified-admin'])) {
    unset($_SESSION['verified-admin']);
    $_SESSION['logoutstatus'] = "Logged out successfully! ";
}
if (isset($_SESSION['expired-status'])) {
    $_SESSION['status'] = "Session Expired.";
    unset($_SESSION['verified-uid']);
} else {
    $_SESSION['logoutstatus'] = "Logged out successfully! ";
}
header('Location: sign-in.php');
exit();
