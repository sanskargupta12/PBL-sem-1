<?php
include_once('connection.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Page - FantacyDesigns</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
    
}

body{
  /* background-image: url("https://purplerockscissors.com/images/careers/careers-illustration.png");*/
  background-image: url("https://purplerockscissors.com/_next/static/media/office.5d66d6c1.jpg"); 
  background-size: cover; 
    min-height: 100vh;
    display: flex;
    /*align-items: center;
    justify-content: center;*/
    font-weight: bold;
    color:white;
   
}
.about-section{
  background-color: transparent;
 background-size: cover;
  background-color: rgb(102,102,102);
  color: white;
   border:2px solid black;
   padding:35px;
        margin:35px;
      border-radius: 25px;
      
         text-align:center;
         font-size:x-large;
}

 #d{ 
        background-image : url("");
         background-color: rgb(92,92,92);
        color: rgb(255, 255, 255);
        
        padding:35px;
        margin:35px;
        border-radius: 25px;
        text-align: center;
        font-size: x-large;
        padding:35px;
        margin:35px;
    }
 

</style>
</head>
<body>
<div id="d">
<h1>About Us</h1>
</div>
<div class="about-section">
        <div class="inner-container">
            
            <p class="text">By using our website users can easily build their resume .<br>
Our website starts with login page.<br>
If you dont have login page then you can signup from signup page.<br>
If you cant remember password then you can create new password.<br>
After login you can take guide from home page.<br>
Then you can create cv from  create page.</p>
            <div class="skills">
                <span class="active">Web Designer</span><br><hr>
                <span>Yeshtham Shah</span><p>____</p> <span>Backend</span><br><hr>
               <span>Sanskar Gupta</span><p>____</p><span>Frontend</span>
            </div>
        </div>
    </div>
</body>
</html>