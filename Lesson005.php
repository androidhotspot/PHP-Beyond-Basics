<!DOCTYPE html>
<html>
<head>
	<title>Server Request Variables PHP Beyond Basics</title>
</head>
<body>
<?php
// echo "Server Details: <br />";
// echo "Server_Name: " . $_SERVER['SERVER_NAME'] ."<br />";
// echo "Server_Address: " . $_SERVER['SERVER_ADDR'] ."<br />";
// echo "Server_Port: " . $_SERVER['SERVER_PORT'] ."<br />";
// echo "Document_Root: " . $_SERVER['DOCUMENT_ROOT'] ."<br /><br />";

// echo "Page Details: <br />";
// echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "<br />";
// echo "SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "<br /><br />";

// echo "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "<br />";
// echo "REMOTE_PORT: " . $_SERVER['REMOTE_PORT'] . "<br />";
// echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br />";
// echo "REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "<br />";
// echo "REQUEST_TIME: " . $_SERVER['REQUEST_TIME'] . "<br />";
// echo "QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "<br />";
echo "HTTP_REFERER: " . $_SERVER['HTTP_REFERER'] . "<br />";
echo "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "<br />";
?>
</body>
</html>