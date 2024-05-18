<?php
    include_once "./auth/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
*{
    margin: 0;
    padding: 0;
    text-transform: capitalize;
    font-family: Verdana, Tahoma, sans-serif;
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
    color: white;
    font-weight: 900;
    font-size: larger;
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
    border-radius: 10px;
}
.menu ul li{
    background-color: white;
    list-style: none;
    

}
.menu .sub1{
    display: none;
    background-color: white;
    
}

.menu ul li:hover .sub1{
    display: block;
    position: absolute;
    margin-top: 17px;
    margin-left: -35px;
    width: 100px;
    text-align: center;
    height: 95px;
    margin-top: 2px;
}
.menu ul li:hover .sub1 ul{
    display: block;
    margin-top: 20px;
    
}
:active,.menu ul li:hover .sub1 li{
    border-radius: 3px;
 
    
}
:active,.menu ul li:hover .sub1{
    color: white;
}

.container{
   
    display: flex;
    align-items: center;
    justify-content: space-around;
    height: 500px;
    color: #0c0c0c;
    font-weight: 900;
    width: 100%;
}
.container h1{
    color: black;
}
.text-container{
    font-size: 15px;
}
.text-container span{
    font-style: italic;
    color: rgb(59, 97, 223);
}
.table-container{
    height: 500px;
    width: 100%;
    
    
}

table{
width: 400px;
height: 400px;
border-collapse: collapse;
margin-top: 20px;
margin-left: 90px;

}
table tr td{
    text-align: center;
    color: rgb(1, 1, 1);
    font-size: 15px;
    border: 1px solid #0c0c0c;
}
table tr th{
    border: 1px solid #0c0c0c;
    text-align: center;
    color: black;

    font-size: 27px;
}
footer{
    background-color:dodgerblue;
    
    height: 190px;
    padding: 20px;
    
    
}
.footer-content{
    /* display: black;
    justify-content: space-around;
    align-items: center; */
    display: block;
    align-items: center;
    text-align: center;
    height: 70px;
    color: white ;

}
p{
    color: gainsboro;
    text-align: center;
}
ul li{
    list-style-type: none;
} 
ul li a{
    list-style: none;
    color: #0c0c0c;
    text-decoration: none;
    
}
.btn{
    margin-top: -10px;
}



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <div class="menu"><ul> 
        <li><img src="./image/menu.png" alt="">
        <div class="sub1">
        <ul>
            <li><a href="http://help.com">help</a></li><br>
            <li> <a href='./Auth/logout.php'>Logout</a></li>
        </ul>
        </div>
    </li>
    </ul>
    </div>
</div>
<div class="container">
    <div class="text-container">
    <h1>welcome in <span>Xwisdom</span>_TVET school</h1><br>
TVET institutions focus on providing practical skills and knowledge related</br>
 to specific trades, professions, or technical fields.These institutions offer
<br>training programs that prepare students for careers in variousindustries <br>
such as  engineering,  automotive, construction,  hospitality, healthcare,
</br> information  technology, and more.TVET schools typically offer a variety <br>
 of programs and courses tailored to meet the demands of the job market. <br> 
These programs often includea mix of theoretical instructionand hands-on <br>
 training in workshops or laboratories. The curriculum may cover subjects <br>
 like technical skills, industry-specific knowledge, safety regulations, and <br>
practical experience through internships or apprenticeships.
    </div>
    <div class="table_container">
        <table border="1">
            <tr>
                <th>members</th>
                <th>N <sup>0</sup></th>
            </tr>
           
            <tr>
                <td>head of muster</td>
                <td>1</td>
            </tr>
            <tr>
                <td>head of disprine</td>
                <td>1</td>
            </tr>
            <tr>
                <td>head of studies</td>
                <td>1</td>
            </tr>
            <tr>
            <tr>
                <td>teachers</td>
                <td>23</td>
            </tr>
            <tr>
                <td>students</td>
                <td>300</td>
            </tr>
                <td>total:</td>
                <td>328</td>
            </tr>
           
            
        </table>
    </div>
</div>
   <div class="footer">

   </div><br>
   <footer>
    <div class="footer-content">
        <div class="footer-contact">
            <h2>Contact Us</h2>
            Email: Xwisdom_TVETgmail.com <br>
            Phone: 079-842-7825
        </div><br>
        <div class="footer-social">
            <h2>Follow Us</h2>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <br>
        <div class="btn">
    <p>&copy; 2024 Xwisdom_TVET SCHOOL. All rights reserved.</p>
    </div>
        </div>
        
    
        
   
</footer>
</body>
</html>