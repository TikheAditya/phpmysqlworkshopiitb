<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel ="stylesheet" href="bootstrap.css">
</head>
<body>
 <div class ="container">
  <div class ="row">
    <div class ="col-lg-6">
      <h2>LOGIN FORM</h2>
      <form action="validation.php" method="POST">
      <div class ="form group">
        <label for="">USER NAME</label>
        <input type="text" name ="user1" class="form-control">
      </div>
       <div class ="form group">
          <label for="">PASSWORD</label>
          <input type="password" name ="password1" class="form-control">
        </div>
        <br>
        <button type="button" class="btn btn-primary">login</button>
        
       </form>
       <div class ="col-lg-6">
         <h2>REGISTER FORM</h2>
    <form action="" method="POST">
      <div class ="form group">
        <label for="">ENTER NAME</label>
        <input type="text" name ="name" class="form-control">
        </div>
      <div class ="form group">
        <label for="">USER NAME</label>
        <input type="text" name ="user" class="form-control">
        </div>
        <div class ="form group">
        <label for="">PASSWORD</label>
        <input type="password" name ="password" class="form-control">
        </div>
        <br>
        <button type="button" name="submit" class="btn btn-primary">REGISTER</button>
        
      </form>

     </div>
  </div>
  </div>
  </div>
  
  <?php


$conn= new mysqli('localhost','root','','workshop');
if($conn->connect_error){
  die('connection failed : '.$connection_error);
}
else{
  $name=$_POST['user1'];
  $pass=$_POST['password1'];
  echo $name;
}
?>


</body>
</html>