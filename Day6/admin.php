<?php

session_start();
error_reporting(0);
$adname = $_POST["uname"];
$connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
mysqli_select_db($connect,"marksheet") or die(mysqli_error());

if ($connect){
$select = "SELECT * FROM admin WHERE adname='$adname'";
$extract = mysqli_query($connect,$select);


while ($row = mysqli_fetch_assoc($extract)) 
{
    
    $adname1 = $row["adname"];
    $paswd  = $row["adpswd"];

}    


mysqli_close($connect);

}

if( (isset($_POST['submit']) and ($adname1 == $_POST["uname"]) and ($paswd == md5($_POST['pswd'])) ) )
{
  $_SESSION['uname'] = $_POST["uname"];
echo "<p style='text-align:center;'><b>Welcome ". $_SESSION['uname'] ."</b></p><br>";

print (' 
        <div style="text-align:center;">
        <form action="insert.php" method="POST">
        <input type="submit" value="INSERT" name="submit"><br><br>
        </form> 
           
        
        <form action="update.php" method="POST">
        <input type="submit" value="UPDATE" name="submit"><br><br>
        </form>
        
        <form action="delete.php" method="POST">
        <input type="submit" name="submit" value="DELETE">
        </form><br>
        
        <form action="view.php" method="POST">
        <input type="submit" name="submit" value="VIEW">
        </form><br><br><br>
       
        
        <form action="alogin.php" method="POST">
        <input type="submit" name="submit" value="Logout">
        </form></div>');
 
       


      }


else
{ 
  echo "<script>alert('Invalid Username Or Password')</script>";
  echo "<script>location.href='alogin.php'</script>";
}



?>