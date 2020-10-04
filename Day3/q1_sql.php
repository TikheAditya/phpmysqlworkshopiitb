
<html>

<p>Fill the form and submit to see the result.</p>
    <form action="q1.php" method="post">
        Name: <input type="text" name="name" style="margin-left: 67px;" required><br>
        Subject 1 Marks: <input type="number" min="0" max="100" name="m1" required><br>
        Subject 2 Marks: <input type="number" min="0" max="100" name="m2" required><br>
        Subject 3 Marks: <input type="number" min="0" max="100" name="m3" required><br>
        Subject 4 Marks: <input type="number" min="0" max="100" name="m4" required><br>
        Subject 5 Marks: <input type="number" min="0" max="100" name="m5" required><br>
        <input type="submit">
    </form>

    </html>


<?php

error_reporting(0);

$name = @$_POST["name"];
$sub1 = @$_POST["m1"];
$sub2 = @$_POST["m2"];
$sub3 = @$_POST["m3"];
$sub4 = @$_POST["m4"];
$sub5 = @$_POST["m5"];
$total_obtained = (@$_POST["m1"] + @$_POST["m2"] + @$_POST["m3"] + @$_POST["m4"] + @$_POST["m5"]);
$total_marks = 500;
$percentage = ((@$_POST["m1"] + @$_POST["m2"] + @$_POST["m3"] + @$_POST["m4"] + @$_POST["m5"]) / 500) * 100;
$connect = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($connect,"result") or die(mysqli_error());

if($name){
    //we have already created database with no values.
$write = mysqli_query($connect,"INSERT INTO class1 VALUES('','$name','$sub1','$sub2','$sub3','$sub4','$sub5','$total_obtained','$total_marks','$percentage')") or die(mysqli_error($connect));
}
mysqli_close($connect);

if ($name)
{
 echo "Connected!!!<br>";
 echo @$_POST["name"]."<br>";
 echo "Marks in Each Subject<br>";
 echo "Subject 1: ".@$_POST["m1"]."<br>";
 echo "Subject 2: ".@$_POST["m2"]."<br>";
 echo "Subject 3: ".@$_POST["m3"]."<br>";
 echo "Subject 4: ".@$_POST["m4"]."<br>";
 echo "Subject 5: ".@$_POST["m5"]."<br>";
 echo "Total Marks Obtained: ".(@$_POST["m1"] + @$_POST["m2"] + @$_POST["m3"] + @$_POST["m4"] + @$_POST["m5"])."<br>";
 echo "Total Marks: 500 <br>";
 echo "Percentage: ".$percentage." %";

} 
?>