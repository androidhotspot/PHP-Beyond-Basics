<!DOCTYPE html>
<html>
<head>
	<title>How to Create Rectangle in PHP Tutorials</title>
	<style type="text/css">
	h1{
		text-align: center;
		font-size: 30px;
	}
	</style>
</head>
<body>
<h1>How to Create Rectangle in PHP Tutorials</h1>
<?php
$height = 400;
$height1 = $height / 2;
$width = 400;
$width1 = $width / 2 - 30;
$im = imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
$blue = imagecolorallocate($im, 255, 255, 0);
$green = imagecolorallocate($im, 250, 150, 250);
$red = imagecolorallocate($im, 255, 0, 0);
//imagestring($im, 30, $width1, $height1, "Hello", $green);
imageline($im, 0, 0, 200, 200, $green);

imagerectangle($im, 0, 50, 60, 100, $green);
imagefilledrectangle($im, 100, 110, 150, 190, $green);

imagefilledellipse($im, 120, 60, 60, 60, $red);

imagepng($im, "demo_image.png");

echo "<img src=\"demo_image.png\" />";
?>
</body>
</html>