<?php
$mail = $_GET['mail'];
$pwd = $_GET['pwd'];
include_once('connection.php');
$sql="INSERT INTO logintable (mail,pwd) VALUES ('".$mail."','".$pwd."')";
if($con->query($sql)===TRUE){
echo  '<script type="JavaScript">';
echo  'alert("Data Saved Successful")';
echo  '</script>';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>registration page</title>
    <style>
        body{
            background-color: black;
            background-repeat: no-repeat;
            background-size: cover;

        }
        div{
            margin: 2em 5em 3em 5em;
            background-image: url("https://c4.wallpaperflare.com/wallpaper/536/193/299/flowers-black-simple-background-simple-wallpaper-preview.jpg");
            background-repeat: no-repeat;
            background-size: cover;

            padding: 2em 6em 2em 6em;
            color: #ffff;
            font-family: cursive;
            border-radius: 1.25rem;
        }
        #a{
            text-align:center;
        }
        #b{
            display: block;

  
        }
        form{
            width: 100%;
            margin-bottom: 1em;
            text-align: center;
        }
        form input{
        position: relative;
        width: 100%;
        background: white;
        padding: 10px 5px;
        border-radius: 8px;
        box-shadow: 15px;
        border-color: rgb(86, 86, 86);
        }

        #submit{
            display: block;
            width: 100%;
            padding: 0.75rem;
            background: rgb(2,0,36);
            color: inherit;
            border-radius: 15px;
            cursor: pointer;
        }
        a{
            color:white;
        }
        #sign{
            display: block; 
            width: 100%;
            padding: 0.75rem;
            background: rgb(2, 0, 36);
            color: inherit;
            border-radius: 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="a">
    <h1>Login Page</h1>
    <p>Enter the required data in the boxes.</p>
    </div>
    <div id="b">
            <form  action="cvediting.php"  method="post">
            
            <label>Email :  </label><input type="email" id="mal" name="mail" placeholder="Enter your email" required>
            <br>
            <br>
            <label>Password :  </label><input type="password" name="pwd" id="pd" placeholder="Enter your password" required>
            <a href="forpass.php"><p>Forget Password....?</p></a>
            <br>
            <br>
        <input type="submit" id="submit" name="submit"  value="Login"><br>
            <p>OR</p>
            <a href="signup.php" > <input type="button" id="sign" value="Signup"></a>
            
        </form>
    </div>
     <script>  
    onsubmit="return validation()"
        function validation()  
        {  
            var id=document.f1.mail.value;  
            var ps=document.f1.pwd.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
    </script>  

    
</body>
</html>
