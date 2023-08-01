
<?php


error_reporting(0);
include 'connection.php';
if(isset($_GET['Date']) && $_GET['mess']=='Delete')
{
 
  $dd=$_GET['Date'];
  $q="delete from ball where Date='$dd'";
          $sql=mysqli_query($conn,$q);
          if(mysqli_affected_rows($conn)==1)
          {
            
            
            echo "<script>alert('Record deleted ')</script>";
            
            
            
            
          }
              else
              {
                echo "<script>alert('Record not deleted ')</script>";

              }

}



?>





<?php
 

 if(isset($_GET['add']))
 {
    
                                $d=$_GET['date'];
                                $s=$_GET['size'];
                                $w=$_GET['weight'];
             if(!empty($d) && !empty($s) && !empty($w))
             {                  
                                $conn=mysqli_connect("localhost","root","");
                                        if($conn)
                                        {
                                        
                                                $db=mysqli_select_db($conn,"gold");
                                                    if($db)
                                                    {
                                                      if($s==8)
                                                      {
                                                       $value=($w*100)/100;
                                                      }
                                                      else if($s==9)
                                                      {
                                                        $value=($w*200)/100;
                                                      }
                                                     else if($s==5)
                                                      {
                                                        $value=($w*50)/100;
                                                      }
                                                      else if($s=7)
                                                      {
                                                        $value=($w*70)/100;
                                                      }
                                                    
                                                 
                                                      $q="insert into ball values('$d','$s','$w','$value')";
                                                      $sql=mysqli_query($conn,$q);
                                                              if($sql)
                                                              {
                                                                
                                                                
                                                                
                                                              
                                                                
                                                          
                                                                
                                                                
                                                                
                                                                
                                                              }
                                                                  else
                                                                  {
                                                                    echo "<script>alert('Some Error Occured, Please try again...')</script>";

                                                                  }
                                                    
                                                    }
                                        }
                                      }
                                      else{
                                        echo "<script>alert('Please fill all input field to insert new record')</script>";
                                      }
                                  
 }
 else if(isset($_GET['update']) )
 {
 
                                 $ddd=$_GET['udate'];
                                 $sdd=$_GET['usize'];
                                 $wdd=$_GET['uweight'];
                                 
                                 $conn=mysqli_connect("localhost","root","");
                                         if($conn)
                                         {
                                         
                                                 $db=mysqli_select_db($conn,"gold");
                                                     if($db)
                                                     {
                                                     
                                                     
                                                        if($sdd==8)
                                                        {
                                                         $value=($wdd*100)/100;
                                                        }
                                                        else if($sdd==9)
                                                        {
                                                          $value=($wdd*200)/100;
                                                        }
                                                       else if($sdd==5)
                                                        {
                                                          $value=($wdd*50)/100;
                                                        }
                                                        else if($sdd==7)
                                                        {
                                                          $value=($wdd*75)/100;
                                                        }
                                                       $q="update ball SET Date='$ddd',size='$sdd',weight='$wdd' ,value='$value' where Date='$ddd'";
                                                       $sql=mysqli_query($conn,$q);
                                                               if($sql)
                                                               {
                                                                
                                                                 
                                                                echo "<script>alert('Update successfull')</script>";
                                                                 
                                                                 
                                                                 
                                                                 
                                                               }
                                                                   else
                                                                   {
                                                                     echo "<script>alert('Update unsuccessfull');
                                                                
                                                                     </script>";
 
                                                                   }
                                                     
                                                     }
                                         }
         
                                              
  
 }
 
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

body{
    background-color:#34ebc3;
}

th,td{

  
  padding:10px;
    height:100%;
    width:500px;
   
}


tr{
  background:white;
  
}
th{

    background-color:#eb3468;
   color:white;
    font-size:20px;
    text-shadow:2px 2px 3px black;
}

table.main{
    position: relative;
    left:200px;
    
    color:black;
    box-shadow: 4px 4px 5px black;
height:100px;
width:900px;
background-color:thistle;

/*whole table*/
   
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */

  border-radius:25px;
  box-shadow:2px 2px 3px black;
}
.button:hover{
  transform:scale(1.1);
}
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: black;
  position:sticky;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

}


</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="akshay2.php">Home</a>
  <a href="#about" style="background:white">Previous Records</a>
 
  <div class="search-container">
    <form action="" method="get">
      <input type="text" placeholder="Search [ Ex. 1-01-2021 ] " name="searchDate">
      <button type="submit" name="search_d">Submit</button>
    </form>
  </div>
  <div class="search-container">
    <form action="" method="get">
      <input type="text" placeholder="Search [ Ex. Aug-2021 ] " name="searchMonth">
      <button type="submit" name="search_m">Submit</button>
    </form>
  </div>
