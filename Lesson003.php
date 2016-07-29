<!DOCTYPE html>
<html>
<head>
	<title>Dates and Times: Unix</title>
</head>
<body>
<?php
$present = time();
echo $present . "<br />";
echo "Time at Jul 25 2016: " . mktime(2, 30, 45, 7, 25, 2016);
echo "<br />";
//check date
echo "This is a Leap Year: ";
echo checkdate(2, 29, 2015) ? "true" : "false";
//This is a not leap year
echo "<br />";
echo "This is a Leap Year: ";
echo checkdate(2, 29, 2016) ? "true" : "false";
//This is a leap year
echo "<br />";
echo "Last Saturday: " . strtotime("last Saturday");
echo "<br />";
echo "15 July 2016: " . strtotime("15 July, 2016");
echo "<br />";
echo "July 10 2016: " . strtotime("July 10 2016");
?>
</body>
</html>