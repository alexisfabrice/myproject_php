<?php
include_once "./auth/config.php";
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if (!$conn==true) {
   echo 'database  not connected';
}
$id=$_GET['id'];
$form='';
$select=mysqli_query($conn,"SELECT * FROM trade WHERE tid='$id'");
if ($select==true) {
  $fetch=mysqli_fetch_assoc($select);
$form ='
<form action="" method="post">
<label for="">tradename</label><br><br>
<input type="text" name="tname" id="" value='.$fetch['tname'].'><br><br>
<button type="submit" value="update" name="submit" >update</button>

</form>
';
if (isset($_POST['submit'])) {
$tname=$_POST['tname'];
$update=mysqli_query($conn,"UPDATE trade SET tname='$tname' WHERE tid='$id'");
if ($update==true) {
    header('location:displaytd.php');
}
else{
    echo 'data not updated';
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body{
            background: whie;
}
*{
    margin: 0;
    padding: 0;
    text-transform: capitalize;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
form{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: transition(-50%,-50%);
    border: 1px solid #000;
    padding: 70px;
    margin-left: -150px;
    margin-top: -100px;
}
input{
    padding: 6px;
    width: 100%;
    background-color: transparent;
    outline: none;
    border: 1px solid #000;
}
label{
    font-size: 20px;
}

.nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 70px;
    width: 100%;
    gap: 50px;
    background-color:dodgerblue;
    color: white;
    
}
.navbar a{
    padding: 19px;
    text-align: center;
    text-decoration: none;
    color: dodgerblue;
    font-weight: 900;
    font-size: larger;
    font-size: 13px;
    color: white;

}

.navbar a:hover{
    transition: 1s;
   
    border-radius: 10px;
    height: 30px;
   
    
}
.icon{
    width: 120px;
    height: 60px;
    display: flex;
    align-items: center;
    
}
.icon img{
height: 40px;
width: 40px;
font-size: 25px;
border-radius: 20px;
}
.icon span{
    color: blue;
    font-weight: 900;
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
.menu ul li:hover .sub1 ul{
    display: block;
    margin-top: 10px;
    
}
:active,.menu ul li:hover .sub1 li{
    border-radius: 3px;
    color: black;
    
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    
<div class="nav">
    <div class="icon">
<img src="./image/icon.png" alt=""><span>Xwisdom</span>_TVET
    </div>
    <div class="navbar">
        <a href="index.php">home</a>
      
        <a href="./displaytd.php">trade</a>
        <a href="dispaytn.php">traineers</a>
        <a href="./displaym.php">marks</a>
        <a href="report.php">report</a>
    </div>
    <button class="bten"><a href="trade.php">back</a></button>
</div>
    <?php echo $form ?>
</body>
</html>