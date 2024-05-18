<?php 

include_once "./auth/config.php";
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if (!$conn==true) {
    echo 'database not connected';
}

$trainees='';
$trades = '';

$trainee_s = mysqli_query($conn, "SELECT * FROM trainees " );
$trad_e = mysqli_query($conn, "SELECT * FROM trade " );

while( $trainees_fetch = mysqli_fetch_assoc($trainee_s)){
    $trainees .= '<option value="'.$trainees_fetch['tnid'].'">'.$trainees_fetch['firstname'].' '.$trainees_fetch['lastname'].'</option>';
}

while( $trade_fetch = mysqli_fetch_assoc($trad_e)){
    $trades .= '<option value="'.$trade_fetch['tid'].'">'.$trade_fetch['tname'].'</option>';
}
if (isset($_POST['insert'])) {
  $tnid=$_POST['trainee_id'];
  $tid=$_POST['trade_id'];
  $mname=$_POST['mname'];
  $fass=$_POST['fassessment'];
  $sass=$_POST['sassessment'];
  $t_marks=$fass + $sass;
  $sql=mysqli_query($conn,"INSERT INTO marks(`tnid`,`tid`,`modulename`,fomative_assessment,asumative_assessment,total_marks)VALUES('$tnid','$tid','$mname',' $fass','$sass','$t_marks')");
  if ($sql==true) {
   header('location:displaym.php');
  }
  else{
    echo 'data  not inserted';
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
 
 body{
    background-color: white;
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
.text-container span{
    font-style: italic;
    color: rgb(59, 97, 223);
}

 a{
     text-decoration: none;
     color: black;
 }
 form{
   border:1px solid #000;
   height: fit-content;
   width: fit-content;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
   padding: 60px;
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
 select{
    width: 100%;
    height: 30px;
    border-top: none;
    border-bottom: 1px solid;
    border-left: none;
    border-right: none;
 }
 input{
    width: 100%;
    height: 30px;
    border-top: none;
    border-bottom: 1px solid;
    border-left: none;
    border-right: none;
    outline: none;
 }
 label{
    color: #000;
    font-weight: 900;
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
    <title>Form</title>
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
<h1>INSERT MARKS</h1>
<button class="bten"><a href="dispaytn.php">back</a></button>

    <form action="" method="POST">
        <div>
            <label for="">Traineees</label><br>
            <select name="trainee_id" id="">
                <?php echo $trainees; ?>
            </select>
        </div><br>
        <div>
            <label for="">Trade Name</label><br>
            <select name="trade_id" id="">
                <?php echo $trades; ?>
            </select>
        </div>
        <div>
        <label for="">Module Name</label><br>
        <input type="text" name="mname" id="" required>
        </div>
        <div>
        <label for="">Formative Assessment</label><br>
        <input type="text" name="fassessment" id=""required max="50">
        </div>
        <div>
        <label for="">Sumative Assessment</label><br>
        <input type="text" name="sassessment" id=""required max="50">
        </div>
        <button name='insert'>Insert</button>
    </form>
    
</body>
</html>