
<?php 
session_start();
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if ($conn==true) {
    echo 'database connected';
}

if (!isset($_SESSION['tnid'])) {
   // header('location:../index.php');
}
if (isset($_POST['login'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $check=mysqli_query($conn,"SELECT * FROM trainees WHERE firstname='$fname' and lastname='$lname'");
    if (mysqli_num_rows($check)==1) {
       $fetch=mysqli_fetch_assoc($check)['tnid'];
       $_SESSION['tnid']=$fetch;
       header('location:./index.php');

    }
}

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    
 </head>
 <body>
    
    <form action="" method="post">
      <label for="">firstname</label><br>
      <input type="text" name="fname" id=""><br><br>
      <label for="">lastname</label><br>
      <input type="text" name="lname" id=""><br><br>
      <button name='login'>signup</button>
    </form>
 </body>
 </html>