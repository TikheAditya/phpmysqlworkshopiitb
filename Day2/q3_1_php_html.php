<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
  <input type="text" name="side1" placeholder="side1 ">
  <br>
  <input type="text" name="side2" placeholder="side2 ">
  <br>
  <input type="text" name="side3" placeholder="side3 ">
  <br>
<button name ="submit" value ="submit">submit</button>
<br>
<?php
   if(isset($_POST['submit'])){
       $side1= $_POST['side1'];
       $side2= $_POST['side2'];
       $side3= $_POST['side3'];
      if($side1==$side2&&$side2==$side3){
          echo " it is an equilatera triangle";

      }
      elseif($side1==$side2||$side2==$side3||$side3==$side1){
          echo "it is an isosceles triangle";
      }
      else{
          echo "it is an scalene traingle";  
      }
   }


?>
 
  </form>
</body>
</html>