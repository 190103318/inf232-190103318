<!DOCTYPE html>
<html>
<body>

<h1>My first PHP code in GitHub</h1>

<?php
echo "Hello!";
$day = date("w");

switch ($day) {
  case 0:
    echo "Today is Sunday!";
    break;
  case 1:
    echo "Today is Monday!";
    break;
  case 2:
    echo "Today is Tuesday!";
    break;
  case 3:
    echo "Today is Wednesday!";
    break;
  case 4:
    echo "Today is Thursday!";
    break;
  case 5:
    echo "Today is Friday!";
    break;
  case 6:
    echo "Today is Saturday!";
    break;
  default:
    echo "You are in a parallel universe where the days of the week are counted differently...";
}
?>

</body>
</html>