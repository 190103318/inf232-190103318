<!DOCTYPE html>
<html>
<body>

<h1>Simple counter</h1>

<?php
echo "Hello!<br>"; 
$counter = 1;

while($counter < 11){
	if($counter == 10){
		echo "Last is $counter<br>";
		$counter++;
	}else{
		echo "Plus one to $counter<br>";
        $counter++;
	}
}
?>

</body>
</html>