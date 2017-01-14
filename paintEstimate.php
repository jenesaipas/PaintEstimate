<!DOCTYPE html>
<!--Author: Susan Nagy
	Date:	9/16/14
	File:	paintEstimate.php
	Purpose:Chapter 5 Exercise

-->


<html>
<head>
	<title>King Painting</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>King Painting: Paint Estimate</h1>

	<?php

	$roomLength = $_POST['roomLength'];
	$roomWidth = $_POST['roomWidth'];
	$roomHeight = $_POST['roomHeight'];

	$longWalls = $roomLength * $roomHeight * 2;
	$wideWalls = $roomWidth * $roomHeight * 2;
	$roomCeiling = $roomWidth * $roomLength;
	$roomArea = ceil($longWalls + $wideWalls + $roomCeiling);
	$paintReq = $roomArea / 400;
	$paintCost = round($paintReq * 17.00, 2);
	$laborCost = round($roomArea / 200 * 25.00, 2);
	$totalCost = round($paintCost + $laborCost, 2);	

	print("<p>For a room that is $roomLength' length x $roomWidth' width x $roomHeight' height, the entire room area needed to be painted is $roomArea'.");

	print("<p>The paint would cost $$paintCost. <br>The labor would cost $$laborCost.");

	print("<p>Your grand total cost for painting the room is: $$totalCost.</p>");

	?>


</body>
</html>
