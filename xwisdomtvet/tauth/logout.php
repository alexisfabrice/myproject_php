<?php
session_start();
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if (!$conn==true) {
    echo 'database not connected';
}

if (!isset($_SESSION['tnid'])) {
   header('location:../index.php');
}
if (isset($_GET['tnid'])) {
    session_unset();
    session_destroy();
    header('location:./login.php');
}
else {
    header('location:./login.php'); 
}
?>