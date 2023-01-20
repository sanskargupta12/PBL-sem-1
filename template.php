<?php
include_once('connection.php');
   
  
    $sql = "select * from info";

    $result = ($con->query($sql));
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
       $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alignment</title>
    <style>
        body{
            background-color: rgb(0,0,0);
            color:white;
        }
        .container{
            background-color: rgb(109, 197, 232);
            width:900px;
            border:2x solid rgb(168, 167, 167);
            margin: auto;
            color:black; 
              width: fit-content;
            
        }
        .item{
            border:2px solid rgb(0, 0, 0);
            margin:20px;
            padding: 25px;
            background: rgb(200, 193, 198);

        }
        #a{
            float: left;
            width: 25%;
            background-color: rgb(255, 255, 255);
             color:black;

        }
        #b{
            float:none;
            width: auto;
             color:black;

        }
        #c{
            float:right;
            width:fit-content;
            background-color: skyblue;
            width:800px;
            
        }
        h1{
            margin:auto;
            width: fit-content;
              
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Template</h1>

        <div id="a" class="item">
          <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
           <h1>Contact</h1><hr>
           
           <h3>NAME:</h3>
           <h2><?php echo $rows['fname']; ?><?php echo $rows['lname']; ?></h2>           
           <h3>Phone:</h3>
           <p><?php echo $rows['ftel']; ?></p>
           <h3>Email:</h3>
           <p><?php echo $rows['fmail']; ?></p>
 
           <h3>website:</h3>
           <p><?php echo $rows['fweb']; ?></p>

           <h1>Hobbies</h1>
             <?php echo $rows['hobbies']; ?>
           <ul>
            </ul>
           

           <h1>Skills</h1><hr>
           <ul>
               <li>Project Management</li>
               <li>Creative design</li>
               <li>Innovative</li>
               <li>Service-focused</li>
           </ul>
          
           
        </div>
        <div id="b" class="item">
             <h1>Work Expierience</h1><hr>
             <h2>  <?php echo $rows['fjob']; ?></h2>
             <h2>  <?php echo $rows['fcom']; ?></h2>                 
             <p><?php echo $rows['fsd']; ?></p>
             <p><?php echo $rows['fed']; ?></p>
  
            <ul>
            <?php echo $rows['foth']; ?>
            </ul>
            <h1>Qualifications:</h1>
            <p><?php echo $rows['fquali']; ?></p>
  

            <h1>Education</h1><hr>
            <p><?php echo $rows['fcourse']; ?> <b><?php echo $rows['finsti']; ?></b></p>
            <p><?php echo $rows['strt']; ?><?php echo $rows['end']; ?></p>
  
           <h1>Certifications</h1><hr>
           <p><?php echo $rows['other']; ?></p>
  
           <p>PHP Framework(certificate):<b>Zend,Codeigner,Sympfony.</b></p>
           <p>Programming Languages:<b>JavaSript,HTML,PHP OOP,CSS,SQL,MySQL.</b></p><br>

      </div>
      
    </div>
 <?php } ?> 
</body>
</html>
<?php   
    mysqli_close($con);
?>