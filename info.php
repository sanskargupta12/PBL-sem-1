<?php

include_once("connection.php");

if (isset($_POST['submit'])) {

    if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fmail=$_POST['fmail'];
$ftel=$_POST['ftel'];
$fweb=$_POST['fweb'];
$fjob=$_POST['fjob'];
$fcom=$_POST['fcom'];
$fsd=$_POST['fsd'];
$fed=$_POST['fed'];
$foth=$_POST['foth'];
$fquali=$_POST['fquali'];
$fcourse=$_POST['fcourse'];
$finsti=$_POST['finsti'];
$strt=$_POST['strt'];
$end=$_POST['end'];
$other=$_POST['other'];
$hobbies=$_POST['hobbies'];

$sql="INSERT INTO info (fname, lname, fmail, ftel, fweb, fjob, fcom, fsd, fed, foth, fquali, fcourse, finsti, strt, end, other, hobbies) VALUES ('".$fname."', '".$lname."', '".$fmail."', '".$ftel."', '".$fweb."','".$fjob."','".$fcom."','".$fsd."', '".$fed."', '".$foth."','".$fquali."','".$fcourse."','".$finsti."','".$strt."', '".$end."', '".$other."', '".$hobbies."')";

    if ($conn->query($sql) ===true) {
    echo"data saved successfully";
    } 
    else {
        echo "ERROR: $sql <br> $conn->error";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>black</title>
    <style>
        *{
            margin: 0px;
            padding:0px;
            box-sizing: border-box;
        }
        nav button{
        font-size: 20px;
        color: rgb(255, 255, 255);
        outline: none;
        border: none;
        background: transparent;
        cursor: pointer;
        font-family: sans-serif;
    
        }
        nav{
        display: flex;
        align-items: center;
  
        padding: 20px;
        padding-left: 10px;
        padding-right: 30px;
        padding-top: 20px;

    }
    body{
        color:black;
        /*background-image: url(""); 
         background-repeat:repeat;
        background-size:contain;*/
        background-color:black;
    }
    div{
        color:white;
        margin: 2em 5em 3em 5em;

        padding: 2em 6em 2em 6em;
        
      
       
        font-family: cursive;
        border-radius: 1.25rem;
    }
    #f{
        text-align:center;
    }
    form input{
        position: relative;
        width: 100%;
        background: rgb(118, 118, 118);
        padding: 10px 5px;
        border-radius: 8px;
        box-shadow: 15px;
        border-color: rgb(86, 86, 86);
    }
    form{
        width: 100%;
        margin-bottom: 1em;
        background-image: url("");
       background-color: black;
        background-size: cover;
       background-repeat: no-repeat;
    }
    #d{ 
        background-image : url("");
        background-size: cover;
        color: rgb(255, 255, 255);
        
        padding:35px;
        margin:35px;
        border-radius: 25px;
        text-align: center;
        font-size: x-large;
    }
    #btn{
            display: block;
            width: 100%;
            padding: 0.75rem;
            background: rgb(118, 118, 118);
            color: inherit;
            border-radius: 15px;
            cursor: pointer;
    }
    textarea{
        background: rgb(118, 118, 118);
        padding: 10px 5px;
        border-radius: 8px;
        box-shadow: 15px;
   
    }

     </style>
 </head>
 <body>

    
    <nav>
    <a href="cvediting.php"><img src="https://img.icons8.com/clouds/512/home-button.png" height="150" width="150" ></a>
    </nav> 
    
    <div id="d">
        <h1>INFORMATIONS</h1>
        <p>Fill the boxes and make a atractive resume.</p>
    </div>
    <div >
        <form  action="template.php" method="post">
  <label>First Name</label><input type="text" id="nm" name="fname" placeholder="Enter your first name"  ><br>
            <label>Last Name</label><input type="text" id="lm"  name="lname" placeholder="Enter your last name"  ><br>
            <label>Email</label><input type="email" id="mail"  name="fmail" placeholder="Enter your Email address" ><br>
            <label>Phone Number</label><input type="tel"  name="ftel" id="ph"><br>
            <label>Websites</label><input type="text" id="web"  name="fweb"  placeholder="Enter website name"><br>
            <label>Address</label></textarea><br>
            <hr>
       
        <h1>Work experience</h1>
        
            <label>Job title</label><input type="text" name="fjob" id="jbt"  placeholder=""><br>
            <label>Company name</label><input type="text" name="fcom" id="cm"   placeholder=""><br>
            <label>Start date</label><input type="text" name="fsd" id="sd"  ><br>
            <label>End date</label><input type="text" name="fed" id="ed"  ><br>
            <label>Other information</label><textarea name="foth" id="tt"  ></textarea>
            <p>Optional details such as job responsibilities,achievements etc.</p>
            <br>
            <br><hr>
       
        <h1>Qualifications</h1>
        <label>Qualifications</label><textarea name="fquali" id="tq"></textarea>
        <p>Certifications,accreditions etc. that you have received</p>
        <br><br><hr>
       
        <h1>Education</h1>
        <label>Course name</label><input type="text" name="fcourse" id="cn"><br>
        <label>Institution name</label><input type="text" name="finsti" id="in"><br>
        <label>Start date</label><input type="text" name="strt" ><br>
        <label>End date</label><input type="text" name="end" ><br>
        <label>Other information</label><textarea id="tt" name="other"></textarea>
        <p>Optional details such as course description, marks etc.</p>
        <br><br><hr>
            
    
        <h1>Interests</h1>
        <label>Hobbies</label><textarea name="hobbies" id="tq"></textarea>
        <br><br>
         <button class="center" name="submit" type="submit" onclick="showerr()" id="btn">SUBMIT</button>    
 </form>
           </div>

   <script>
        function showerr() {
            alert("Your Form is Submited");
        }
    </script>
 </body>
</html>