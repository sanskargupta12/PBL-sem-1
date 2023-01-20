<?php
$fpwd = $_GET['fpwd'];
$chpwd = $_GET['chpwd'];
include_once('connection.php');
$sql="INSERT INTO forgetpass (fpwd,chpwd) VALUES ('".$fpwd."','".$chpwd."')";
if($con->query($sql)===TRUE){
echo  '<script type="JavaScript">';
echo  'alert("Data Saved Successful")';
echo  '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>forget password</title>
   
    <style> 
    body{
        background-image: url("https://c4.wallpaperflare.com/wallpaper/907/783/607/sony-xperia-z-stock-blue-flower-wallpaper-preview.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    div{
        margin: 2em 5em 3em 5em;

        padding: 2em 6em 2em 6em;
        
        background-image:url("https://c4.wallpaperflare.com/wallpaper/907/783/607/sony-xperia-z-stock-blue-flower-wallpaper-preview.jpg");
        
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
        background: white;
        padding: 10px 5px;
        border-radius: 8px;
        box-shadow: 15px;
        border-color: rgb(86, 86, 86);
    }
    form{
        width: 100%; 
        margin-bottom: 1em;
        background-image:url("https://c4.wallpaperflare.com/wallpaper/907/783/607/sony-xperia-z-stock-blue-flower-wallpaper-preview.jpg");
    }

    #a{
            text-align:center;
        }

    #b{
            display: block;
    }
    
    #btw{
            display: block;
            width: 100%;
            padding: 0.75rem;
            background: rgb(65,129,181);
            color: inherit;
            border-radius: 15px;
            cursor: pointer;
        }
    a{
        color: white;
        }
    </style>
</head>
<body>
    <div id="a">
    <h1>Password</h1>
    <h5>Create new password</h5>
    </div>
    <div id="b">
     <form action="cvediting.php" method="post" >
        <label>New Password -</label>
        <input type="password" id="pwd" name="fpwd" placeholder="Enter password" required><br><br>
        <label>Confirm Password -</label>
        <input type="password" id="cpwd" name="chpwd" placeholder="Confirm password" required><br><br>
        <input type="submit" id="btw" value="Confirm" onclick="miid()">
     </form>
    </div>
<script>

        function miid(){
            var pwd=document.getElementById("fpwd").value;
            var cpwd=document.getElementById("chpwd").value;
            if(pwd==cpwd){
                document.write("Password Matchedd");
            }
            else{
                document.write("Password Not Matched.·´¯`(>▂<)´¯`·. ")
            }
            var n=document.getElementById("pwd").value.length;
            if(n<6){
                alert("Re-enter password");
            }
        }
 </script>

</body>
</html>
 