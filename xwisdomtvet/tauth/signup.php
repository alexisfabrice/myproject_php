<?php
session_start();
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if (!$conn==true) {
    echo 'database not connected';
}

$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
$id=$_GET['tid'];
$form='';
$sql=mysqli_query($conn,"SELECT * FROM trade WHERE tid='$id'");
if ($sql==true) {
   $fetch=mysqli_fetch_assoc($sql);
}
if (isset($_POST['signup'])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$check=mysqli_query($conn,"SELECT * FROM trainees WHERE firstname='$fname' AND lastname='$lname'");
if (mysqli_num_rows($check)>0) {
   echo 'username aready exist';
}
else{
   $insert=mysqli_query($conn,"INSERT INTO trainees(firstname,lastname,gender,tid)VALUES('{$fname}','{$lname}','{$gender}','{$id}')");
   if ($insert==true) {
      $select=mysqli_query($conn,"SELECT * FROM trainees WHERE firstname='{$fname}' AND lastname='{$lname}',gender='$gender'");
      $fetch=mysqli_fetch_assoc($check)['tnid'];
      $_SESSION['tnid']=$fetch;
      header('location:../dispaytn.php');

   }
   else{
      echo 'data not inserted';
   }
}
}
$form='
<form action="" method="post">
<label for="">tradename</label><br>
<input type="text" name="fname" id="" value='.$fetch['tname'].'><br><br>
<label for="">firstname</label><br>
<input type="text" name="fname" id=""><br><br>
<label for="">lastname</label><br>
<input type="text" name="lname" id=""><br><br>
<label for="">gender</label><br>
<div>
<input type="radio" name="gender" value="f" id="">female
</div>
<div>
<input type="radio" name="gender" value="m" id="">male
</div>
<div>
<input type="radio" name="gender" value="o" id="">custom
</div>
<button name="signup">submit</button>
</form>
';

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <style>
 
    body{
background: white;
    }
    a{
        text-decoration: none;
        color: black;
    }
    *{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 0;
    padding: 0;
    text-transform: capitalize;
}

.nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 70px;
    width: 100%;
    gap: 50px;
    background-color:dodgerblue;
}
.navbar a{
    padding: 19px;
    text-align: center;
    text-decoration: none;
    color: white;
    font-weight: 900;
    font-size: 13px;

}

.navbar a:hover{
    transition: 1s;
    background-color: chocolate;
    border-radius: 10px;
    height: 30px;
   
    
}
.icon{
    width: 120px;
    height: 60px;
    display: flex;
    align-items: center;
    color: white;
    
}
.icon img{
height: 40px;
width: 40px;
font-size: 25px;
border-radius: 20px;
}
.icon span{
    color: blue;
    font-style: italic;
}
.menu{
    width: 120px;
    height: 60px;
    display: flex;
    align-items: center;
    margin-top: 5px;
}
.menu img{
    width: 40px;
    height: 40px;
}
.menu ul li{
    background-color: wheat;
    list-style: none;
}
.menu .sub1{
    display: none;
}

.menu ul li:hover .sub1{
    display: block;
    position: absolute;
    margin-top: 17px;
    margin-left: -35px;
    background-color: white;
    width: 100px;
    text-align: center;
    height: 95px;
    margin-top: 2px;
}
input{
   border-bottom: 1px solid #000;
   border-right: none;
   border-left: none;
   border-top: none;
   outline: none;

}


    form{
      border:1px solid #000;
      height: fit-content;
      width: fit-content;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      padding: 35px;
      border-radius: 10px;

    }
    button{
     width: 60%;
     margin-top: 30px;
     height: 40px;
     font-size: 17px;
     text-align: center;
     margin-left: 20px;
     border-radius: 10px;
     outline: none;
     border: none;
     background-color: #bab5b5;
 }
 .bten{
     width: 60px;
     margin-top: 30px;
     height: 40px;
     font-size: 17px;
     text-align: center;
     margin-left: 20px;
     border-radius: 10px;
     outline: none;
     border: none;
     background-color: #bab5b5;
     color: black;
 }
   

   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
 </head>
 <body>
 <div class="nav">
    <div class="icon">
<img src="./image/icon.png" alt=""><span>Xwisdom</span>_TVET
    </div>
    <div class="navbar">
        <a href="../index.php">home</a>
        <a href="#">about</a>
        <a href="../displaytd.php">trade</a>
        <a href="../dispaytn.php">traineers</a>
        <a href="../displaym.php">marks</a>
        <a href="../report.php">report</a>
    </div>
</div>
<h1>add new traineer</h1>
<button class="bten"><a href="../displaytd.php">back</a></button>
   <?php echo $form; ?>
 </body>
 </html>