</div>

  <h1 style="text-shadow:5px 2px 4px white;color:#050404;text-align:center;font-family: 'Secular One', sans-serif;font-size:50px">Work Record</h1>
  <table class="main">
  <tr>
      <th>Date</th>
      <th>Size</th>
      <th>Weight(g)</th>
      <th>Edit</th>
      <th>Delete</th>
      <th>Value</th>
     
      

    
    </tr>
   
     <?php
 
 $conn=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($conn,"gold");
    if(isset($_GET['search_d']))
    {
          $udatee=strtotime($_GET['searchDate']);
          $udate=date('y-m-d',$udatee);
         
      $sel=mysqli_query($conn,"select *from ball where date='$udate'");
      $c=mysqli_num_rows($sel);
     
      if($c>0)
      {
       $row=mysqli_fetch_row($sel);
      
          echo "<tr>";
          echo "<td>".$row[0]."</td>";
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[2]."</td>";
          echo '<td style="text-align:center"><a href="akshay2.php?Date='.$row[0].'&mess=Edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="padding:1px;font-size:20px"></i></a></td>';
          echo '<td style="text-align:center"><a href="akshay2.php?Date='.$row[0].'&mess=Delete"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px"></i>
          </a></td>';
          echo "<td style='color:black;text-shadow:3px 2px 10px yellow;font-weight:bold'>₨.".$row[3]."</td>";
echo "</tr>";
      } 
     
    else{
      echo '
      <tr>
      <td colspan="6" style="text-align:center;font-weight:bold;">NO ROW FOUND </td>
      
      </tr>
      
      ';
    }
    

    
    

    }
    else if(isset($_GET['search_m']))
    {
      $m=strtotime($_GET['searchMonth']);
      $finaldate=date('M-Y',$m);
   
      $sel=mysqli_query($conn,"select *from ball");
      $c=mysqli_num_rows($sel);
    
       while($row=mysqli_fetch_row($sel))
       {
         $d=strtotime($row[0]);
         $d=date('M-Y',$d);
      
         if($d==$finaldate)
         {
          echo "<tr>";
          echo "<td>".$row[0]."</td>";
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[2]."</td>";
          echo '<td style="text-align:center"><a href="akshay2.php?Date='.$row[0].'&mess=Edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="padding:1px;font-size:20px"></i></a></td>';
          echo '<td style="text-align:center"><a href="akshay2.php?Date='.$row[0].'&mess=Delete"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px"></i>
          </a></td>';
          echo "<td style='color:black;text-shadow:3px 2px 10px yellow;font-weight:bold'>₨.$row[3]</td>";
echo "</tr>";
$finalTotal=$finalTotal+$row[3];
         }

       }
    }
    else{
  
              $sel=mysqli_query($conn,"select *from ball");
              $c=mysqli_num_rows($sel);
              if($c>0)
              {
                while($row=mysqli_fetch_row($sel))
                {
                 
                          if($row[0]==$_GET['Date'])
                          {
                                    echo '
                                                                                            <tr>
                                                          <form method="get" > 
                                                      <td ><input type="date" name="udate" style="padding:6px;border:1px solid black;" value='.$row[0].'></td>
                                                      <td style="text-align:center"><select name="usize" style="width:60px;padding:6px;border:1px solid black;" value='.$row[1].'>
                                                      <option>8</option>
                                                      <option>9</option>
                                                      <option>5</option>
                                                      <option>7</option>
                                                      </select></td>
                                                      <td style="text-align:center"><input name="uweight" type="text" style="padding:6px;border:1px solid black" value='.$row[2].'></td>
                                                      <td colspan="2" style="text-align:center"><input type="submit" name="update" value="Update" class="button"></td>
                                                      <td style="">Rs.'.$row[3].'</td>
                                                      </form>
                                                        </tr>
                                    
                                    
                                    
                                    ';
                          }  
                  
                  
                  
                  else{
                                echo "<tr>";
                                echo "<td>".$row[0]."</td>";
                                echo "<td>".$row[1]."</td>";
                                echo "<td>".$row[2]."</td>";
                                echo '<td style="text-align:center"><a href="akshay2.php?Date='.$row[0].'&mess=Edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="padding:1px;font-size:20px"></i></a></td>';
                                echo '<td style="text-align:center"><a href="akshay2.php?Date='.$row[0].'&mess=Delete"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px"></i>
                                </a></td>';
                                echo "<td style='color:black;text-shadow:3px 2px 10px yellow;font-weight:bold'>₨.$row[3]</td>";
                      echo "</tr>";
                      $finalTotal=$finalTotal+$row[3];
                  }
                }
              }
            
            



    }
     
     ?>
      
 <tr>
    <form method="get" action="" >
<td><input type="date" name="date" style="padding:6px;border:1px solid black;"></td>
<td style="text-align:center"><select name="size" style="width:60px;padding:6px;border:1px solid black;">
<option>8</option>
<option>9</option>
<option>5</option>
<option>7</option>
</select></td>
<td style="text-align:center"><input type="text" name="weight" style="padding:6px;border:1px solid black"></td>

<td colspan="2" style="text-align:center"><input type="submit" class="button" name="add" value="ADD"  ></td>
<td ><span style="font-weight:bold">Total:- <span><?php
echo "<span style='color:blue;font-weight:bold;font-size:30px'> ".$finalTotal."<span>";
?></td>
</form>

</tr>




  </table>







</body>
</html>
