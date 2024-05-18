<?php
include_once "./auth/config.php";
    $conn=mysqli_connect('localhost','root','','xwisdom_tvet');
    if (!$conn==true) {
        echo 'database not connected';
    }
    
    $body='';
    $decision='';
    $select=mysqli_query($conn,"SELECT * FROM marks inner join trainees on marks.tid = trainees.tid 
                                                    inner join trade on marks.tid = trade.tid");
    $num_rows=mysqli_num_rows($select);
    $body='';
    if ($num_rows >0) {
        $a=0;
        while($fetch=mysqli_fetch_assoc($select)){
          if ($select==true) {
              if ($fetch['total_marks']>=70) {
                 $decision='competent';
              }
              else{
                  $decision='not yet competent';
              }
        $a++;
        $body .='<tr>
        <td>'.$a.'</td>
        <td>'.$fetch['firstname'].'</td>
        <td>'.$fetch['lastname'].'</td>
        <td>'.$fetch['gender'].'</td>
        <td>'.$fetch['tname'].'</td>
        <td>'.$fetch['modulename'].'</td>
        <td>'.$fetch['fomative_assessment'].'</td>
        <td>'.$fetch['asumative_assessment'].'</td>
        <td>'.$fetch['total_marks'].'</td>
        <td>'.$decision.'</td>
        
   </tr>
        ';
      }  
    

    }
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
         /* display: flex; */
    
         border-collapse: collapse;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%,-50%);
         width: 90%;
       

        } 
    
       th,tbody,tr,td,thead{
            border-collapse: collapse;
            padding: 10px;

        }
        table a{
            color: #fff;
            text-decoration: none;
        }
        table,th, td{
           border: 1px solid #000;
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
    <title>Document</title>
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
<h1>report of marks</h1>
<button class="bten"><a href="trade.php">back</a></button>
<table border="2">
        <thead>
            <tr>
              
                <th> number</th>
                <th>firstname</th>
                <th>lastaname</th>
                <th>gender</th>
                <th>Trade name</th>
                <th>module name</th>
                <th>formative assessment</th>
                <th>asumative assessment</th>
                <th>total marks</th>
                <th>decision</th>

                
                
            </tr>
        </thead>
        <tbody>

            <?php 
                echo $body; 
            ?>
            <tr>
                <td>Total number</td>
                <td colspan="8">
                    <?php echo $num_rows; ?> 
                </td>
            </tr>
</body>
</html>
