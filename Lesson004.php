<!DOCTYPE html>
<html>
<head>
	<title>Dates Timestamp Formatting PHP Beyond Basics</title>
</head>
<body>
<?php
$timestamp = time();
$timestamp1 = strtotime('-1 day');
//echo strftime("The date today is: %d/%m/%y", $timestamp);
//echo "<hr />";
function strip_zeros_from_date($marked_string="")
{
	// Remove the marked Zeros
	$no_zeros = str_replace("*0", '', $marked_string);
	//Remove any Remaining Remarks
	$cleaned_string = str_replace("*", '', $no_zeros);
	return $cleaned_string;
}

//echo strip_zeros_from_date(strftime("The Date Yesterday is: *%d/*%m/%y", $timestamp1));
$dt = time();
$mysql_datetime = strftime("%Y-%m-%d %H:%M:%S" , $dt);
echo "The Date and Time at now is: " . $mysql_datetime;
?>
</body>
</html>