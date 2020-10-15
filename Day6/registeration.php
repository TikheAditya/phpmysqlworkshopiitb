
<?php
session_start();

$conn= new mysqli('localhost','root','','workshop');
if($conn){
    echo "successfull";
}
else{
   echo "no connection";
}
$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * form student_login where username ='$name' && password='$pass'";
 
$result=mysqli_query($conn,$q);
$num = mysqli_num_rows($result);
if(num==1){
    echo "data already excist";
}
else{
    $qy="insert into student_login(username ,password)values('$name','$pass')";
     mysqli_query($conn,$qy);
}


?>