<?php
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    include 'connection.php';   
    
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
            
    
    $sql = "Select * from users where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
   
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            $hash = password_hash($password,PASSWORD_DEFAULT);
                
                 $sql = "INSERT INTO `users` ( `username`,`password`, `date`) VALUES ('$username','$hash', current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }
    
   if($num>0) 
   {
      $exists="Username not available"; 
   } 
    
} 
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>signup page</title>
    <style>
        body{
           background-color: black;
            background-image: url("https://c1.wallpaperflare.com/preview/609/748/957/flower-plant-blossom-bloom.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        div{
            margin: 2em 5em 3em 5em;
            background-image: url("https://c1.wallpaperflare.com/preview/609/748/957/flower-plant-blossom-bloom.jpg");
           
           background-repeat: no-repeat;
            background-size: cover;

            padding: 2em 6em 2em 6em;
            color: rgb(255, 255, 255);
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
            background: rgb(0, 0, 0);
            color: inherit;
            border-radius: 15px;
            cursor: pointer;
        }
        a{
            color:rgb(255, 255, 255);
        }
       
    </style>
</head>
<body>
<?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
?>
    <div id="a">
    <h1>Signup</h1>
    </div>
    <div id="b">
        <form  action="cvediting.php" method="post">
            <label>Username : </label><input type="text" id="nm" name="username" placeholder="First Name" required>
            <br><br>
           
            
           
            <label>Password :  </label><input type="password" name="password" id="pwd" placeholder="Enter your password" required>
            <br><br>
            <label>Confirm password: </label><input type="password" name="cpassword" id="ppwd" placeholder="confirm password" required>
            <br><br>
            
         <input type="submit" id="submit" value="Register"><br>
            <p>Already have account?<a href="index.php">Log In</a></p>
            
        </form>
    </div>

    
</body>
</html>