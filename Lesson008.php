<!DOCTYPE html>
<html>
<head>
	<title>Defining Classes Methods PHP Beyond Basics</title>
</head>
<body>
<?php
class Person
{
	
	function speak_something()
	{
		echo "This is a Hello from inside the Methods!";
	}
}

$methods = get_class_methods('Person');
	foreach ($methods as $method) {
		echo $method . "<br />"	;
}

if (method_exists('Person','speak_something')) {
	echo "The Method is available inside the class <br />";
}
else{
	echo "The Method is not available inside the class <br />";	
}

$person = new Person();

$person->speak_something();
?>
</body>
</html>