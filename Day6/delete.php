<?php
session_start();
error_reporting(0);




if(isset(($_POST['submit'])))
{
  $_SESSION['uname'] = $_POST["uname"];
  echo '<p style="text-align:center;"><strong>Do you really want to delete the data?</strong></p>';
  
    print( '
        <div style="text-align:center;">
        <form action="delete.php" method="POST"> 
        <input type="submit" name="y" value="YES" /> 
        
        <input type="submit" name ="n" value="NO"/> 
        </form>
        
        </div> '); 


}

elseif( isset($_POST["y"])) 
{ 
  
  $_SESSION['uname'] = $_POST["uname"];
  echo '<p style="text-align:center;"><strong>You are going to delete a record</strong></p><br>';
    print('<div style="text-align:center;">
    <form action="delete.php" method="POST"> 
    <input type="text" name="usrname" placeholder="Student Username" required><br><br> 
    <input type="submit" name="delete" value="Delete">  
    </form>
    </div>');

    print ('<br><div style="text-align:center;">
    <form action="admin.php" method="POST">
    <input type="submit" name="submit" value="Home">
    </form></div>');
  
    print ('<br><div style="text-align:center;">
    <form action="alogin.php" method="POST">
    <input type="submit" name="login" value="Logout">
    </form></div>');  

}    

elseif (isset($_POST["delete"]))
    {
      $_SESSION['uname'] = $_POST["uname"];
      

    $uname = @$_POST["usrname"];
    
    $connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
    mysqli_select_db($connect,"marksheet") or die(mysqli_error());
    
    $select = "SELECT * FROM student WHERE  uname='$uname'";
    $extract = mysqli_query($connect,$select);
    
    $suname = "";
    while ($row = mysqli_fetch_assoc($extract)) 
    {
           $suname = $row["uname"];
    }

    if ($uname != $suname)
    {
      echo '<br><p style="text-align:center;">Invalid Username!!<br>Unable to delete the record</p><br>';
      print ('<div style="text-align:center;">
            <form action="admin.php" method="POST">
            <input type="submit" name="submit" value="Home">
            </form></div>');
      exit(0);
      
    }
    
    $delete = "DELETE FROM student WHERE uname='$uname'";

    $write = mysqli_query($connect,$delete) or die("Unable to delete the record!");
    
    if ($uname == $suname){
      echo "<br><p style='text-align:center;'>The record deleted successfully</p><br>";
      mysqli_close($connect);
      print ('<div style="text-align:center;">
            <form action="admin.php" method="POST">
            <input type="submit" name="submit" value="Home">
            </form></div>');


    }
    } 

elseif(!empty($_POST['n'])) { 
  print ('<div style="text-align:center;">
  <form action="admin.php" method="POST">
  <input type="submit" name="submit" value="Home">
  </form></div>');

  
} 

else
  { 
    echo "<script>alert('Invalid Username Or Password')</script>";
    echo "<script>location.href='alogin.php'</script>";
  }



?>