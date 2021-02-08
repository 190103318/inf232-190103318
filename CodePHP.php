<!DOCTYPE html>
<html>
<body>

<h1>My first PHP code in GitHub</h1>

<?php
echo "Hello!<br>";
echo "This code returns which day is it today.<hr>";
$day = date("w");

switch ($day) {
  case 0:
    echo "Today is Sunday! Relax today properly to work all week!";
    break;
  case 1:
    echo "Today is Monday! Work harder!";
    break;
  case 2:
    echo "Today is Tuesday!Work harder again!";
    break;
  case 3:
    echo "Today is Wednesday! Continue working!";
    break;
  case 4:
    echo "Today is Thursday! Try to work!";
    break;
  case 5:
    echo "Today is Friday! Just one day left for weekends!";
    break;
  case 6:
    echo "Today is Saturday! You should relax today!";
    break;
  default:
    echo "You are in a parallel universe where the days of the week are counted differently...";
}
?>

</body>
</html>