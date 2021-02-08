<!DOCTYPE html>
<html>
<body>

<h1>Simple counter</h1>

<?php
echo "Hello!<br>"; 
$c = 10;
echo "Let's count to 10!<hr>";
for($i = 0; $i < $c; $i++){
	echo  $i + 1 . "<br>";
}
?>

</body>
</html>