<!DOCTYPE html>
<html>
<head>
	<title>Defining Classes PHP Beyond Basics</title>
</head>
<body>
<?php
class Person
{
	
}

$classes = get_declared_classes();
foreach ($classes as $class) {
	echo $class . "<br />";
}
if (!class_exists("Person")) {
	echo "Class Person Not Exist";
}
else{
	echo "Class Has Been Defined";
}

?>
</body>
</html>