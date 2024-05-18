<?php
include_once "./auth/config.php";
 
    $conn=mysqli_connect('localhost','root','','xwisdom_tvet');
    if (!$conn==true) {
        echo 'database not connected';
    }
    
   

    $sql = mysqli_query($conn, "SELECT * FROM trade");
    $num_rows =mysqli_num_rows($sql);
    $tbody = '';

    if ($num_rows > 0) {
        $a = 0;
        while ($fetch = mysqli_fetch_assoc($sql)){
            $a++;
            $tbody .= '<tr>
            <td>'.$a.'</td>
            <td>'.$fetch['tname'].'</td>
            <td><a href="./updatetd.php?id='.$fetch['tid'].'">UPDATE</a></td>
            <td><a href="./deletetd.php?id='.$fetch['tid'].'">DELETE</a></td>
            <td><a href="./tauth/signup.php?tid='.$fetch['tid'].'">TRAINEES</a></td>

        </tr>';
        }
    }
    else {
        $tbody .= "<tr><td colspan='4'>no record</td></tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
          body{
            background: white;
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
   color: black;
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

.container{
   
    display: flex;
    align-items: center;
    height: 500px;
    color: #0c0c0c;
    font-weight: 900;
    width: 100%;
}
.container h1{
    color: black;
}
.text-container{
    font-size: 20px;
}
        table{
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
        }
        table,th,tbody,tr,td,thead{
border-collapse: collapse;
padding: 20px;
        }
        table a{
            color: blue;
            text-decoration: none;
        }
        table,th, td{
           border: 1px solid #000;
        }
        .add{
          
          text-align: center;
          margin-top: 20px;
        }
        button{
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
    <title>trade</title>
</head>
<body>
    
<div class="nav">
    <div class="icon">
<img src="./image/icon.png" alt=""><span>Xwisdom</span>_TVET
    </div>
    <div class="navbar">
        <a href="index.php">home</a>
       
        <a href="./displaytd.php">trade</a>
        <a href="./dispaytn.php">traineers</a>
        <a href="./displaym.php">marks</a>
        <a href="report.php">report</a>
    </div>
</div>
<button class="bten"><a href="index.php">back</a></button>
<div class="add">before add new ather operation you have<br> to  <a href="trade.php">add new trade</a></div>
    <!-- <a href="i"></a> -->
    <table border="2">
        <thead>
            <tr>
              
                <th> number</th>
                <th>Tradename</th>
                <th colspan="4">Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
                echo $tbody; 
            ?>
        </tbody>
    </table>
</body>
</html>