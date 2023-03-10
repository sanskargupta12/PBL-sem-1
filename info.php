<?php
include_once("connection.php");


 if (isset($_POST['submit'])) {

    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fmail = $_POST['fmail'];
    $ftel = $_POST['ftel'];
    $fweb = $_POST['fweb'];
    $fjob = $_POST['fjob'];
    $fcom = $_POST['fcom'];
    $fsd = $_POST['fsd'];
    $fed = $_POST['fed'];
    $foth = $_POST['foth'];
    $fquali = $_POST['fquali'];
    $fcourse = $_POST['fcourse'];
    $finsti = $_POST['finsti'];
    $strt = $_POST['strt'];
    $end = $_POST['end'];
    $other = $_POST['other'];
    $hobbies = $_POST['hobbies'];
    $sql = "INSERT INTO info (fname, lname, fmail, ftel, fweb, fjob, fcom, fsd, fed, foth, fquali, fcourse, finsti, strt, 'end', other, hobbies) VALUES ('$fname', '$lname', '$fmail', '$ftel', '$fweb', '$fjob', '$fcom', '$fsd', '$fed', '$foth', '$fquali', '$fcourse', '$finsti', '$strt', '$end', '$other', '$hobbies')";
    if ($con->query($sql) === true) {
        echo "Data saved successfully";
    } else {
        echo "ERROR: " . $sql . "<br>" .  mysqli_error($conn);
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
        padding-top: 5px;

    }
    body{
        background-repeat:repeat;
        background-size:contain;
		background-color: black;
    }
    div{
        margin: 2em 5em 3em 5em;

        padding: 2em 6em 2em 6em;
        
      
        color: #ffff;
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
          background-color: black;
        background-size: cover;
       background-repeat: no-repeat;
    }
    #d{ 
        background-image : url("");
        background-size: cover;
        color: rgb(255, 255, 255);
        
        padding:5px;
        margin:5px;
        border-radius: 15px;
        text-align: center;
        font-size: x-large;
    }
    #btn{
            display: block;
            width: 100%;
            padding: 0.75rem;
            background: rgb(118, 118, 118);
            color: black;
            border-radius: 15px;
            cursor: pointer;
    }
    textarea{
        background: rgb(118, 118, 118);
        padding: 10px 5px;
        border-radius: 8px;
        box-shadow: 15px;
   
    }
    a{
       float: right;
        margin: 50px;
        padding: 20px;
    }

     </style>
 </head>
 <body>
    
    <nav>
    <a href="cvediting.php"><img src="https://img.icons8.com/clouds/2x/home-button.png" alt="" height="150" width="150"></a>
    </nav> 
    
    <div id="d">
        <h1>INFORMATIONS</h1>
        <p>Fill the boxes and make a atractive resume.</p>
    </div>
    <div >
        <form action="template1.php" method="post" id="frm">
            <label>First Name</label><input type="text" id="nm" name="fname" placeholder="Enter your first name"required><br>
            <label>Last Name</label><input type="text" id="lm"  name="lname" placeholder="Enter your last name" required><br>
            <label>Email</label><input type="email" id="mail"  name="fmail" placeholder="Enter your Email address" required><br>
            <label>Phone Number</label><input type="tel"  name="ftel" id="ph"required><br>
            <label>Websites</label><input type="url" id="web"  name="fweb" placeholder="Enter website name"><br>
            
           <hr>
        </form>
        <h1>Work experience</h1>
        <form>
            <label>Job title</label><input type="text" name="fjob" id="jbt" placeholder=""><br>
            <label>Company name</label><input type="text" name="fcom" id="cm" placeholder=""><br>
            <label>Start date</label><input type="text" name="fsd" id="sd" placeholder=""><br>
            <label>End date</label><input type="text" name="fed" id="ed" placeholder=""><br>
            <label>Other information</label><textarea name="foth" id="tt"></textarea>
            <p>Optional details such as job responsibilities,achievements etc.</p>
            <br>
            <br><hr>
        </form>
        <form>
        <h1>Qualifications</h1>0
        <label>Qualifications</label><textarea name="fquali" id="tq"></textarea>
        <p>Certifications,accreditions etc. that you have received</p>
        <br></form><br><hr>
        <form>
        <h1>Education</h1>
        <label>Course name</label><input type="text" name="fcourse" id="cn"><br>
        <label>Institution name</label><input type="text" name="finsti" id="in"><br>
        <label>Start date</label><input type="text" name="strt" ><br>
        <label>End date</label><input type="text" name="end" ><br>
        <label>Other information</label><textarea id="tt" name="other"></textarea>
        <p>Optional details such as course description, marks etc.</p>
        <br><br><hr>
            
      </form>
      <form>
        <h1>Interests</h1>
        <label>Hobbies</label><textarea name="hobbies" id="tq"></textarea>
        <br><br>
       <!-- <a href="tem.php">   -->
        <input type="button" value="SUBMIT" name = "submit" id="btn" onclick="disp()">
      <!-- </a>  -->
    </form>
    </div>
    <script>
    function disp(){
        alert("Your Form is Submited");
    }
    </script>

 </body>
</html>