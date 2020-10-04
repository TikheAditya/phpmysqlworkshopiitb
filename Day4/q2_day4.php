<html>
<head>String Functions</head>
<body>
    <form action="q2_string_functions.php" method="post">
        Enter a string: <input type="text" name="string" style="margin-left: 67px;" required><br><br>
        <input type="submit">
    </form>
</body>
    </html>


<?php

$str  = @$_POST["string"];
$substr = substr($str,3);
if($str)
{
    echo "You have sumbitted <b>$str</b> as string<br><br>";
    echo "The number of characters in string are: ". strlen($str)."<br>";
    echo "String after converted into array: ";
    echo var_dump(str_split($str));
    echo "<br>";
    echo "String Reverse: ". strrev($str)."<br>";
    echo "The string in lower case: ". strtolower($str)."<br>";
    echo "The string in upper case: ". strtoupper($str)."<br>";
    echo "The substring from given string: $substr<br>";
    echo "The string after replacing with substring: ". str_replace($substr,"hey",$str);
}

?>    