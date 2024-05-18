<?php
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if (!$conn==true) {
    echo 'database not connected';
}

if (isset($_GET['iid'])) {
   $id=$_GET['iid'];
   $delete=mysqli_query($conn,"DELETE  FROM marks WHERE tid='$id'");
   header('location:displaytd.php');
   if ($delete==true) {
    $delete2=mysqli_query($conn,"DELETE FROM trade where tid='$id'");
    header('location:displaytd.php');
 if ($delete2==true) {
  $delete3=mysqli_query($conn,"DELETE FROM trainees where tid='$id'");
  header('location:displaytd.php');
  if ($delete3==true) {
    header('location:displaytd.php');
 }
 else{
    header('location:displaytd.php'); 
 }
   }
}
else{
    header('location:displaytd.php');
}
}
else{
   echo 'data not deleted';
}
?>
