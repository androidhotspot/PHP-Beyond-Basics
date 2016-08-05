<!DOCTYPE html>
<html>
<head>
	<title>Defining Inheritance Classes PHP Beyond Basics</title>
</head>
<body>
<?php
class Language
{
	var $version = 7, $database = 5, $xampp = 3;
	function PHP1()
	{
		echo "Version: " . $this->version . "<br />";
		echo "MySQL: " . $this->database . "<br />";
		echo "Xampp: " . $this->xampp . "<br />";
	}
}

class MySQL1 extends Language
{
	var $version = 5, $database = 6, $xampp = 4;
	function PHP1()
	{
		echo "Version: " . $this->version . "<br />";
		echo "MySQL: " . $this->database . "<br />";
		echo "Xampp: " . $this->xampp . "<br />";
	}	
}

// Create objects for the classes
$lang1 = new Language();
$mysq = new MySQL1();
// Access the Functions of the class using its objects
//echo $lang1->PHP1();
//echo "<br />Class: MySQL1<br />";
// Access the functions of the Base Class
//echo $mysq->PHP1();

echo "Language Parent: " . get_parent_class('Language') . "<br />";
echo "MySQL1 Parent: " . get_parent_class('MySQL1') . "<br />";
echo is_subclass_of('Language', 'Language')? 'true' : 'false' . "<br />";
echo is_subclass_of('MySQL1', 'Language')? 'true' : 'false';
echo "<br />";
echo is_subclass_of('MySQL1', 'MySQL1')? 'true' : 'false' . "<br />";
?>
</body>
</html>