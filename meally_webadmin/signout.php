<?php
session_start();

unset($_SESSION['verified-uid']);
unset($_SESSION['idTokenString']);
if (isset($_SESSION['expired-status'])) {
    $_SESSION['status'] = "Session Expired.";
    unset($_SESSION['verified-uid']);
} else {

    $_SESSION['logoutstatus'] = "Logged out successfully! ";
}
header('Location: sign-in.php');
exit();
