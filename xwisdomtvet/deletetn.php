<?php
  session_start();
  $conn=mysqli_connect('localhost','root','','xwisdom_tvet');
  if (!$conn==true) {
      echo 'database not connected';
  }
if (isset($_GET['id'])) {
   $id=$_GET['id'];
    $delete=mysqli_query($conn,"DELETE FROM trainees where tnid='$id'");
if ($delete==true) {
  header('location:dispaytn.php');
}
 }
else{
    header('location:dispaytn.php');
}

?>
