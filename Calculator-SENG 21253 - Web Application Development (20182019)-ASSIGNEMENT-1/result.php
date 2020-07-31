<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>


<?php

$num1= $_SESSION["digit1"];
$num2= $_SESSION["digit2"];
$operator= $_SESSION["operator"];
 

switch($operator){
  case '+':
  echo "<p> $num1 $operator $num2 <br> = ",$num1+$num2,"</p>";
  break;
   case '-':
  echo "<p> $num1 $operator $num2 <br>  = ",$num1-$num2,"</p>";
  break;
   case '*':
  echo "<p> $num1 $operator $num2 <br>  = ",$num1*$num2,"</p>";
  break;
   case '/':
  echo "<p> $num1 $operator $num2 <br>  = ",$num1/$num2,"</p>";
  break;
   case '%':
  echo "<p> $num1 $operator  <br>  = ",$num1/100,"%</p>";
  break;
}

// remove all session variables
session_unset();
// destroy the session
session_destroy(); 

?>


</body>
</html>