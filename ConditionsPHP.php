<!DOCTYPE html>
<html>
<body>

<h1>Conditions in PHP</h1>

<?php
echo "Hello World!<hr>";
echo "Coding is fun!<br>"; 
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} else{
    echo "Have a nice day!";
}
?>

</body>
</html>