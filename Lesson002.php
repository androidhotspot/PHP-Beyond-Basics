<!DOCTYPE html>
<html>
<head>
	<title>Applying Array Functions PHP Beyond Basics</title>
</head>
<body>
<?php
$numbers = array(100, 110, 340, 230, 540, 670);
// print_r($numbers);
// echo "<br /><br />";

// echo "<hr />";
//Shifts the first element of an array
//and returns it.
$a = array_shift($numbers);
// echo "a: " . $a . "<br />";
// print_r($numbers);
// echo "<br /><br />";

// echo "<hr />";
//Prepends an element to an array
//returns the element count.
$b = array_unshift($numbers, $a);
// echo "b: " . $b . "<br />";
// print_r($numbers);
// echo "<br /><br />";

//Pops last element of an array and returns it.
// $a = array_pop($numbers);
// echo "a: " . $a . "<br />";
// print_r($numbers);
// echo "<br /><br />";

//Pops last element of an array and returns it.
$b = array_push($numbers, $a);
echo "b: " . $b . "<br />";
print_r($numbers);
echo "<br /><br />";
?>
</body>
</html>