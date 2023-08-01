<?php
$mess="";
if(isset($_POST['submit']))
{
    $name=$_POST['id'];
    $pass=$_POST['password'];
    if($name=="7003" && $pass=="12345")
    {
        header("location:anita_option_work.html");
    }
    else
    {
     $mess="*Failed to Login";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Ball Work Management System</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

  <style>
 


  </style>
  
  </head>
<body style="  background-image: url('images/gold.jpg')">
    <h1 class="title">  Gold Ball Work Management System  </h1>
    <div class="login">
      <h1>Enter into system</h1>
     
       <form method="post">
       
     <input class="enter" type="text" name="id" placeholder="ID">
     <br>
    
     <input type="password" class="enter" name="password" placeholder="Password">
    <br>
    <br>
    <?php
    echo "<span style='color:red;margin-left:30px;'>$mess</span>";
   
    ?>
   <br>
<input class="button" type="submit" name="submit" value="Enter">
       </form>
    </div>
   </body>
</html>
