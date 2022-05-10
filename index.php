<!DOCTYPE html>
<html>
<head>
<title>PHP Exercise 1: Links and Variables</title>
</head>
<body>
<h1>PHP Exercise 1: Links and Variables</h1>
<p>Use PHP echo and variables to output the
following link information:</p>
<hr>
<?php
$linkName = 'Codecademy';
$linkURL = 'https://www.codecademy.com/';
$linkImage =
'https://static-assets.codecademy.com/Courses/Learn-Redux/matching-game/codecademy_logo.png';
$linkDescription = 'Learn to code interactively, for free.';

echo "<h1>$linkName</h1>";
echo "<br>";
echo "<p>$linkDescription</p>";
echo "<br>";
echo '<img src="'.$linkImage.'" width="200">';
echo "<br>";
echo "<a href='$linkURL'>visit codecademy</a>"
?>
</body>
</html>