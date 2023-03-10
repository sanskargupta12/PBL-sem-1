<?php
include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        
    </script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing:border-box;
        }
        body{
           /* background-image: url("https://th.bing.com/th/id/R.37515f75ab5bfadcc23ef53c8863d0f3?rik=Pcr7PvFNQq7yhA&riu=http%3a%2f%2fimg.pconline.com.cn%2fimages%2fupload%2fupc%2ftx%2fphotoblog%2f1306%2f19%2fc0%2f22269362_22269362_1371608529234.jpg&ehk=rHeD6RC%2fJEqYvJlXq%2beuQiaxynNdOexUKBPVdRo2yLk%3d&risl=&pid=ImgRaw&r=0");
        */
        background-color: black;
        background-size: contain;
        font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial;
    }
    #d{ 
          background-color:black;

      
        color: rgb(255, 255, 255);
        
        border:3px solid rgb(0, 0, 0);
        padding:95px;
        margin:95px;
        border-radius: 25px;
        text-align: center;
        font-size: x-large;
           
    }
     a{
        display:flex;
        float:right;
        font-size: larger;
        text-align: left;
        color: rgb(255, 255, 255);
        font-display: swap;
        padding:10px;
        margin:10px;
        background-color:transparent;
    } 
     .full-page{
        height: 100%;
        width: 100%;
        background-image: linear-gradient(rgba(255, 1, 1, 0.4),rgba(11, 0, 0, 0.4),url(images/bg-2.jpg));
        background-position: center;
        background-size: cover;
        position: absolute;
        
    } 
    .navbar{
        display: flex;
        align-items: center;
        padding: 20px;
        padding-left: 50px;
        padding-right: 30px;
        padding-top: 50px;

    }
    nav{
        flex:1;
        text-align:right;
    }
    nav ul{
        display: inline-block;
        list-style: none;
    }
    nav ul li{ 
        display:inline-block;
        margin-right: 70px;
    }
    nav ul li a{
        text-decoration: none;
        font-size:20px;
        color: white;
        font-family: sans-serif;
    }
    nav ul li button{
        font-size: 20px;
        color: white;
        outline: none;
        border: none;
        background: transparent;
        cursor: pointer;
        font-family: sans-serif;
    }
  
    nav ul li a:hover{
        color: rgb(82, 82, 82);
    }
    a{
        text-decoration: none;
        color:rgb(255, 255, 255);
        font-size: 28px;
    }
    p{
            color: rgb(255, 255, 255);
            font-size: xx-large;
    }
    div a{
         
        border:1px solid rgb(255, 255, 255);
        padding:10px;
        margin:15px;
        border-radius: 17px;
        display: block;
        
    }
    h1{
        color: white;
      
    }
    hr{
        color: rgb(255, 255, 255);
    }
   
    
    </style>
</head>
<body data-spy="scroll" data-target=".navbar-collaose" data-offset="100" ><div>

    <div>
       
        <div>
        <img src="https://img.icons8.com/clouds/512/resume.png" height="160" width="180>
        </div>
         <div class="navbar">
            <nav>
                <ul class="menubar">
                     <li><a href="cvediting.php">HOME</a></li>
                     <li><a href="about.php">ABOUT US</a></li>
                   <li><a href="info.php">CREATE</a></li>
                      <li><a href="template.php">TEMPLATE</a></li>
                    <li> <a href="index.php" id="log">Login/Signup</a></li>
                  
                </ul>
            </nav>
        </div>
    </div>
   
   
    
       <ul>
        <img src ="https://th.bing.com/th/id/OIP.3rfiiOya_rxB2unEmisrsQHaHa?w=195&h=195&c=7&r=0&o=5&dpr=1.5&pid=1.7" id = "img1">
        <img src = "https://th.bing.com/th/id/OIP.7TlPmX5kBnwJcPgehveueAHaJS?w=195&h=244&c=7&r=0&o=5&dpr=1.5&pid=1.7" id = "img2">
        <img src = "https://th.bing.com/th/id/OIP.lD7tbn9mIkxb_eBZLvFGagHaKY?w=195&h=273&c=7&r=0&o=5&dpr=1.5&pid=1.7" id="img3">
        <img src="https://th.bing.com/th/id/OIP.lnR8NBoYS68aIacSZ8nikQAAAA?pid=ImgDet&w=425&h=550&rs=1" id="img4" height="450" width="300">
        </ul>
<hr>
       <div id="d">
        <hr>
       <h1>!.....How it works.....!</h1>  
       <br>
       <h1><b>1</b></h1>
        <p><b>Fill in the Blanks</b></p><br>
       <p>Start by filling in the relevant information for your CV.</p>        
        <hr>
        <h1><b>2</b></h1>
       
         <p><b>Pick a template</b></p><br>
        <p>Choose a template and customise it on your own identity.</p><hr>
        <h1><b>3</b></h1>
       
        <p><b>Download your CV</b></p><br>
        <p>Easily download your CV and edit afterwards.</p>
        <img src="https://i.pinimg.com/originals/dd/de/9c/ddde9c606bb477b2b3a3e38db332f599.jpg" height="450" width="650" >
    </div>
    
</body>
</html>