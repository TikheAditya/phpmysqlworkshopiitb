<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST"><input type="text" name="name1" placeholder="name of student ">
  <br>
<input type="text" name="subject1" placeholder="subject1 ">
  <br><input type="text" name="subject2" placeholder="subject2 ">
  <br><input type="text" name="subject3" placeholder="subject3 ">
  <br><input type="text" name="subject4" placeholder="subject4 ">
  <br><input type="text" name="subject5" placeholder="subject5 ">
  <br>
  <button name="submit" value="submit">submit</button>
</form>
<?php
 if(isset($_POST['submit'])){
    $a=$_POST['name1'];
echo"<br>";
    
    $b=$_POST['subject1'];
    echo"<br>";
    $c=$_POST['subject2'];echo"<br>";
    $d=$_POST['subject3'];echo"<br>";
    $e=$_POST['subject4'];echo"<br>";
    $f=$_POST['subject5'];echo"<br>";
    $m=$b+$c+$d+$e+$f;
    $p=($m/500)*100;
   
    echo"<br>";
    echo "<h2>Name of the student: $a</h2>";echo"<br>";
    echo "<h2>MARKS IN EACH SUBJECT</h2>";
    echo "Subject1=$b";echo"<br>";echo "Subject2=$c";echo"<br>";echo "subject 3=$d";echo"<br>";
    echo "Subject4=$e";echo"<br>";
    
    echo "subject5=$f";echo"<br>";
    echo "<h2>TOTAL MARKS OBTAINED</h2>";
    echo "total marks=$m<br>";
    echo "percentage=$p";
 }
?>
    
</body>
</html>