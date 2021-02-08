<!DOCTYPE html>
<html>
<body>

<h1>My first PHP code in GitHub</h1>

<?php
echo "Hello World!<hr>";
echo "Coding is fun!<br>"; 
$hour = date("H");

if ($hour < "10") {
  echo "Have a good morning!";
} elseif ($hour < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</body>
</html>