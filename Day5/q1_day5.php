  
<html>
<head>Md5 Encryption</head>
<body>
    <form action="q1_md5.php" method="post">
    Username: <input type="text"  name="u" required><br>
    Password: <input type="password"  name="p" required><br><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>


<?php

error_reporting(0);
   
if (@$_POST["submit"])
{   

    $username = @$_POST["u"];
    $password = md5(@$_POST["p"],TRUE);//md5 function with "TRUE" parameter is used which stores password in 32 character hex format.
     

    $connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
    mysqli_select_db($connect,"credentials") or die(mysqli_error());
    
    if ($connect)
    {   
    
        $extract = mysqli_query($connect,"SELECT * FROM data1 WHERE EXISTS uname=$username");
        while ($row = mysqli_fetch_assoc($extract)) 
        {
         $uname = $row["uname"];            
        }
        if ($uname == $username) //checks if username already exists in database or not.
        {
            echo "Sorry this username is already taken.";
        }
        else
        {
        $write = mysqli_query($connect,"INSERT INTO data1 VALUES('$username','$password')") or die(mysqli_error($connect));
        }                
        
    }
    mysqli_close($connect);
    echo "Credentials stored successfully!!";

}
?>   