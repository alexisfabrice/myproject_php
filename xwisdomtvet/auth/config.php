<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "xwisdom_tvet");

if (!$conn) {
    echo "Not connected!";
}

if (!$_SESSION['id']) {
    header("Location: ./Auth/login.php");
} else {
    // echo $_SESSION['mid'];
    // echo " is set";
}
