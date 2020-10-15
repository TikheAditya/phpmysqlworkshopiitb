  
<?php
session_start();

error_reporting(0);

if((isset($_POST['submit']))){
  $_SESSION['uname'] = $_POST["uname"];
  print('<br><br>
   <div style="text-align:center;"><form action="update.php" method="post">
   <input type="text" name="uname" placeholder="Student Username" required><br><br>
   <lable>PHP Marks:</label>
   <input type = "number" min="0" max="100"  name="phpm" required><br><br>
   <label>MSQL Marks: </label>
   <input type = "number" min="0" max="100"  name="mysqlm" required><br><br>
   <label>HTML Marks: </label>
   <input type = "number" min="0" max="100"  name="htmlm" requied><br><br><br>
   <input type= "submit" name="update" value="Update">
   
   </form></div>');

   print ('<div style="text-align:center;">
   <form action="admin.php" method="POST">
   <input type="submit" name="submit" value="Home">
   </form></div>');
 
     print ('<div style="text-align:center;">
         <form action="alogout.php" method="POST">
         <input type="submit" name="submit" value="Logout">
         </form></div>');
 
}
elseif (isset($_POST["update"]))
{   
  
  $_SESSION['uname'] = $_POST["uname"];

  $uname = @$_POST["uname"];  

$connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
mysqli_select_db($connect,"marksheet") or die(mysqli_error());

  if ($connect){
  $select = "SELECT * FROM student WHERE  uname='$uname'";
  $extract = mysqli_query($connect,$select);
  
  
  while ($row = mysqli_fetch_assoc($extract)) 
  {
      $suname = $row["uname"];
  }
  
  if ($uname != $suname){
      
      echo '<p style="text-align:center;">Invalid Username!!</p><br><br>';
      mysqli_close($connect);   
        exit(0);  
      
                        }  
     
   else{                     

    $phpm = @$_POST["phpm"];
    
    $mysqlm = @$_POST["mysqlm"];
    $htmlm = @$_POST["htmlm"];
    $tmo = $phpm + $mysqlm + $htmlm;
    $tm = 300;
    $percent = ($tmo / $tm) * 100;


    $update = "UPDATE student 
               SET phpm='$phpm',mysqlm='$mysqlm',htmlm='$htmlm',tmo='$tmo',tm='$tm',percentage='$percent'
               WHERE uname='$uname'";   
                                
   
    $write = mysqli_query($connect,$update) or die("Invalid Student Name"); 
    

    echo '<p style="text-align:center;">Record Updated Successfully</p>';
    print ('<div style="text-align:center;">
    <form action="admin.php" method="POST">
    <input type="submit" name="submit" value="Home">
    </form></div>');
    mysqli_close($connect);
        }
     
            }
}


else
  { 
    echo "<script>alert('Invalid Username Or Password')</script>";
    echo "<script>location.href='alogin.php'</script>";
  }

?>