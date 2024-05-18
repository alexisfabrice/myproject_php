<?php
// include './auth/connect.php';
include_once "./auth/config.php";
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if (!$conn==true) {
    echo 'database not connected';
}

// if (!isset($_SESSION['id'])) {
//    header('location:../index.php');
// }

if (isset($_POST['submit'])) {
   $tname=$_POST['tname'];
   $sql=mysqli_query($conn,"INSERT INTO trade(tname) values('$tname')");
   if ($sql==true) {
   header('location:displaytd.php');
   }
   else{
    echo 'data not';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trade</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            text-transform: capitalize;
        }
    body{
background: white;
    }
    .name{
        display: flex;
        border-radius: 10px;
    }
    a{
        text-decoration: none;
        color: black;
    }
    form{
    position: absolute;
    top: 50%;
    left: 50%;
    transform:transition(-50%,-50%);
    border: 1px solid #fff;
    padding: 70px;
    margin-left: -150px;
    border: 1px solid #000;
    margin-top: -80px;
    border-radius: 4px;
    
}
input{
    padding: 6px;
    width: 100%;
    border-radius: 2px;
    border-bottom:1px solid #000 ;
    border-left: none;
    border-right: none;
    background-color: transparent;
    outline: none;
    border-top: none;


    
}
label{
    font-size: 20px;
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
    color: dodgerblue;
    font-weight: 900;
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
    color: white;
    
}
.icon img{
height: 40px;
width: 40px;
font-size: 25px;
border-radius: 20px;
}
.icon span{
    color:#000;
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
.bten{
    width: 60px;

}

    </style>
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

</div>
<h1>INSERT TRADE</h1>
<button class="bten"><a href="displaytd.php">back</a></button></form>
    <form action="" method="post">
            <label for="">tradename</label><br><br>
            <input type="text" name="tname" id="" required><br>
            <button type="submit" value="submit" name="submit">submit</button>
       
    </form>
</body>
</html>