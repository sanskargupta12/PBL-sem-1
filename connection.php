<?php      
    $host = "localhost";  
    $user = "root";  
    $password ="";  
    $db_name = "reglog";  
      
    $con =new mysqli($host, $user, $password, $db_name);  
    if($con){echo "success";}  
?>  